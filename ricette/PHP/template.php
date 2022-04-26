<?php
function crea_Nav(){?>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Zaniolo</title>
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="/PHP_Zaniolo/ricette/img/logo-php.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Zaniolo
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/PHP_Zaniolo/ricette/index.php">Home</a >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="musei.php">Opzione1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="opere.php">Opzione2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contatti.php">Opzione3</a>
                    </li>
                    <li class="nav-item" id="login">
                        <a class="nav-link" href="/PHP_Zaniolo/ricette/PHP/login.php">Login</a>
                    </li>
                    <li class="nav-item" id="logout" hidden>
                        <a class="nav-link" href="/PHP_Zaniolo/ricette/PHP/logout.php">Logout</a>
                </ul>
            </div>
        </nav>
        <br>
        <div class="container">
        <?php }
?>