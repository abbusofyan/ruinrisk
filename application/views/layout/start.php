<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RuinRisk</title>

    <!-- Favicons -->
    <link href="<?= base_url('assets_mobile/img/lg-rr.svg') ?>" rel="icon">
    <link href="<?= base_url('assets_mobile/img/lg-rr.svg') ?>" rel="apple-touch-icon">
  
    <!-- EXTERNAL -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    

    <!--  INTERNAL -->
    <link rel="stylesheet" href="<?= base_url('assets_mobile/css/style.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets_mobile/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets_mobile/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <!-- <link rel="stylesheet" href="assets/aos/aos.css"> -->

    <style>
        #mapid { 
            height: 400px; 
            width: 100%; 
            z-index: 0; /* Set z-index to 0 as it will be on a layer below the contact form */
        }
    </style>
</head>
<body>
    <main id="main" class="main">

        <div id="hero" class="hero">
            <?php include('sidebar_menu.php') ?>

            <?php if ($this->router->fetch_class() == 'Home' && $this->router->fetch_method() == 'index') {
                include('header.php');
            }?>
        </div>