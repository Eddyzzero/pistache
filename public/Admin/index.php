<?php

session_start();
require_once '../../config/dataBase.php';


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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Pistache-restaurant</title>
</head>
<body class="login-admin">
<main>
		<div class="login-wrapper">
			<form action="" method="POST">
				<a class="logo" href="../index.php">
					<img src="../assets/images/png/logoWhite.png" width="112" height="112" alt="">
				</a>

				<label for="username">Email ou login</label>
				<input id="username" type="text" name="username" placeholder="Email ou login" value="<?php echo (isset($_POST['username'])) ? $_POST['username'] : ''; ?>">

				<label for="password">Mot de passe</label>
				<input id="password" type="password" name="password" placeholder="Mot de passe" value="<?php echo (isset($_POST['password'])) ? $_POST['password'] : ''; ?>">

				<button class="button-primary button-small button" type="submit">Se connecter</button>
			</form>
		</div>
	</main>
</body>
</html>