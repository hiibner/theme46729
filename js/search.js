$(window).load(function(){
	
	$("#search-header").hide();

	$(".btn-search").toggle(function(){
		$("#search-header").fadeIn();
		$(".btn-search").css("text-decoration", "underline");
		document.getElementById("search-form_it").focus();
	},function(){
		$("#search-header").fadeOut();
		$(".btn-search").css("text-decoration", "none");;
	});
	
});