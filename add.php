<?php require_once 'config/config.php' ?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main role="main">
    <h1>Page d'ajout d'un animal</h1>
    <p>Remplissez le formulaire ci-dessous pour ajouter un animal au zoo...</p>

    <div class="container-fluid">
        <form method="post" action="create.php">
            <div class="form-group row">
                <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom de l'animal">
                </div>
            </div>
            <div class="form-group row">
                <label for="description_courte" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                <textarea name="description_courte" class="form-control" id="description_courte" rows="3" placeholder="Description courte sur l'animal"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="espece" class="col-sm-2 col-form-label">Espèce</label>
                <div class="col-sm-10">
                    <input type="text" name="espece" class="form-control" id="espece" placeholder="Espèce de l'animal">
                </div>
            </div>
            <div class="form-group row">
                <label for="taille" class="col-sm-2 col-form-label">Taille (en cm)</label>
                <div class="col-sm-10">
                    <input type="number" name="taille" class="form-control" id="taille" min="1" placeholder="taille de l'animal en cm">
                </div>
            </div>
            <div class="form-group row">
                <label for="poids" class="col-sm-2 col-form-label">Poids (en kg)</label>
                <div class="col-sm-10">
                    <input type="number" name="poids" class="form-control" id="poids" min="1" placeholder="poids de l'animal en Kg">
                </div>
            </div>
            <div class="form-group row">
                <label for="date_de_naissance" class="col-sm-2 col-form-label">Date de naissance</label>
                <div class="col-sm-10">
                    <input type="date" name="date_de_naissance" class="form-control" id="date_de_naissance">
                </div>
            </div>
            <div class="form-group row">
                <label for="pays_origine" class="col-sm-2 col-form-label">Pays d'origine</label>
                <div class="col-sm-10">
                    <input type="text" name="pays_origine" class="form-control" id="pays_origine" placeholder="Pays d'origine de l'animal">
                </div>
            </div>
            <div class="form-group row">
                <label for="sexe" class="col-sm-2 col-form-label">Sexe</label>
                <div class="col-sm-10">
                    <select name="sexe" id="sexe">
                        <option value="0">Mâle</option>
                        <option value="1">Femelle</option>
                    </select>
                </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Créer un animal">
        </form>

    </div>

</main>

<?php include 'partials/footer.php' ?>
