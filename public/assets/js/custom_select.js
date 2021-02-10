$(function(){

	$(".custom-selects").each(function() {
		var classes = $(this).attr("class"),
			id      = $(this).attr("id"),
			name    = $(this).attr("name");
		var template =  '<div class="' + classes + '">';
			template += '<span class="custom-selects-trigger">' + $(this).attr("placeholder") + '</span>';
			template += '<div class="custom-options">';
			$(this).find("option").each(function() {
			  template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
			});
		template += '</div></div>';
		
		$(this).wrap('<div class="custom-selects-wrapper"></div>');
		$(this).hide();
		$(this).after(template);
	});
	$(".custom-option:first-of-type").hover(function() {
		$(this).parents(".custom-options").addClass("option-hover");
	  }, function() {
		$(this).parents(".custom-options").removeClass("option-hover");
	});
	$(".custom-selects-trigger").on("click", function() {
		$('html').one('click',function() {
		  $(".custom-selects").removeClass("opened");
		});
		$(this).parents(".custom-selects").toggleClass("opened");
		event.stopPropagation();
	});
	$(".custom-option").on("click", function() {
		$(this).parents(".custom-selects-wrapper").find("select").val($(this).data("value"));
		$(this).parents(".custom-options").find(".custom-option").removeClass("selection");
		$(this).addClass("selection");
		$(this).parents(".custom-selects").removeClass("opened");
		$(this).parents(".custom-selects").find(".custom-selects-trigger").text($(this).text());
	});

});
