
<!DOCTYPE html>
<html>
<head>
  <title>paranoid-# studio -h</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" scr="js/bootstrap.js" ></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" type="text/css" href="cover.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/typed.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</head>
<body onload="header_scroll()">

<style type="text/css">
  body {
    background-color: black;
    color: white;
  }
 .masthead-nav > .active > a {
  border-bottom-color: black;
  color: #B3BFBF;
 }
 .masthead-nav > .second > a {
  border-bottom: 2px solid white;
  color: white;
 }
 .masthead-nav > .second > a:hover {
  border-bottom-color: white;
 }
</style>
<!--ХЭДЭР!-->

    <div class="site-wrapper">

      <div class="site-wrapper-inner">
<div id="header">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Paranoid</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="/">Home</a></li>
                  <li class="second"><a href="dev.php">For developers</a></li>
                

                </ul>
              </nav>
            </div>
          </div>

          </div>
</div>
<!--КОНТЕНТ!-->
<div class="main-content">
<div>
<div style=" border-bottom: 4px solid white;">
<?php 
if (isset($_SESSION['logged_user'])) {
  ?>
  <h1 style="margin-top: 12%; color: white;">У вас нет прав, чтобы просматривать эту страницу</h1>

  <?php
} else {
?>
<h1 style="margin-top: 12%; color: white;">Для доступа на эту страницу, пожалуйста, пройдите регистрацию на <a href="/#form">главной</a> странице.</h1>
<?php
}
?>
</div>
</div>
</div>