<?php

require 'data/posts-list.php';

?>

<section class="admin-header">
	<h1>Articles</h1>
	<a class="button-primary button-small button" href="post-edit.php">Ajouter un article</a>
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
						<a <?php echo $menu['id']; ?>"><?php echo $menu['nom']; ?></a>
					</h3>
					<div>
						<a href="post-edit.php?id=<?php echo $menu['id']; ?>">Modifier</a>
						<button onclick="deleteMenuItem(<?php echo $menu['id']; ?>)">Supprimer</button>
					</div>
				</td>
				<td><?php echo $status; ?></td>
				<td><?php echo $created_at; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</section>

<aside class="admin-sidebar">
</aside>

<?php

require 'views/layout/admin.php';
?>

<script>
        function deleteMenuItem(id) {
            if (confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')) {
                window.location.href = 'posts-list.php?delete_id=' + id;
            }
        }
</script>
