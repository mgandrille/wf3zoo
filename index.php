<?php

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=3306', 'root', 'root');
$request = "SELECT * FROM animals";
$response = $bdd->query($request);
$animals = $response->fetchAll(PDO::FETCH_ASSOC);

// var_dump($animals);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>WebForce3 Zoo</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <?php include 'partials/navbar.php'; ?>

    <main role="main">

        <?php include 'partials/jumbotron.php' ?>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">

                <?php foreach ($animals as $animal) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title"><?= $animal['nom'] ?></h5>
                                <p class="card-text">Vous souhaitez en savoir plus ? Cliquez sur le bouton !</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><a href="show.php?id=<?= $animal['id'] ?>"> View </a></button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

                </div>
            </div>
        </div>

    </main>

    <?php include 'partials/footer.php' ?>

</body>

</html>