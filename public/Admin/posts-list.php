<?php
require 'data/posts-list.php';
ob_start(); ?>

<section class="admin-header">
	<h1>Articles</h1>
	<a class="button-primary button-small button" href="posts-edit.php">Ajouter un article</a>
</section>

<section class="admin-content">
	<table>
		<?php foreach ( $posts as $menu ) :
			$status = ($menu['status']) ? "Publié" : "Brouillon";
			$created_at = date("d/m/Y", strtotime($menu['created_at']));
			?>
			<tr class="post-id-<?php echo $menu['id']; ?>">
				<td>
					<h3>
						<a href="posts-edit.php?id=<?php echo $menu['id']; ?>"><?php echo $menu['nom']; ?></a>
					</h3>
					<div>
						<a class="link-small link --publish" href="../single.php?id=<?php echo $menu['id']; ?>">Voir l’article</a>
						<a class="link-small link --update" href="posts-edit.php?id=<?php echo $menu['id']; ?>">Modifier</a>
						<button class="">Supprimer</button>
					</div>
				</td>
				<td><?php echo $users['username']; ?></td>
				<td><?php echo $status; ?></td>
				<td><?php echo $created_at; ?></td>
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
