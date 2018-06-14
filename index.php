<?php 
header("X-XSS-Protection: 1; mode=block"); 
require 'config.php';
$data = $_POST;
if (isset($data['do_signup'])) {
}
if (iconv_strlen($data['login']) > 20) {
  $errors[] = 'Логин не может содержать больше 20 символов';
}
if (trim($data['login']) == '') {
  $errors[] = 'Введите логин!';
}
if (trim($data['email']) == '') {
  $errors[] = 'Введите email!';
}
if (iconv_strlen($data['password']) < 8) {
  $errors[] = 'Пароль должен содержать больше 7-ми символов';
}

if ($data['password'] == '') {
  $errors[] = 'Введите пароль!';
}
if ($data['password_re'] != $data['password']) {
  $errors[] = 'Пароли не совпадают!';
}

if (R::count('users', "login = ?", array($data['login'])) > 0 ) {
  $errors[] = 'Пользователь с таким  именем уже существует. Введите другой логин..';
}
if (R::count('users', "email = ?", array($data['email'])) > 0 ) {
  $errors[] = 'Пользователь с такой эл. почтой уже существует. Введите другую эл. почту';
}
if (preg_match('/[а-яА-Я]/', $data['login'])) {
  $errors[] = 'Логин не может содержать кирилицу. Пожалуйста, используйте латиницу.';  
}


?>
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

<script type="text/javascript">

$(document).ready(function(){

    $("#menu").on("click","a", function (event) {

        //отменяем стандартную обработку нажатия по ссылке

        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),
        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;         
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1000);
    });
});

$(document).ready(function(){

    $("#top_link").on("click","a", function (event) {

        //отменяем стандартную обработку нажатия по ссылке

        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),
        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;         
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1000);
    });
});
</script>
<!--ХЭДЭР!-->
<div class="wrap_top_link">
<div class="top_link" id="top_link"><a href="#content"><i class="fas fa-arrow-up"></i></a></div>
</div>
<script type="text/javascript">
  console.log('Помогите. Помогите. Помогите. Помогите.')

</script>
    <div class="site-wrapper">

      <div class="site-wrapper-inner">
<div id="header">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Paranoid</h3>
              <nav>
                <!--ПАНЕЛЬ ПОЛЬЗОВАТЕЛЯ-->
                        <?php
                        if (isset($_SESSION['logged_user'])) {
                          ?>
                 <div class="account">
                    <div class="account_button">Аккаунт <i class="fas fa-angle-down"></i></div> 
                     <div class="panel_in_account">
                       <h1></h1>

                          <?php echo "Ваш аккаунт: ";echo $_SESSION['logged_user']->login;?>
                            <br>
                         <a href="logout.php">Выход из аккаунта</a>        
                     </div>
                 </div>
                       <?php
                        }
                        ?>              
              <div id="menu">
                <ul class="nav masthead-nav">


                  <li class="active"><a href="#content">Home</a></li>
                  <li class="second"><a href="#tech">My things</a></li>
                  <li class="second"><a href="#form">Sign up</a></li>
                  <?php 
                    if (isset($_SESSION['logged_user'])) {
                      if ($_SESSION['logged_user']->login == "root") {
                        
                      
                      ?>
                      <li class="second"><a href="dev.php">For developers</a></li>
                      <?php
                      }
                    }
                  ?>
                  
             



                </ul>
              </div>
              </nav>
            </div>
          </div>

          </div>
</div>
<!--КОНТЕНТ!-->
<div class="paralax"></div>
<div class="main-content">
<!--Место под хэдэром.
  <div class="invisible">
  </div>
-->
 <div class="content" id="content">

   <h1>Welcome to ParanoidStudio!</h1>



<!--
    <div class="circle"><p><span><br>ARE YOU<br> A ONE<br> OR<br> A ZERO?</span></p>
    </div>
-->
<div class="logo_text_in_first_block">
<div class="logo">
  <img src="images/logo_clean.png" width="50%">
</div>


    <div class="text_in_first_block">
<h1><span class="main_h1">PARANOID_$TUDIO()</span></h1><br>
<span style="font-size: 22px;" class="IT">IT/WEB-DEVELOPMENT/FRONT-END/BACK-END</span>
    </div>


 </div>
</div>

<div class="port">
  <div class="img"><img src="images/me.png" width="50%"></div>
  <div class="text_in_port">
    <h1>Paranoid$tudio - создание веб-приложений.</h1>
    <div class="ul_in">
      <div><i class="fas fa-image"></i> Верстка psd макетов</div>
      <div><i class="fas fa-plane"></i> Landing Page</div>
      <div><i class="fas fa-sticky-note"></i> Личные блоги</div>
<!--       <div><i class="fas fa-shopping-cart"></i> Интернет-магазины</div> -->
    </div>
  </div>

</div>

<!--<div class="game">
  <script src='game.js'></script>
  <h1>GAME </h1>
  <canvas id="canvas" width="500" height="700"></canvas>
  <h1>PARANOID</h1>
</div>-->

<!--
<div class="wrap_1">
  <div class="card">

    <div class="front"></div>
    <div class="back"></div>

  </div>
</div> -->


<div class="main_tech">
<h1>MY KNOWLEDGE</h1>
<div class="tech" id="tech">
  <div class="html"><div class="text_in_tech">HTML</div></div>
  <div class="css"><div class="text_in_tech">CSS</div></div>
  <div class="python"><div class="text_in_tech">PYTHON</div></div>
  <div class="js"><div class="text_in_tech">JS</div></div>
  <div class="php"><div class="text_in_tech">PHP</div></div>
</div>
</div>


<center>
<div class="form" id="form">
<div class="form_in">
<p class="join">JOIN US!</p>
<hr>
<p>Пройдите регистрацию на сервисе ParanoidStudio!</p>
  <form class="form_signup" method="POST" action="index.php#form">
  <p>Login</p>
    <input type="name" name="login" class="input_in_form" placeholder="login"> 
    <p>Email</p>
    <input type="email" name="email" class="input_in_form" placeholder="email">
    <p>Password</p>
    <input type="password" name="password" class="input_in_form" placeholder="password">
    <p>Enter your password again</p>
    <input type="password" name="password_re" class="input_in_form" placeholder="password">
    <button class="button" type="submit" name="do_signup"><span class="button_value">Do signup!</span></button>
<?php

 if(empty($errors)) {
  $user = R::dispense('users');
  $user->login = $data['login'];
  $user->email = $data['email'];
  $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
  R::store($user);
  ?>
  <script type="text/javascript">
    alert('Вы успешно зарегистрированы')
  </script>
  <?php
 } else {
  echo '<span style="color: red">'.array_shift($errors );'</div>';
 }
?>


  </form>
  </span>
  Уже есть аккаунт? <a href="login.php">Авторизируйтесь!</a>
  

</div>
</div>
</center>
<div class="footer">
Me in: <br>
<a href="https://vk.com/nfs2025"><i class="fab fa-vk"></i> Вконтакте</a>
</div>
<!--Окончание главное дива контента-->
</div>
<!--Окончание всех дивов в боди-->
        </div>
      </div>




<script type="text/javascript" src="main.js" ></script>
<script type="text/javascript" src="js/typed.js" ></script>
</body>
</html>
