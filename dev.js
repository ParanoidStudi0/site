
// AJAX 

//На будущее
/*$(document).ready(function() {
  $('preloader').hide();
});*/

$.ajax({
  url: "action.php",
  type: 'GET',
  data: {"num": num},
  cache: false,
  success: function(response) {
    if (response == 0) {
      alert('Больше записей нет');

    } else {
      $("#content").append(response);
      num = num + %;
    }
  }
});