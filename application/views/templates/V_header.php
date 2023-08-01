<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet" />

        <!-- ICON -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />

        <!-- STYLESHEET -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/bootstrap.css')?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/bootstrap.min.css')?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/style.css')?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/whatsapp.css')?>" />
        <title><?= $title?></title>
    </head>
    <body>
    <?php  ?>

<!------------------ HEADER ------------------>
<nav class="navbar sticky-top navbar-expand-lg shadow-sm">
    <div class="container">
       <a class="navbar-brand" href="<?= base_url() ?>">
          <img src="<?= base_url('asset/image/logo.jpg')?>" alt="Logo" width="80" height="70" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ri-menu-3-line"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url()?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/aboutus')?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/home/visit') ?>">Visit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/home/form_registrasi') ?>"><i class="bi bi-heart">Daftar Disini</i></a>
                </li>
            </ul>
            <span class="navbar-text">
                <a class="btn-login" href="<?= base_url('auth')?>">
                    <i class="ri-user-3-line"></i>
                    Login
                </a>
            </span>
        </div>
    </div>
</nav>
<!------------------ End HEADER ------------------>
 <!-- CONTENT -->
 