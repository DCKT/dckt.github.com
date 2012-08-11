$(document).ready(function() {
	var tmp, content;
	mov = 500;

	$("nav ul a").click(function(){
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
	
	$("#left-arrow").click(function(){
		
		if (mov >= 600)
		{	
			mov -= 100;
			var x = parseInt($("#table-test").css("left"));
			position = x + 250;
			$("#table-test").animate({ left: position }, 500 );
		}
	});
	$("#right-arrow").click(function(){
		
		if (mov <= 600)
		{	
			mov += 100;
			var x = parseInt($("#table-test").css("left"));
			position = x - 250;
			$("#table-test").animate({ left: position }, 500 );
		}
	});

	$("table#table-test tr td img").click(function(){
		var element = $(this);
		var path = element.attr("src");

		
		$("div.popup").append("<div id='hide-bg'></div><div id='window'><span id='exit'>X</span><img id='more-img' src='"+path+"' /></div>");
		$("div.popup").show();
		$("nav").css("z-index","0");
	});

	$("span#exit").live("click",function(){
		$("img#more-img").remove();
		$(this).remove();
		$("#window, #hide-bg").remove();

		$("div.popup").fadeOut();
		$("nav").css("z-index","100000000000000");

	});


});