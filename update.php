<?php

include 'config/bdd.php';

$request = "UPDATE animals 
            SET espece = :espece, nom = :nom, poids = :poids, taille = :taille,
                date_de_naissance = :date_de_naissance, pays_origine = :pays_origine,
                sexe = :sexe, description_courte = :description_courte 
            WHERE id = :id";
$response = $bdd->prepare($request);

$response->execute([
    'id'                => $_POST['id'],
    'espece'            => $_POST['espece'],
    'nom'               => $_POST['nom'],
    'poids'             => $_POST['poids'],
    'taille'            => $_POST['taille'],
    'date_de_naissance' => $_POST['date_de_naissance'],
    'pays_origine'      => $_POST['pays_origine'],
    'sexe'              => $_POST['sexe'],
    'description_courte'=> $_POST['description_courte']
]);

var_dump($_POST);

// header('Location: index.php');

?>