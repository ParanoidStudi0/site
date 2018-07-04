<!DOCTYPE html>
<html>
<head>
	<title>You are in.</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="anarchy.css">
</head>
<body>

<div class="wrap">
	<div class="anarchy">
	<img src="https://i.ytimg.com/vi/44zN0mElfpE/hqdefault.jpg" class="main_img">
	</div>

<div class="effect">
	<div class="col-1"></div>
	<div class="col-2"></div>
	<div class="col-3"></div>
	<div class="col-4"></div>
	<div class="col-5"></div>
	<div class="col-6"></div>
	<div class="col-7"></div>
	<div class="col-8"></div>
	<div class="col-9"></div>
	<div class="col-10"></div>
</div>
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

		$('div.col-1').css({'height': col1 });
		$('div.col-2').css({'height': col2 });
		$('div.col-3').css({'height': col3 });
		$('div.col-4').css({'height': col4 });
		$('div.col-5').css({'height': col5 });
		$('div.col-6').css({'height': col6 });
		$('div.col-7').css({'height': col7 });
		$('div.col-8').css({'height': col8 });
		$('div.col-9').css({'height': col9 });
		$('div.col-10').css({'height': col10 });

		}

		 setInterval(yo, 100);


		});
	
	 
</script>

</body>
</html>