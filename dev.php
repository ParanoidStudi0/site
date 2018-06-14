<?php 
 require 'config.php';

$time = date("F j, Y, g:i a");


if (isset($_SESSION['logged_user'])) {
  if ($_SESSION['logged_user']->login == 'root') {
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
  <script type="text/javascript" src="main.js"></script>
  <script type="text/javascript" src="dev.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/typed.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</head>
<body onload="header_scroll()">
<style type="text/css">

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
<script type="text/javascript">
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

<div class="wrap_top_link">
<div class="top_link" id="top_link"><a href="#content"><i class="fas fa-arrow-up"></i></a></div>
</div>

<!--ХЭДЭР!-->

    <div class="site-wrapper" id="content">

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
                    <div class="account_button">  Аккаунт <i class="fas fa-angle-down"></i></div> 
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
                  <li class="second"><a href="dev.php">For developers</a></li>
                


                </ul>
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

      <div class="wrap">

         <h1>#GEEK_THINGS</h1>
               <div class="content_in_dev">
        <img src="images/me.png" style="width: 20%;">
        <h1>Раздел для разработчиков.</h1>
      </div>


      <script type="text/javascript">
        $(document).ready(function(event){
          $('textarea').on('click', function(){
            $('textarea').css({'height':'600px', 'border-color':'#007BFF'});
          });
        });

      </script>
         <div class="code_editor">
         <h1>РЕДАКТОР КОДА</h1> 
           <div class="dev_description">
             <span>Здесь вы можете писать свой код. Редактор поддерживает следующие технологи:</span>
             <span class="dev_description_things" >HTML</span>
             <span class="dev_description_things">CSS</span>
             <span class="dev_description_things">JS</span>
             <span class="dev_description_things">PYTHON</span>
             
           </div>
           

           
           <textarea width='100%' tabindex="2" accesskey="c" id="name" onkeyup="c"></textarea>
           <script type="text/javascript">
           function change() {
            var res = document.getElementById("name").value;
            
            eval(res);
            document.getElementById("namePlace").innerHTML = res;


           }
            
           </script>  
                  <span id="namePlace"></span>  
         </div>



<style type="text/css">
  form {
    display: flex;
    justify-content: space-around;
    flex-direction: column;
    align-items: center;
  }
  .chat {
    display: flex;
    flex-direction: column;
    align-items: center;
    color: black;
  }
  .chat_form {
    width: 100%;
    background-color: black;
    border: 1px solid green;
    border-radius: 20px;
   color: white;
  }
  .msg {
    width: 90%;
    height: 70px;
  }
</style>    






<!--
<div class="wrap_1">
  <div class="card">
    <div class="front"></div>
    <div class="back"></div>
  </div>
</div>
-->
        <div class="chat">

          <h1 style="color: white;">ЧАТ</h1>






          <canvas></canvas>
          <div class="chat_window">
          <?php

         //Ну давайте костылять


          // Передаем данные из форму в переменную 
           $data = $_POST;
          
          print_r($time);
          echo "<br>";
          //Ищем запись в бд с соответсвуещей датой
          $find_one = R::find('chat', '`time` = ? ', array(  $time  ));
          // Отслеживаем id-шник           
         foreach ($find_one as $user_one) {
              
             $id = $user_one->id;


                   }


          //Берем первые 20 сообщения
          $ids = $id - 20;
          //Достаем данные из бд
          if (!empty($id)) {
          $find = R::find('chat', '`id` > ?', array( $ids ));

          //echo'<pre>';
          //print_r($find);echo "</pre>";
          //$users = $users->export();

          //Вывод данных
          foreach ($find as $user) {                      
            
            echo ">";echo $user->name; echo "<br>"; echo $user->text;
            echo "<br>";
          }
          echo ">";echo $data['name']; echo "<br>"; echo $data['text'];
          } else {
            echo "Чат вас ждет!";
            echo "<br>";
            //echo ">";echo $data['name']; echo "<br>"; echo $data['text'];
          }
          ?> 





          </div>
          <div class="chat_form">
            <form class="form_in_chat" method="POST" id="form" action="dev.php#form">
              Ваше имя: <input type="text" class="name" name="name" value="<?php echo $_SESSION['logged_user']->login;?>">
              Текст сообщения<input type="text" class="msg" name="text" value="" accesskey="w" >
              <input type="submit" value="Отправить" id="button" style="margin-top: 2%;" name="do_chat">
<?php



  if (trim($data['name']) == '') {
    $errors[] = 'Пожалуйста, введите ваше имя 0_о';
  }
  if (trim($data['text']) == '') {
    $errors[] = 'Вы вроде забыли про само сообщение -_-';
  }
 ?>



<?php 
if ( empty($errors)) {
$chat = R::dispense('chat');
$chat->time = $time;
$chat->name = $data['name'];
$chat->text = $data['text'];
R::store($chat);

//R::exec( sql: 'DELETE FROM `users` WHERE `id` = ?', array(
//    $id
//));
?>
<script type="text/javascript">
 // alert('Штука отправлена')
</script>
<?php
} else {
   echo '<span style="color: red">'.array_shift( $errors );printf($data['text']);'</div>';
   
}
?>
           </form>
          </div>
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





<script type="text/javascript" src="js/typed.js" ></script>
</body>
</html>









<!--ДОПОЛНИТЕЛЬНО-->
  <?php
} else {
  require 'error.php';
}

} else {
  require 'error.php';
}
?>