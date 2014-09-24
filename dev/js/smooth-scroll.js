jQuery(document).ready(function($) {
  $(window).scroll(function() {

  });
  $('#backToTop').click(function() {
    $("html, body").animate({
      scrollTop: 0
    }, 500);
    return false;
  });
});
