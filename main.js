// $(document).ready(function(){
// window.onscroll = function () {
// if ($(window).scrollTop() == 0) {
//       $(document).ready(  
//         function() {  


//   $(document).ready(function(){
//             $(".masthead-nav > .second > a").css({"border-bottom-color":"black;"})
//        });

// //тут выполняем код, если пользователь доскроллил до начала страницы
// $(".masthead-nav > li > a").css({"color":"white"});
// $("div.top_link").css({'opacity': '0'});
// $("div.masthead").css({'background-color':'black', "color":"white"});
// $(".masthead,.mastfoot,.cover-container").css({"width":"100%","border-radius":"50px"});

//   //Описание стилей для навигационых кнопок в меню
//   $(".masthead-nav > li > a").css({"color":"white"});
//       //Описание стилей для навигационых кнопок в меню при наведении

//             $(".masthead-nav > .second > a").css({"color":"#C1C2C1"});


//       //При отводе мыши убирается border
//       $(document).ready(  
//         function() {
//             $(".masthead-nav > .second > a").mouseover(function(){
//             $(this).css({"border-bottom-color":"#A9A9A9"});
//          });
//        }
        
//       )
//       //При отводе мыши убирается border
//       $(document).ready(function(){
//             $(".masthead-nav > .second > a").mouseleave(function(){
//             $(this).css({"border-bottom-color":"black;"})
//        })
//       });

//   //постоянный border для первого элемента списка;    
//   $('.masthead-nav > .active > a').css({'border-bottom-color':"white"});  
//        }
        
//       );
// }
// }
// });

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

// $(document).ready(function() {
//   $('label').on('click', function() {
//     $('label').css('background':'red');
//   });
// });



/*
function showElement (layer) {
 var = myLayer = document.getElementById(layer)
if (myLayer.style.display == "none") {
  myLayer.style.display = "block";
} else {
  myLayer.style.display = "none"; 
}

}
showElement(panel_in_account)
*/
//https://login.vk.com/?act=logout&hash=96eb57c4f4856c87cf&reason=tn&_origin=https://vk.com<p></p>