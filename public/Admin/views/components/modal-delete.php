<form action="data/category_delete.php" method="POST">
	<input type="hidden" name="category_id" value="">
	<h2>Êtes vous sur de vouloir supprimer ?</h2>
	<p>Attention, cette action est définitive et irréversible.</p>

	<div class="button-wrapper">
		<button type="button" class="button-primary button-small button-cancel button" data-click="close">Annuler</button>
	<button type="submit" class="button-primary button-small button-delete button" data-click="drop">Supprimer</button>
	</div>
</form>
