$(document).ready(function() {
	var tmp, content;
	mov = 500;
	essai =false;

	$("table#table-test tr td").mouseenter(function(){
		element = $(this);
		$("table#table-test tr td").css({
			"-webkit-transform": "rotate3d(0,1,0,0deg)",
			"-moz-transform": "rotate3d(0,1,0,0deg)",
			"-o-transform": "rotate3d(0,1,0,0deg)",
			"-ms-transform": "rotate3d(0,1,0,0deg)",
			"transform": "rotate3d(0,1,0,0deg)"
			});
		element.css({
			"-webkit-transform": "rotate3d(0,1,0,-180deg)",
			"-moz-transform": "rotate3d(0,1,0,-180deg)",
			"-o-transform": "rotate3d(0,1,0,-180deg)",
			"-ms-transform": "rotate3d(0,1,0,-180deg)",
			"transform": "rotate3d(0,1,0,-180deg)"
			});
		$("table#table-test tr td").find('.visible-content').show();
		$("table#table-test tr td").find('.hide-content').hide();
		element.find('.visible-content').hide();


		element.find('.hide-content').show();
	});

	$("div.popup").mouseover(function(){
		$("table#table-test tr td").css({
			"-webkit-transform": "rotate3d(0,1,0,0deg)",
			"-moz-transform": "rotate3d(0,1,0,0deg)",
			"-o-transform": "rotate3d(0,1,0,0deg)",
			"-ms-transform": "rotate3d(0,1,0,0deg)",
			"transform": "rotate3d(0,1,0,0deg)"
			});
		$("table#table-test tr td").find('.hide-content').hide();
		$("table#table-test tr td").find('.visible-content').show();

	});

	$("nav ul a").click(function(e){
		e.preventDefault();
		var element = $(this);
		$("nav ul a").css("background-color","");
		element.css("background-color","rgba(0,0,0,0.3)");
	});
	
	$("table#left_table tr, table#right_table tr").hover(
		function () {
			var element = $(this);
			tmp = element.attr("id");
			content = element.attr("data-content");
			element.after("<div class='info info"+tmp+"'>"+content+"</div>");
		},
		function () {
			$(".info"+tmp).remove();
		}
	);
	
	$("#left-arrow").click(function(e){
		e.preventDefault();
		if (mov >= 600)
		{	
			mov -= 100;
			var x = parseInt($("#table-test").css("left"));
			position = x + 250;
			$("#table-test").animate({ left: position }, 500 );
		}
	});
	$("#right-arrow").click(function(e){
		e.preventDefault();
		if (mov <= 600)
		{	
			mov += 100;
			var x = parseInt($("#table-test").css("left"));
			position = x - 250;
			$("#table-test").animate({ left: position }, 500 );
		}
	});

	$("table#table-test tr td img").click(function(e){
		e.preventDefault();
		var element = $(this);
		var path = element.attr("src");

		
		$("div.popup").append("<div id='hide-bg'></div><div id='window'><span id='exit'>X</span><img id='more-img' src='"+path+"' /></div>");
		$("div.popup").show();
		$("nav").css("z-index","0");
	});

	$("span#exit").live("click",function(e){
		e.preventDefault();
		$("img#more-img").remove();
		$(this).remove();
		$("#window, #hide-bg").remove();

		$("div.popup").fadeOut();
		$("nav").css("z-index","100000000000000");

	});

	$("#contents2 #comp #left-content div.test").click(function(e){
		e.preventDefault();
		$('body, nav, .container').css('opacity','0.4');
		// $(this).parent('#contents2').css('opacity','1');
	});


});