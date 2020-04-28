<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main role="main">

    <h1>Données récupérées :</h1>
    <div class="container">
        <p>espece : <?= $_POST["espece"] ?></p>
        <p>nom : <?= $_POST["name"] ?></p>
        <p>taille : <?= $_POST["taille"] ?></p>
        <p>poids : <?= $_POST["poids"] ?></p>
        <p>date_de_naissance : <?= $_POST["date_de_naissance"] ?></p>
        <p>pays_origine : <?= $_POST["pays_origine"] ?></p>
        <p>sexe : <?= $_POST["sexe"] ?></p>
    </div>

</main>

<?php include 'partials/footer.php' ?>

