<?php require_once 'config/config.php' ?>

<?php

require 'config/bdd.php';

// $request = "INSERT INTO animals (espece, nom, taille, poids, date_de_naissance, pays_origine, sexe, description_courte) 
//             VALUES ('". $_POST["espece"] ."', '". $_POST["name"] . "', '" . $_POST["taille"] .
//                     "', '" . $_POST["poids"] . "', '" . $_POST["date_de_naissance"] . "', '" . $_POST["pays_origine"] .
//                     "', '" . $_POST["sexe"] . "', '" . $_POST["description"] . "')";
// $bdd->query($request);
//
//
// Requête préparée :
$request = "INSERT INTO animals (espece, nom, taille, poids, date_de_naissance, pays_origine, sexe, description_courte) 
            VALUES (:espece, :nom, :taille, :poids, :date_de_naissance, :pays_origine, :sexe, :description_courte)";
$response = $bdd->prepare($request);

$response->execute([
    'espece'            => $_POST['espece'],
    'nom'               => $_POST['nom'],
    'poids'             => $_POST['poids'],
    'taille'            => $_POST['taille'],
    'date_de_naissance' => $_POST['date_de_naissance'],
    'pays_origine'      => $_POST['pays_origine'],
    'sexe'              => $_POST['sexe'],
    'description_courte'=> $_POST['description_courte']
]);

var_dump($response->$debugDumpParams());


// header('Location: index.php');

?>