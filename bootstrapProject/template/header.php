<?php require 'core/info.php' ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?php echo $url ?>/assets/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="<?php echo $url ?>/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $url ?>/assets/vendor.css" />
    <link rel="icon" href="<?php echo $url ?>/assets/earth.png">
  </head>
  <body>


  <div class="container-fluid">
        <div class="row ">

        <?php include 'side.php' ?>
        
        <div class="contant col-12 col-lg-9 col-xl-10 vh-100 py-1 ">
                <div class="row">
                    <div class="col-12 bg-white ">

                    <!-- //header and main  -->
                    <?php include 'head.php' ?>

                   