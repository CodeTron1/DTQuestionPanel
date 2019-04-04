// $(window).scroll(function() {
//       if ($(document).scrollTop() > 150) {
//         alert('hi');
//         $('.logo').height(200);
//
//       } else {
//         $('.logo').height(100);
//       });
//     }

$(function() {
  var header = $(".navbar");

  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 50) {
      header.addClass("scrolled");
    } else {
      header.removeClass("scrolled");
    }
  });

});

$(".opt").on("click", function() {
    $(this).css("background", "#3d495e");

})
