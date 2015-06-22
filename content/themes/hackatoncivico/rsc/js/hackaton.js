function center_logo() 
{
	jQuery(".main-logo-container").css("top", ((jQuery(".main-background").height() - jQuery(".main-logo-container").height()) / 2 + jQuery(".subscribe-btn").height()) + "px");
	jQuery(".main-logo-container").css("left", ((jQuery(".main-background").width() - jQuery(".main-logo-container").width()) / 2) + "px");
}

function center_coundown() 
{
	jQuery(".countdown-main-container ul li .countdown-value").css("top", ((jQuery(".countdown-main-container ul li").height() - jQuery(".countdown-main-container ul li .countdown-value").height()) / 2 + jQuery(".subscribe-btn").height()) + "px");
}

jQuery(document).ready(function($) {
	center_logo();
	
	var date_to_countdown = jQuery("#countdown_date").val();
	
	jQuery(".event-countdown")
	  .countdown(date_to_countdown, function(event) {
		jQuery(this).html(
		  event.strftime('<ul><li class="countdown-container"><span class="countdown-value">%D</span><span class="countdown-label">días</span></li><li class="countdown-container"><span class="countdown-value">%H</span><span class="countdown-label">horas</span></li><li class="countdown-container"><span class="countdown-value">%M</span><span class="countdown-label">minutos</span></li><li class="countdown-container"><span class="countdown-value">%S</span><span class="countdown-label">segundos</span></li>')
		);
	  });				
});

jQuery(window).resize(function(){
	center_logo();
	center_logo();
});
