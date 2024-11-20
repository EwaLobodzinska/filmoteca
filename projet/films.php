<?php
require('connexion.php');
require('page.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des films</title>
    <style>
        .films{
            margin-left: 25%;
        }
    </style>
</head>
<body>
    <div class="films">
    <h1> Liste des Films </h1><br>
    <?php



$sql = "SELECT * FROM movie";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<h2>".$row['title']."</h2>".
        "<p><b>Year: </b>".$row['year']."</p>".
        "<p><b>Synopsis: </b>".$row['synopsis']."</p>".
        "<p><b>Director: </b>".$row['director']."</p>".
        "<p><b>Genre: </b>".$row['genre']."</p>";
    }
}
?>
</div>
</body>
</html>



