<?php require_once 'config/config.php' ?>

<header id="top">
        <div class="collapse bg-info" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">WF3 Zoo</h4>
                        <p class="text-muted">Bienvenue au Zoo de Web Force 3 édition 2020 !</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Gestion du zoo</h4>
                        <?php if($_SESSION['user']) : ?>
                        <p>Bienvenue <?= $user['email'] ?> !</p>
                        <?php endif; ?>
                        <ul class="list-unstyled">
                            <li><a href="signUp.php" class="text-white">Se connecter</a></li>
                            <li><a href="add.php" class="text-white">Ajouter un animal</a></li>
                            <li><a href="#" class="text-white">Supprimer un animal</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-info shadow-sm">
            <div class="container d-flex justify-content-between">
                <a href="index.php" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" /></svg>
                    <strong>WF3 Zoo</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
