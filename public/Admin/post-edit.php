<?php
require 'data/posts-edit.php';
ob_start(); ?>

<section class="admin-header">
	Ajouter un nouvel article
</section>

<section class="admin-content">
	<form action="" method="POST">
		<div>
			<div class="form-row">
				<label class="title" for="title">Titre de l’article</label>
				<input id="nom" type="text" name="nom" placeholder="Titre de l'article" value="<?php echo (isset($menu['nom'])) ? $menu['nom'] : ''; ?>">
			</div>

			<div class="form-row">
				<label class="title" for="content">Contenu de l’article</label>
				<textarea id="content" name="content" placeholder="Contenu de l’article"><?php echo $menu['content'] ?? ''; ?></textarea>
			</div>

			<div class="form-row --button">
				<?php if ( isset( $menu_id ) && ! empty ( $menu_id ) ) : ?>
					<button type="submit" class="button-primary button-small button" name="update">Modifier</button>
					<button type="submit" class="link-delete link" name="delete">Supprimer</button>
				<?php else : ?>
					<button type="submit" class="button-primary button-small button" name="publish">Publier</button>
				<?php endif; ?>
			</div>
		</div>

		<div>
			<div class="form-row --checkbox">
				<h3 class="title">Statut de l’article</h3>
				<!-- <select name="status" id="status">
					<option value="0" <?php echo ( isset( $menu['status'] ) && $menu['status'] == 0 ) ? 'selected' : ''; ?>>Brouillon</option>
					<option value="1" <?php echo ( isset( $menu['status'] ) && $menu['status'] == 1 ) ? 'selected' : ''; ?>>Publié</option>
				</select> -->

				<div>
					<div>
						<input id="status" type="checkbox" name="status" <?php echo ( isset( $menu['status'] ) && $menu['status'] == 1 ) ? 'checked' : ''; ?>>
						<label for="status">Publié</label>
					</div>
				</div>
			</div>

			<div class="form-row --checkbox">
				<h3 class="title">Catégorie de l’article</h3>

				<div>
					<?php foreach ($categories as $categorie) : ?>
						<div>
							<input id="categorie-<?php echo $categorie['id']; ?>" type="radio" name="categorie" value="<?php echo $categorie['id']; ?>" <?php echo ( isset( $menu['categorie_id'] ) && $menu['categorie_id'] == $categorie['id'] ) ? 'checked' : ''; ?>>
							<label for="categorie-<?php echo $categorie['id']; ?>"><?php echo $categorie['nom']; ?></label>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</form>