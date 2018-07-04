// Первая браузерная игра. Удачи мне

// var a =  $('div.game').getElementsById('#canvas');
 document.getElementById('#id').css({'color':'blue'})
//alert(a);https://vk.com/im
var cvs = $("#canvas");
var ctx = canvas.getContext('2d');
var man = new Image();
var bg = new Image();
var fg = new Image();
$(document).

man.src = "images/man.png";
bg.src = "images/bg.png";
fg.src = "images/fg.jpg";

function Draw() {
	ctx.drawImage(bg, 0, 0);
	ctx.drawImage(fg, 0, 0);
	ctx.drawImage(man, 0, 0);
}
fg.onload = Draw();
