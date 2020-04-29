<?php require_once 'config/config.php' ?>

<?php

include 'config/bdd.php';

$request = "SELECT * FROM animals WHERE id=".$_GET["id"];
$response = $bdd->query($request);
$animal = $response->fetch(PDO::FETCH_ASSOC);

// var_dump($animal);

$dateEnTimestamp = strtotime($animal['date_de_naissance']);
$dateNaissance = date("d/m/Y", $dateEnTimestamp);

?>



<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main role="main">
    <div class="container-fluid">
        <h1>Page de suppression d'un animal</h1>
        <p>Vous souhaitez supprimer l'animal suivant :</p>

        <p>Nom : <?= $animal['nom'] ?><br>
        Espèce : <?= $animal['espece'] ?> <br>
        Taille : <?= $animal['taille'] ?> cm <br>
        Poids : <?= $animal['poids'] ?> Kg <br>
        Date de naissance : <?= $dateNaissance ?> <br>
        Pays d'origine : <?= $animal['pays_origine'] ?> <br>

    </div>
    <div class="container">
        <div class="row">
            <p>Êtes-vous sûr de vouloir supprimer l'animal <strong><?= $animal['nom'] ?></strong> (espèce : <?= $animal['espece'] ?>) ?</p>
            <div class="col">
                <a class="btn btn-danger" href="delete.php?id=<?= $animal['id'] ?>" role="button">Oui</a>
                <a class="btn btn-primary" href="index.php" role="button">Non</a>
            </div>
        </div>
    </div>
    
</main>

<?php include 'partials/footer.php' ?>
