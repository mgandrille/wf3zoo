<?php require_once 'config/config.php' ?>

<?php

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
}

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

<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main role="main">
    <h1>Mise à Jour</h1>

    <div class="alert alert-warning" role="alert">
        L'animal <strong><?= $_POST['nom'] ?></strong> a bien été mis à jour !
    </div>

</main>

<?php include 'partials/footer.php' ?>
