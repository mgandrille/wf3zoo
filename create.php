<?php

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=3306', 'root', 'root');
$request = "INSERT INTO animals (espece, nom, taille, poids, date_de_naissance, pays_origine, sexe) 
            VALUES ('". $_POST["espece"] ."', '". $_POST["name"] . "', '" . $_POST["taille"] .
                    "', '" . $_POST["poids"] . "', '" . $_POST["date_de_naissance"] . "', '" . $_POST["pays_origine"] .
                    "', '" . $_POST["sexe"] . "')";
$bdd->query($request);

header('Location: index.php');

?>