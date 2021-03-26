console.log('Script file loaded.');

$(document).ready(function(){

  console.log('HTML file loaded and parsed.');




/* clicking on hamburger menu shows navigation menu on mobile device */
$('#menu-icon').click(function() {
  if($('#mylinks').css('display') == 'none'){
        $('#mylinks').slideDown();
  }
  else {
      $('#mylinks').slideUp();
}
});

/* click on arrow to return to top of page */
$("#backToTop").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});

});
