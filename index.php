<?php  
header("X-XSS-Protection: 1; mode=block"); 
require 'config.php';
$data = $_POST;
//
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
// ☿
?>

<!DOCTYPE html>
<html>
<head>
	<title>paranoid-# studio -h</title>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <link rel="stylesheet/less" type="text/css" href="styles.less" />
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.2/less.min.js" ></script>
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
            top = $(id).offset().top - 150;         
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
            top = $(id).offset().top - 90;         
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1000);
    });
});



$(document).ready(function(){

    $("#h1").on("click","a", function (event) {

        //отменяем стандартную обработку нажатия по ссылке

        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),
        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top -90;         
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1000);
    });
});

</script>
<!--ХЭДЭР!-->
<div class="wrap_top_link" id="wrap_top_link">
  
  <div class="top_link" id="top_link">
    <a href="#content">
      <i class="fas fa-arrow-up"></i>
   </a>
  </div>
 
</div> 
    <div class="site-wrapper">

      <div class="site-wrapper-inner">
<div id="header">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">☿ Paranoid </h3>
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
                      if ($_SESSION['logged_user']->root == "1") {
                        
                      
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
  <div class="img"><img src="images/me.png" width="50%" style="margin: 50px;"></div>
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

<script type="text/javascript">
  $(document).ready(function() {

    $('div#third_input_in_form').mouseover(function() {
      $("div.hint").css({'opacity': '1', 'left':'18%'});
    });

    $('div#third_input_in_form').mouseleave(function() {
      $("div.hint").css({'opacity': '0', 'left':'0'});
    });


    $('div#third_input_in_form').on('click', function() {
      $("div.hint").css({'opacity': '0', 'left':'0'});
    });
  }); 
</script>
<center>
<div class="form" id="form">
<div class="form_in">
<p class="join">JOIN US!</p>
<hr>
<p>Пройдите регистрацию на сервисе ParanoidStudio!</p>
  <form class="form_signup" method="POST" action="index.php#form">
  <!-- GHOSTEMANE -->
  <p>Login</p>
     <!-- ПОЛЕ ЛОГИНА -->
    <div id="first_input_in_form">
  
    <input type="name" name="login" class="input_in_form" placeholder="login"> 
    </div> 
    <!-- ПОЛЕ E-MAIL -->
    <p>Email</p>
    <div id="second_input_in_form">
    <input type="email" name="email" class="input_in_form" placeholder="email">
    </div>
    <!-- ПОЛЕ ПАРОЛЯ -->
    <p>Password</p>
    <div id="third_input_in_form">
             <div class="hint">
      <span>Пароль должен содержать больше 8 символов! <i class="fas fa-arrow-right" style="color: #007BFF"></i></span>
    </div> 
    <input type="password" name="password" class="input_in_form" placeholder="password">
    </div>
    <!-- ПОЛЕ ПОВТОРНОГО ВВОДА ПАРОЛЯ -->
    <p>Enter your password again</p>
    <div id="fourth_input_in_form">
    <input type="password" name="password_re" class="input_in_form" placeholder="password">
    </div>
    <button class="button" type="submit" name="do_signup"><span class="button_value">Do signup!</span></button>

<?php
require 'signup.php';
?>

  </form>
  </span>
  Уже есть аккаунт? <a href="login.php">Авторизируйтесь!</a>
  

</div>
</div>
</center>







<!-- COMMENTS -->
<?php 
$data_comment = $_GET;
$name_com = $data_comment['name_com'];
$text_com = $data_comment['text_com'];
$time = date("F j, Y, g:i a");
$errors_com_2 = array();
if (R::count('comments', "text = ?", array($data_comment['text_com'])) > 0 ) {
  $errors_com_1 = 'Такой Комментарий уже был. Не надо.';
}
if(trim($data_comment['text_com']) == '') {
  $errors_com_2[] = 'Введите комментарий, пожалуйста.';
}




  if (empty($errors_com_1)) {
    if (empty($errors_com_2)) {

  $comments = R::dispense('comments');
  $comments->name = $name_com;
  $comments->text = $text_com;
  $comments->date = $time;
  R::store($comments);
    }  
} 

$user_d = R::find('comments', 'id > ?', array(1));
?>
<div class="comments" id="comments">
  <h1>КОММЕНТАРИИ ЮЗЕРОВ</h1>

  <div class="comments_visible">
      <?php 
      if (R::count('comments', "id > 0") == 0) {
 ?>
 <div style="margin: 50px;">Комментариев,пока что, нет.</div>
 <?php
} 

      foreach ($user_d as $user) {
        ?>
    <div class="comment">

      <div class="name_user"><span><span style="color: black;">Пользователь:</span> <?php echo $user->name; ?></span></div>
      <div class="text_user"><span><?php echo $user->text;?></span></div>
    </div> 
        <?php 
      }
      ?>

  

  </div>
  <div class="new_comment">
    <h1>ОСТАВЬТЕ СВОЙ КОММЕНТАРИЙ</h1>

      <?php 
      if (isset($_SESSION['logged_user'])) {
      ?>
      <form class="comments_form" method="GET" action="#comments" >
  

      <input type="text" name="name_com" placeholder="Ваше имя.." class="input_com"value="<?php echo $_SESSION['logged_user']->login; ?>" readonly >
      <input type="text" name="text_com" placeholder="Комментарий.." class="input_com" value="<?php echo $data_comment['text_com']; ?>">
        <span style="color: red"><?php echo array_shift($errors_com_2)?></span>
      <button type="submit" name="do_comment" class="button">Отправить</button>
    </form>


      <?php
      } else {
        ?>
        <div id="h1">
        <h1 style="font-size: 20px; margin: 15px;">Для того, чтобы оставить комментарий, пожалуйста, <a href="#form">зарегистрируйтесь</a></h1>
        </div>
        <?php
      }
      ?>

  </div>
</div>



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