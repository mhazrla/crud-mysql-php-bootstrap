<?php require 'config.php'; ?>

<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $WEB_CONFIG['app_name'] ?></title>
    <link rel="stylesheet" href="assets/style.css">
    <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

</head>
<body>
    <nav class="navbar container navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="index.php">
        <?= $WEB_CONFIG['app_name'] ?>
      </a>
    </nav>



    <?php session_start();
    $content = (isset($_GET["page"])) ? $_GET["page"] : ""; ?> 
    
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class='text-uppercase'><?= $content ?> Data Mahasiswa</h1>
            </div>
            <div class="col-md-10">
            <?php
            if(isset($_SESSION['flash'])){
                echo $_SESSION['flash'];
                unset($_SESSION['flash']);
            }

            switch ($content) {
                case 'tambah':
                    require 'actions/create.php';
                    break;
                case 'delete':
                    require 'actions/delete.php';
                    break;
                case 'ubah':
                    require 'actions/update.php';
                    break;
                case 'detail':
                    require 'actions/detail.php';
                    break;
                default: 
                    require 'actions/read.php';
                    break;
            } ?>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/script.js"></script>
    <script type="text/javascript" src="assets/bootstrap/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<footer class="bg-dark text-center text-light text-lg-start mt-auto fixed-bottom ">
    <div class="container ">
      <div class="row">
      </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright || Created by Group One || AKN D P1
    </div>
  </footer>

</html>