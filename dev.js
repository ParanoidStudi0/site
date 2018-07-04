$(document).ready(function(){
   window.onscroll = function () {
 if ($(window).scrollTop() == 0) {
       $(document).ready(  
         function() {
          $("div.top_link").css({'opacity': '0'});
});
}
}

});


//Функция, которая отвечает за изменение хэдэра при скроле

function header_scroll()
{

// При скроле 
$(window).on('scroll', function() {
  $("div.top_link").css({'opacity': '0.8'});
  //Описание стилей для хэдера(цвет, ширина,округление)
  $("div.masthead").css({'background-color':'white', "color":"black"});
  $(".masthead,.mastfoot,.cover-container").css({"width":"100%","border-radius":"0"});


  $('.masthead-nav > .active > a').css({'border-bottom-color':'white'});

  //Описание стилей для навигационых кнопок в меню
  $(".masthead-nav > li > a").css({"color":"black"});
      //Описание стилей для навигационых кнопок в меню при наведении
      $(document).ready(  
        function() {
            $(".masthead-nav > .active > a").mouseover(function(){
            $(this).css({"border-bottom-color":"#424242"});
         });
       }
        
      )
      //При отводе мыши убирается border
      $(document).ready(function(){
            $(".masthead-nav > .active > a").mouseleave(function(){
            $(this).css({"border-bottom-color":"white"})
       })
      });
  //постоянный border для первого элемента списка;    
  $('.masthead-nav > .second > a').css({'border-bottom-color':"black"});

})

}    









// AJAX 

//На будущее
/*$(document).ready(function() {
  $('preloader').hide();
});*/

// $.ajax({
//   url: "action.php",
//   type: 'GET',
//   data: {"num": num},
//   cache: false,
//   success: function(response) {
//     if (response == 0) {
//       alert('Больше записей нет');

//     } else {
//       $("#content").append(response);
//       num = num + %;
//     }
//   }
// });