<?php require_once 'config/config.php' ?>

<?php

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
}

include 'config/bdd.php';

$request = "SELECT * FROM animals WHERE id=".$_GET["id"];
$response = $bdd->query($request);
$animal = $response->fetch(PDO::FETCH_ASSOC);

// var_dump($animal);

$dateEnTimestamp = strtotime($animal['date_de_naissance']);
$dateNaissance = date("Y-m-d", $dateEnTimestamp);

?>



<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main role="main">
    <h1>Page de modification d'un animal</h1>
    <p>Modifiez le formulaire ci-dessous pour mettre à jour l'animal du zoo...</p>

    <div class="container-fluid">
        <form method="post" action="update.php">
            <input type="hidden" name="id" class="form-control" id="id" value="<?= $animal['id'] ?>">
            <div class="form-group row">
                <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                    <input type="text" name="nom" class="form-control" id="nom" value="<?= $animal['nom'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="description_courte" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                <textarea name="description_courte" class="form-control" id="description_courte" rows="3"><?= $animal['description_courte'] ?></textarea>
                </div>
            </div> 
            <div class="form-group row">
                <label for="espece" class="col-sm-2 col-form-label">Espèce</label>
                <div class="col-sm-10">
                    <input type="text" name="espece" class="form-control" id="espece" value="<?= $animal['espece'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="taille" class="col-sm-2 col-form-label">Taille (en cm)</label>
                <div class="col-sm-10">
                    <input type="number" name="taille" class="form-control" id="taille" min="1" value="<?= $animal['taille'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="poids" class="col-sm-2 col-form-label">Poids (en kg)</label>
                <div class="col-sm-10">
                    <input type="number" name="poids" class="form-control" id="poids" min="1" value="<?= $animal['poids'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="date_de_naissance" class="col-sm-2 col-form-label">Date de naissance</label>
                <div class="col-sm-10">
                    <input type="date" name="date_de_naissance" class="form-control" id="date_de_naissance" value="<?= $dateNaissance ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="pays_origine" class="col-sm-2 col-form-label">Pays d'origine</label>
                <div class="col-sm-10">
                    <input type="text" name="pays_origine" class="form-control" id="pays_origine" value="<?= $animal['pays_origine'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="sexe" class="col-sm-2 col-form-label">Sexe</label>
                <div class="col-sm-10">
                    <select name="sexe" id="sexe"> <!-- tester lequel doit être selected-->
                        <option value="0" <?= ($animal['sexe'] === "0") ? 'selected' : ''; ?> >Mâle</option>
                        <option value="1" <?= ($animal['sexe'] === "1") ? 'selected' : ''; ?> >Femelle</option>
                    </select>
                </div>
            </div>
            <input class="btn btn-warning" type="submit" value="Modifier">
        </form>

    </div>

</main>

<?php include 'partials/footer.php' ?>
