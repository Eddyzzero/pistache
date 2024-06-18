<?php
require 'data/categories.php';
ob_start(); ?>

<section>
	<header class="admin-header">
		<h1>Catégories</h1>
		<button type="button" class="button-primary button-small button" data-click="new-category">Ajouter la catégorie</button>
	</header>

	<div class="admin-content">
		<table class="categories-list">
			<tbody>
				<?php foreach ($categories as $categorie) : ?>
					<tr class="categorie-item categorie-id-<?php echo $categorie['id']; ?>">
						<td>
							<form action="data/category_update.php" method="POST">
								<input type="hidden" name="category_id" value="<?php echo $categorie['id']; ?>">
								<input type="text" name="category_name" value="<?php echo $categorie['nom']; ?>">
								<div>
									<button type="submit" data-click="update">Modifier</button>
									<button type="button" data-click="delete">Supprimer</button>
								</div>
							</form>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<aside class="admin-sidebar">
	</aside>
</section>

<?php
$content = ob_get_clean();
require 'views/layout/admin.php';
?>