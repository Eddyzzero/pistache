<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Pistache-restaurant</title>
</head>
<body>
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