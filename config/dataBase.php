<?php
//configuration de la basde de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pistache";

//créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

//verifier la connéxion
if ( $conn-> connect_error) 
{
    die("connexion echoué: " . $conn->connect_error);
}

//---------  Récuperation des données du formulaire pour les reservations   ------------------
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$data = $_POST['data'];
$time = $_POST['time'];
$adults = $_POST['adults'];
$childend = $_POST['childend'];
$requests = $_POST['requests'];

//préparation et excecution de la requête SQL
$sql = "INSERT INTO (customer_name, customer_phone, customer_email, reservation_date, reservation_time, num_adults, num_childs, special_requests)
VALUES ( '$name', '$phone', '$email', '$data', '$time', '$adults', '$childend', '$requests' )";

if ( $conn->query($sql) === TRUE ) 
{
    echo "Reservation réussie!";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

//fermer la connexion
$conn->close();


// ---------eviter les injections SQL ------ 
// Préparer la requête SQL
$stmt = $conn->prepare("INSERT INTO reservations (customer_name, customer_phone, customer_email, reservation_date, reservation_time, num_guests, special_requests) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssis", $name, $phone, $email, $date, $time, $guests, $requests);

// Exécuter la requête
if ($stmt->execute()) {
    echo "Réservation réussie!";
} else {
    echo "Erreur: " . $stmt->error;
}

// Fermer la requête et la connexion
$stmt->close();
$conn->close();


// --------- recuperer la base de données avec les recettes  ------ 
// Requête SQL pour récupérer les starters
$sql = "SELECT nom, description, prix FROM starters";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Parcourir chaque ligne de résultat
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["nom"] . "</h2>";
        echo "<p><strong>Description :</strong> " . $row["description"] . "</p>";
        echo "<p><strong>Prix :</strong> $" . $row["prix"] . "</p>";
        echo "<hr>";
    }
} else {
    echo "0 résultats";
}

// Requête SQL pour récupérer les maincourse
$sql = "SELECT nom, description, prix FROM maincourse";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["nom"] . "</h2>";
        echo "<p><strong>Description :</strong> " . $row["description"] . "</p>";
        echo "<p><strong>Prix :</strong> $" . $row["prix"] . "</p>";
        echo "<hr>";
    }
} else {
    echo "0 résultats";
}

// Requête SQL pour récupérer les dessert
$sql = "SELECT nom, description, prix FROM dessert";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["nom"] . "</h2>";
        echo "<p><strong>Description :</strong> " . $row["description"] . "</p>";
        echo "<p><strong>Prix :</strong> $" . $row["prix"] . "</p>";
        echo "<hr>";
    }
} else {
    echo "0 résultats";
}

// Requête SQL pour récupérer les bieres
$sql = "SELECT nom, description, prix FROM beers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["nom"] . "</h2>";
        echo "<p><strong>Description :</strong> " . $row["description"] . "</p>";
        echo "<p><strong>Prix :</strong> $" . $row["prix"] . "</p>";
        echo "<hr>";
    }
} else {
    echo "0 résultats";
}

// Requête SQL pour récupérer les cocktails
$sql = "SELECT nom, description, prix FROM cocktails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["nom"] . "</h2>";
        echo "<p><strong>Description :</strong> " . $row["description"] . "</p>";
        echo "<p><strong>Prix :</strong> $" . $row["prix"] . "</p>";
        echo "<hr>";
    }
} else {
    echo "0 résultats";
}