<?php
require 'data/users.php';
ob_start(); ?>

<section class="admin-header">
	<h1>Utilisateurs</h1>
</section>

<section class="admin-content">
	<table>
		<?php foreach ( $users as $user ) : ?>
			<tr class="user-id-<?php echo $user['id']; ?>">
				<td><?php echo $user['username']; ?></td>
				<td><?php echo $user['mail']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</section>

<aside class="admin-sidebar">
</aside>

<?php
$content = ob_get_clean();
require 'views/layout/admin.php';
?>
