$(document).ready(function() {
  $("#toggle").click(function() {
    $(this).toggleClass("on");
    $("#navigation").toggleClass("active");
    $(".container").toggleClass("active");
  });

  $('.coeur').click(function(){
    $(this).toggleClass('active');
  });

});
