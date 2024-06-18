<?php
require 'data/login.php';
ob_start(); ?>

<div class="login-wrapper">
	<form action="" method="POST">
		<a class="logo" href="../index.php">
			<img src="../assets/images/logo-bioblog.png" width="112" height="112" alt="">
		</a>

		<label for="username">Email ou login</label>
		<input id="username" type="text" name="username" placeholder="Email ou login" value="<?php echo (isset($_POST['username'])) ? $_POST['username'] : ''; ?>">

		<label for="password">Mot de passe</label>
		<input id="password" type="password" name="password" placeholder="Mot de passe" value="<?php echo (isset($_POST['password'])) ? $_POST['password'] : ''; ?>">

		<button class="button-primary button-small button" type="submit">Se connecter</button>
		<a class="link- link" href="#">S’inscrire</a>
	</form>

	<a class="link- link --reset-password" href="#">Mot de passe oublié ?</a>
</div>

<?php
$content = ob_get_clean();
require 'views/layout/admin.php';
?>
