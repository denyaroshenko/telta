// Дропдаун
$(document).ready(function(){

  $('.main-nav__item').hover(function () {
    clearTimeout($.data(this,'timer'));
    $('ul',this).stop(true,true).show();
  }, function () {
    $.data(this,'timer', setTimeout($.proxy(function() {
      $('ul',this).stop(true,true).hide();
    }, this), 10));
  });
});