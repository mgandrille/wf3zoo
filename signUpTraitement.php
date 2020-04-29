<?php require_once 'config/config.php' ?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main role="main">

    <?php if ($_POST['password'] === $_POST['confirmPassword']) : ?>
    <?php 
    include './config/bdd.php';
    $request = "INSERT INTO user (email, password) 
                VALUES (:email, :password)";
    $response = $bdd->prepare($request);
    $response->execute([
    'email'     => $_POST['email'],
    'password'  => $_POST['password'],
    ]);
    ?>
    <div class="alert alert-success" role="alert">
        Votre compte a bien été créé !
    </div>

    <?php else : ?>
    <div class="alert alert-danger" role="alert">
        Erreur d'authentification... <br> Les mots de passe ne correspondent pas !
    </div>

    <?php endif ; ?>

</main>

<?php include 'partials/footer.php' ?>
