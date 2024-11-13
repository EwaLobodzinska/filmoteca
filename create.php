<?php
require("connexion.php");

$title = $_POST['title'];
$year = $_POST['year'];
$synopsis = $_POST['synopsis'];
$director = $_POST['director'];
$genre = $_POST['genre'];

$sqltitle = "SELECT title FROM movie WHERE title = '$title'";
$resulttitle = $conn->query($sqltitle);

if ($resulttitle->num_rows ==0){
    $sql = "INSERT INTO movie (title, year, synopsis, director, genre) 
    VALUES ('$title', '$year', '$synopsis', '$director', '$genre')";
    $result = $conn->query($sql);
}
else{
    echo "<p>Impossible de creer un compte</p>";
}

echo "<br><button style='background: black; color: white;><a href='liste_films.php'>Revenir</a></button>"
?>
