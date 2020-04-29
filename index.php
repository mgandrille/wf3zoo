<?php

include 'config/bdd.php';

$request = "SELECT * FROM animals";
$response = $bdd->query($request);
$animals = $response->fetchAll(PDO::FETCH_ASSOC);

// var_dump($animals);

?>

<?php include 'partials/header.php'; ?>
    <?php include 'partials/navbar.php'; ?>

    <main role="main">
        <div id="alertFirstVisit" class="alert alert-success" style="display:none">
            Bonjour, bienvenue sur ce site pour la première fois !
        </div>
        <div id="alertHasVisited" class="alert alert-warning" style="display:none">
            Bonjour, vous êtes de retour sur le site ! 
            <button id="btnCancelVisit" class="btn btn-sm btn-danger">Ne pas se souvenir de moi !</button>
        </div>

        <?php include 'partials/jumbotron.php' ?>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">

                <?php foreach ($animals as $animal) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="assets/img/<?= $animal['image'] ?>" class="card-img-top" height="225" alt="...">
                            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg> -->
                            <div class="card-body">
                                <h5 class="card-title"><?= $animal['nom'] ?></h5>
                                <p class="card-text"><?= $animal['description_courte'] ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><a href="show.php?id=<?= $animal['id'] ?>">Voir</a></button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><a href="edit.php?id=<?= $animal['id'] ?>">Modifier</a></button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><a href="confirmDelete.php?id=<?= $animal['id'] ?>">Supprimer</a></button>
                                    </div>
                                    <!-- <small class="text-muted"><?= date("H:m")?></small> -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

                </div>
            </div>
        </div>

    </main>

    <script>
        document.getElementById('btnCancelVisit').addEventListener('click', function() {
            localStorage.setItem('hasVisited', false);
            document.location.reload();
        });
        if (localStorage.getItem('hasVisited') === 'true') {
            document.getElementById('alertHasVisited').style = 'display: block';
        } else {
            document.getElementById('alertFirstVisit').style = 'display: block';
            localStorage.setItem('hasVisited', true);
        }
    </script>

    <?php include 'partials/footer.php' ?>