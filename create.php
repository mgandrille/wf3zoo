<?php

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=3306', 'root', 'root');
$request = "INSERT INTO animals (espece, nom, taille, poids, date_de_naissance, pays_origine, sexe, description) 
            VALUES ('". $_POST["espece"] ."', '". $_POST["name"] . "', '" . $_POST["taille"] .
                    "', '" . $_POST["poids"] . "', '" . $_POST["date_de_naissance"] . "', '" . $_POST["pays_origine"] .
                    "', '" . $_POST["sexe"] . "', '" . $_POST["description"] . "')";
// $bdd->query($request);
var_dump($request);

$request = "INSERT INTO animals (espece, nom, taille, poids, date_de_naissance, pays_origine, sexe) 
            VALUES ('espece', 'name', 'taille', 'poids', 'date_de_naissance', 'pays_origine', 'sexe')";
$response = $bdd->prepare($request);
$response->execute([
    'espece' => $_GET['espece'],
    'name' => $_GET['name'],
    'poids' => $_GET['poids'],
    'taille' => $_GET['taille'],
    'date_de_naissance' => $_GET['date_de_naissance'],
    'pays_origine' => $_GET['pays_origine'],
    'sexe' => $_GET['sexe'],
]);

var_dump($response);
// header('Location: index.php');

?>