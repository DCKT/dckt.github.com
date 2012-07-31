$(document).ready(function() {
	var tmp, content;
	$("table#left_table tr").hover(
		function () {
			tmp = $(this).attr("id");
			content = $(this).attr("data-content");
			$(this).after("<div class='info info"+tmp+"'>"+content+"</div>");
			
		},
		function () {
			$(".info"+tmp).remove();
		});
	
});