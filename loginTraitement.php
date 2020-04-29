<?php require_once 'config/config.php' ?>

<?php

include './config/bdd.php';
$request = "SELECT * FROM user 
            WHERE email = :email && password = :password";
$response = $bdd->prepare($request);
$response->execute([
    'email'    => $_POST['email'],
    'password'    => $_POST['password']
]);


die;

?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main role="main">

    <?php if ($users) : ?>
        
    <div class="alert alert-success" role="alert">
        Votre compte a bien été créé !
    </div>

    <?php else : ?>
    <div class="alert alert-danger" role="alert">
        Erreur d'authentification...
    </div>

    <?php endif ; ?>

</main>

<?php include 'partials/footer.php' ?>
