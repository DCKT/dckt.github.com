$(document).ready ->
	$(".main-page").css('position','relative').animate
		top:'0px'
		500
	$(".main-left").css('position','absolute').animate
		top: '110px'
		opacity: 1
		750

	$(".main-right").css('position','relative').animate
		right: '0px'
		opacity: 1
		1350

	$("nav ul li").click (e) ->
		e.preventDefault()
		$("nav ul li").removeClass('on')
		$(@).toggleClass('on')

	$(window).scroll ->
		posScroll = $(window).scrollTop()
		home = $("#home").height()

		if posScroll >= (home - 10)
			$("nav").fadeIn(700)
		else
			$("nav").fadeOut(700)
		