<?php

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=3306', 'root', 'root');
$request = "SELECT * FROM animals WHERE id=".$_GET["id"];
$response = $bdd->query($request);
$animal = $response->fetch(PDO::FETCH_ASSOC);

// var_dump($animal);

$dateEnTimestamp = strtotime($animal['date_de_naissance']);
$dateNaissance = date("j / m / Y", $dateEnTimestamp);

if($animal['sexe'] === '0') {
    $sexe = 'mâle';
}
if($animal['sexe'] === '1') {
    $sexe = 'femelle';
}


?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main role="main">

    <div class="card">
        <img src="assets/img/<?= $animal['image'] ?>" class="card-img-top" height="550" alt="...">
        <div class="card-body">
            <h3 class="card-title"><?= $animal['nom'] ?></h3>
            <p class="card-text">Some quick description.</p>
        </div> 
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><Strong>Espèce</Strong> 
                <p><?= $animal['espece'] ?> (sexe : <?= $sexe ?>)</p>
            </li>
            <li class="list-group-item"><strong>Morphologie</strong>
                <ul>
                    <li>Poids : <?= $animal['poids'] ?> Kg </li>
                    <li>Taille : <?= $animal['taille'] ?> cm </li>
                </ul>
            </li>
            <li class="list-group-item"><strong>Origine</strong>
                <ul>
                    <li>Date de naissance : <?= $dateNaissance ?></li>
                    <li>Pays de naissance : <?= $animal['pays_origine'] ?></li>
                </ul>
            </li>
        </ul>
        <!-- <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div> -->
    </div>

</main>

<?php include 'partials/footer.php' ?>
