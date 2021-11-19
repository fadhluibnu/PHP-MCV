<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/css/bootstrap.css">
    <title>Halaman <?php echo $data['judul'] ?></title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="<?php echo BASEURL; ?>">Home</a>
                <a class="nav-link" href="<?php echo BASEURL; ?>/mahasiswa">Mahasiswa</a>
                <a class="nav-link" href="<?php echo BASEURL; ?>/about">About</a>
            </div>
        </div>
    </div>
</nav>

<body>