<?php

session_start();

$page = "login";

if ( isset($_SESSION["current_user"]) ) {
	header('Location: posts-list.php');
}

require_once '../../config/database.php';

function sanitize_input($input) {
	$input = trim($input);
	$input = stripslashes($input);
	$input = htmlspecialchars($input);

	return $input;
}

if ( $_POST ) {

	if (isset($_POST['username']) && ! empty($_POST['username'])) {
		$username = sanitize_input($_POST['username']);
	}

	if (isset($_POST['password']) && ! empty($_POST['password'])) {
		$password = sanitize_input($_POST['password']);
		// FIXME: Check password hash var_dump(password_verify($password, $_POST['password']));
	}

	if (isset($_POST['username']) && isset($_POST['password'])) {
		$query = "SELECT *
		FROM users
		WHERE username = :username"; // AND password = :password";

		$statement = $pdo->prepare( $query );
		$statement->bindValue(':username', $username);
		// $statement->bindValue(':password', $password);
		$statement->execute();
		$users = $statement->fetch();

		if ( $users ) {
			// if (password_verify($password, $users['password'])) {
			// 	echo "Login successful!";

				$_SESSION["current_user"]['id'] = $users['id'];
				$_SESSION["current_user"]['name'] = $users['username'];
				$_SESSION["current_user"]['role'] = 'administrator';
				$_SESSION['last_activity'] = time();

				header('Location: posts-list.php');
			// } else {
			// 	var_dump("Cette combinaison username et password n'existe pas.");
			// }
		} else {
			var_dump("Cette combinaison username et password n'existe pas.");
		}
	}
}
