$(document).ready(function(){
	$(window).scroll(function(){
		if($(document).scrollTop()>270){
			$(".header_menu").addClass("shrink")
		}
		else{
			$(".header_menu").removeClass("shrink")
		}
	});
	
});