
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
  $(".masthead,.mastfoot,.cover-container").css({"width":"100%","border-radius":"0"})
  //Описание стилей для навигационых кнопок в меню
  $(".masthead-nav > li > a").css({"color":"black"});
      //Описание стилей для навигационых кнопок в меню при наведении
      $(document).ready(  
        function() {
            $(".masthead-nav > .second > a").mouseover(function(){
            $(this).css({"border-bottom-color":"#424242"});
         });
       }
        
      )
      //При отводе мыши убирается border
      $(document).ready(function(){
            $(".masthead-nav > .second > a").mouseleave(function(){
            $(this).css({"border-bottom-color":"white"})
       })
      });
  //постоянный border для первого элемента списка;    
  $('.masthead-nav > .active > a').css({'border-bottom-color':"black"});
  
})

}                                                   
