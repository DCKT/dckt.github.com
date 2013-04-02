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

	$("nav ul li").click ->
		$("nav ul li").removeClass('on')
		$(@).addClass('on')
		
		if $(@).children('a').attr('id') is 'cont'
			$("#contact").fadeIn()
		

	$(".arrow-hide").click (event) ->
		event.preventDefault()
		$(document.body).animate
			scrollTop: $("#home").height()
			1000

	$(".exit").click ->
		$("#contact").fadeOut()

	$(window).scroll ->
		menuItem = $("nav ul li")
		posScroll = $(window).scrollTop()
		height = $("#home").height()

		if posScroll >= (height - 35) and posScroll < (height  * 2)
			$("nav").fadeIn(700)
			menuItem.removeClass('on')
			$("#ab").parent().addClass('on')
		# else if posScroll >= (height * 2 - 55) and posScroll < (height * 3)
		# 	menuItem.removeClass('on')
		# 	$("#real").parent().addClass('on')
		# else if posScroll >= (height * 3 - 55) and posScroll < (height * 4)
		# 	menuItem.removeClass('on')
		# 	$("#ski").parent().addClass('on')
		# else if posScroll >= (height * 4 - 55)
		# 	menuItem.removeClass('on')
		# 	$("#exp").parent().addClass('on')
		# else
		# 	$("nav").fadeOut(700)
		

	$(".list ul li").mouseenter ->
		$(@).children('img').transition
			y: "-200px",
			200
		$(@).children('.info-real').transition
			y: "-200px",
			200
	$(".list ul li").mouseleave ->
		$(@).children('img').transition
			y: "0px",
			200
		$(@).children('.info-real').transition
			y: "0px",
			200