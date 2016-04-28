(function($){
  $("#Wallpaper-carousel").carousel();
//Allow the carousel to automatically cycle
$('#Wallpaper-carousel').carousel({
  interval: 2000
});
  //Allow Keyboard Keys to change picture
  $(document).keydown(function(e) {
    if (e.keyCode === 37) {
     // Previous
     $(".carousel-control.left").click();
   }
   if (e.keyCode === 39) {
     // Next
     $(".carousel-control.right").click();
   }
 });
  $('.carousel-indicators').each(function() {
    var item = $(this);
    var slideTo = item.attr('data-slide-to');
    item.on('click', function() {
      $("#Wallpaper-carousel").carousel(slideTo);
    });
  });
})(jQuery);

