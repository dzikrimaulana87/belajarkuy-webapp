<?php
if($_GET['materi']=='1'){
    $idvid='zpjMiLWF_iI';
    $rangkuman='assets/rangkuman/eksponen.jpeg';
    $tittle='Eksponen';
    $quiz='1FAIpQLSfyJ3YNPz0f1hHAavvZwNvXh065aGsF5FdwWuPiscwDx9xpEg';
}else if($_GET['materi']=='2'){
    $quiz='1FAIpQLScb69yLpKyuwUTUNFZvH2oWJjQ1wyPcOHbI9TBw2cHDsZlKdg';
    $rangkuman='assets/rangkuman/triangle.jpeg';
    $tittle='Keliling Segitiga';
    $idvid='pWvnboxg0pA';

}else{
    $alert='<!DOCTYPE html>
    <html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Untitled</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    
    <body style="color: #012030;background-color: #012030;">
        <div class="container text-center" style="margin-top: 150px;"><i class="fa fa-exclamation-triangle" style="font-size: 70px;color: #eaeaea;"></i><em style="color: #eaeaea;"><br>Halaman yang kamu minta masih dalam pengembangan<br><br><br></em></div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
    
    </html>';
    echo $alert;
}
    
    if ($_GET['materi']!='default'){
        $display='<!DOCTYPE html>
    <html class="text-center" style="background-color: #012030;">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Getting Started</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/Header-Blue.css">
        <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    </head>
    
    <body class="text-justify" style="color: #012030;background-color: #012030;">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean">
            <div class="container">
                <h1 class="text-center" style="color: #eaeaea;font-size: 20px;margin-top: 5px;">Selamat Belajar</h1><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                        <li class="nav-item dropdown show"><a class="dropdown-toggle nav-link" aria-expanded="true" data-toggle="dropdown" href="#">Dropdown </a>
                            <div class="dropdown-menu show"><a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLScuemSHs5BGuG_3YtMqTuMjpqp7Vf2ufhB6Y3zB9eJJy6DX8g/viewform?usp=sf_link">Isi Survei kepuasan</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        </body>
        <iframe width=100% height=200px src="https://www.youtube.com/embed/'.$idvid.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        </div>
        <div class="container" style="  margin-top: 20px;
    ">
                    <div class="row" style="  background-color: #eaeaea;border-radius: 50px;margin: 10px;
    ">
                        <div class="col text-center" style="margin-top:5px;">
                            <i><h1 style="  color: #012030;
      font-size: 16px;
    ">'.$tittle.'</h1></i>
                        </div>
                    </div>
                </div>
        <div class="container" style="margin-top: 25px;">
            <div class="row text-left" style="margin-right: 5px;margin-left: 5px;">
                <div class="col text-center" style="background-color: #eaeaea;">
                    <h1 style="color: #012030;font-size: 15px;margin-top: 15px;"><img width="300" src="'.$rangkuman.'"></h1>
                </div>
            </div>
        </div>
        <div class="col text-center" style="height: 70px;margin-top: 20px;"><a href="https://docs.google.com/forms/d/e/'.$quiz.'/viewform"><button class="btn btn-primary text-center border rounded" type="button" style="height: 40px; width: 250px; background-color: rgb(69, 196, 176); --darkreader-inline-bgcolor:#30968a;" data-darkreader-inline-bgcolor="">Soal Singkat</button></a></div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
    
    </html>';
        echo $display;}

?>