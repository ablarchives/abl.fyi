$('html').on('click', '.hamburger', function(){
  $(this).toggleClass('is-active');
  $('#navbarNav').fadeToggle(200);
});
