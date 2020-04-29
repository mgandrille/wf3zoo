<?php

include 'config/bdd.php';

$request = "DELETE FROM animals 
            WHERE id = :id";
$response = $bdd->prepare($request);

$response->execute([
    'id' => $_GET['id'],
]);

// var_dump($_GET);
// header('Location: index.php');

?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main role="main">

    <h1>Suppression</h1>

    <div class="alert alert-danger" role="alert">
        L'animal a bien été supprimé !
    </div>


</main>

<?php include 'partials/footer.php' ?>
