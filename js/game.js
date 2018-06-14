// Первая браузерная игра. Удачи мне.
var cvs = document.getElementById('canvas');
// Определяем, что мы работаем с 2d пространством 
var ctx = cvs.getContext("2d");

var man = new Image();
var bg = new Image();
var fg = new Image();

man.src = "images/man.png";
bg.src = "images/bg.png";
fg.src = "images/fg.jpg";

function Draw() {
	ctx.drawImage(bg, 0, 0);
	ctx.drawImage(fg, 0, 0);
	ctx.drawImage(man, 0, 0);
}
fg.onload = draw();
