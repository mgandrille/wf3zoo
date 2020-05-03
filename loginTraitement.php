<?php require_once 'config/config.php' ?>

<?php

// include './config/bdd.php';
// $request = "SELECT * FROM user 
//             WHERE email = :email && password = :password";
// $response = $bdd->prepare($request);
// $response->execute([
//     'email'    => $_POST['email'],
//     'password' => $_POST['password']
// ]);
// $user = $response->fetch(PDO::FETCH_ASSOC);

// $_SESSION['user'] = $user;

?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main role="main">

    <?php if ($user) : ?>
    <div class="alert alert-success" role="alert">
        <p>Bienvenue <?= $user['email'] ?> </p>
        <p>Vous êtes bien connecté ! </p>
        
    </div>

    <?php else : ?>
    <div class="alert alert-danger" role="alert">
        Erreur d'authentification...
    </div>

    <?php endif ; ?>

</main>

<?php include 'partials/footer.php' ?>

<?php header('Location: index.php'); ?>