$(function() {
   $(window).scroll(function () {
   		var container = jQuery('.above-the-fold-content');
     	if ($(this).scrollTop() > 250) {
         container.addClass('color-layer')
      }
      if ($(this).scrollTop() < 250) {
         container.removeClass('color-layer')
      }
   });
});