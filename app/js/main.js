// Дропдаун
$(document).ready(function(){
		var window_width = $(document).width();
		$(window).resize(function(){
			window_width = $(document).width();
		});

		if (window_width <=768) {
				$('.main-nav__item').click(function () {
					clearTimeout($.data(this,'timer'));
					$('ul',this).stop(true,true).slideToggle(300);
				}, function () {
					$.data(this,'timer', setTimeout($.proxy(function() {
						$('ul',this).stop(true,true).slideToggle(300);
					}, this), 10));
				});
			}
			else{
				$('.main-nav__item').hover(function () {
					clearTimeout($.data(this,'timer'));
					$('ul',this).stop(true,true).slideToggle(300);
				}, function () {
					$.data(this,'timer', setTimeout($.proxy(function() {
						$('ul',this).stop(true,true).slideToggle(300);
					}, this), 10));
				});
			}
  
  $('.main-nav__mobile').click(function(){
  	$('.main-nav__list').toggle('slow');
  	// console.log('Открыть меню');
  })
});