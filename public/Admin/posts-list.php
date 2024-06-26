<?php
require 'data/posts-list.php'; 
?>

<section class="container-posts-list">
	<section class="container-search-bar">
		<section class="admin-header">
			<h1>Articles</h1>
			<a  class="btn" href="post-edit.php">Ajouter un article</a>
		</section>

		<section>
			<input type="search" id="searchInput" placeholder=rechercher>
			<button class="btn">Recherche</button>
			<ul id="listElement">
				<li>Entrées</li>
				<li>Plats</li>
				<li>Désserts</li>
				<li>Boissons</li>
				<li>Cocktails</li>
			</ul>
		</section>
	</section>
	<section class="articles-content">
		<table>
			<?php foreach ( $posts as $menu ) :
				$status = ($menu['status']) ? "Publié" : "Brouillon";
				$created_at = date("d/m/Y", strtotime($menu['created_at']));
				$prix = ($menu['prix']);
				?>
				<tr class="posts"<?php echo $menu['id']; ?>">
					<td>
						<h3>
							<a <?php echo $menu['id']; ?>"><?php echo $menu['nom']; ?></a>
						</h3>
						<div class="btn-container">
							<a class=" btn-articles" href="post-edit.php?id=<?php echo $menu['id']; ?>">Modifier</a>
							<button class="btn-articles" onclick="deleteMenuItem(<?php echo $menu['id']; ?>)">Supprimer</button>
						</div>
						<td><?php echo $status; ?></td>
						<td><?php echo $prix; ?> €</td>
						<td><?php echo $created_at; ?></td>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</section>
</section>

<script>
		//modal pour eliminer des élements
        function deleteMenuItem(id) {
            if (confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')) {
                window.location.href = 'posts-list.php?delete_id=' + id;
            }
        }

		//
		let elements = [
			{ nom: "Entrées" },
			{ nom: "Plats" },
			{ nom: "Désserts" },
			{ nom: "Boissons" },
			{ nom: "Cocktails" }
		];

	function renderElements() {
		const elementList = document.getElementById('listElement');
		elementList.innerHTML = '';

		elements.forEach(element => {
			const li = document.createElement('li');
			li.textContent = element.nom;
			elementList.appendChild('li');
		});
	}

	renderElements();

	const searchInput = document.getElementById('searchInput');

	searchInput.addEventListener('input', function() {
		const searchTerm = searchInput.value.trim().toLowerCase();
		const filteredElements = elements.filter(element =>
			element.nom.toLowerCase().includes(searchTerm)
		);
		
		renderFilteredElements(filteredElements);
	});

	function renderFilteredElements(filteredElements) {
		const elementList = document.getElementById('listElement');
		elementList.innerHTML = '';

		filteredElements.forEach(element => {
			const li = document.createElement('li');
			li.textContent = element.nom;
			elementList.appendChild('li');
		});
	}

function renderFilteredElements(filteredElements, sortOrder = 'asc') {
    const sortedElements = filteredElements.slice().sort((a, b) => {
        let nomA = a.nom.toUpperCase();
        let nomB = b.nom.toUpperCase();
        if (sortOrder === 'desc') {
            return nomB.localeCompare(nomA);
        } else {
            return nomA.localeCompare(nomB);
        }
    });

    const elementList = document.getElementById('listElement');
    elementList.innerHTML = '';

    sortedElements.forEach(element => {
        const li = document.createElement('li');
        li.textContent = element.nom;
        elementList.appendChild('li');
    });
}
</script>
