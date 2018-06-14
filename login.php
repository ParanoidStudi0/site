<?php 
require 'config.php';
$data = $_POST;
$errors = array();
 if ( isset($data['do_login']) ) {
 	$user = R::findOne('users', 'login = ?', array($data['login']));
 	if ( $user ) {
 		if( password_verify($data['password'], $user->password) ) {
                  //ВСЕ ХОРОШО И ЗАМЕЧАТЕЛЬНО
                $_SESSION['logged_user'] = $user;
 		} else {
 			$errors[] = 'Неверно введен пароль';
 		}
 	} else {
 		$errors[] = 'Пользователь с таким именем не найден';
 	}
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Логин</title>
    <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" scr="js/bootstrap.js" ></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" type="text/css" href="cover.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="main.js" ></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/typed.min.js"></script>
</head>
<body onload="header_scroll()">
<style type="text/css">
<?php ?>
body {
  background-image: url(images/2.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
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
                <ul class="nav masthead-nav">
                  <li class="active"><a href="/">Home</a></li>
                  <?php 
                    if (isset($_SESSION['logged_user']->login)) {
                      if ($_SESSION['logged_user']->login == 'root') {
                      ?>
                      <li class="second"><a href="dev.php">For developers</a></li>
                      <?php
                      }
                    }
                  ?>                

                </ul>
              </nav>
            </div>
          </div>

          </div>
</div>

<center>
<div class="form" id="form">
<div class="form_in">
<p class="join">LOG IN!</p>
<hr>
  <form class="form_signup" action="login.php" method="POST">
    <p>Логин:</p>
    <input type="login" name="login" value="<?php echo @$data['login']; ?>" class="input_in_form" placeholder="Логин..">
    <p>Пароль:</p>
    <input type="password" name="password" value="<?php echo @$data['password'];?>" class="input_in_form" placeholder="Пароль..">
    <button type="submit" name="do_login" class="button" style="margin-bottom: 2%;">Залогиниться </button>
    <a href="index.php">Вернуться на главную</a>
			<?php
			 	       if( ! empty($errors)) {
   	echo '<center><div style="color: red; margin-top:10px; font-size: 20px;">'.array_shift($errors).'</div></center>';
   } 
if (isset($_SESSION['logged_user'])) {
	?>
	<center><hr><div style="color: black; margin-top:10px; font-size: 20px;">Вы успешно авторизированы!</div></center>

	<?php
} 
    ?>
  </form>
</div>
</div>
</center>



</body>
</html>