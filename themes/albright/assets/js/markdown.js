$('html').on('click', '.trigger-light', function(){
  $('body').addClass('background-black');
  $('.trigger-light').parent('li').hide();
  $('.trigger-dark').parent('li').show();
  $.request('onToggleMode');
});
$('html').on('click', '.trigger-dark', function(){
  $('body').removeClass('background-black');
  $('.trigger-dark').parent('li').hide();
  $('.trigger-light').parent('li').show();
  $.request('onToggleMode');
});
