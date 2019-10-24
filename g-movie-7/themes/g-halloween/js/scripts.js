jQuery(document).ready(function($) {
    
  if ($("#player").length) {
     
    setTimeout(function() { $( ".movie-loader" ).show() }, 1000);
  
  $(window).load(function(){
			$("a#playnow").css('visibility', 'visible');
			$( ".movie-loading" ).hide();
			
		});
  }
  $(".fullscreen").on('click', function() {
    screenfull.toggle(document.getElementById('player'));
  });
  $("a#playnow,.play").on('click', function() {
      
      screenfull.exit();
              
  });
  $(".player-loading").delay(3000).fadeOut();
  
    $("button#cboxClose,.backoverview").on('click', function() {
        $(".backoverview").fadeOut();
        $("#login").fadeOut();  
    });
    
    var slider	= $("#ibar"),
		volume	= $("#ivol"),
		tooltip = $(".vtip"),
		runtime	= $(".vtip").attr("title");
	tooltip.hide(); 

	slider.slider({
		range: "min",
		min: 0,
		max: runtime,
		step: 1,
		value: 0,
   		orientation: "horizontal",
		start: function(event,ui) {  
          tooltip.fadeIn('fast');  
        }, 
		slide: function(event, ui) {
			var value	= slider.slider('value'),
				cleft	= $("a.ui-slider-handle").attr("style"),
				ctime	= secondsTimeSpanToHMS(value);
			$(".vtmin").text(ctime);	
			tooltip.attr('style', cleft).text(ctime);
		},
		stop: function(event,ui) {  
			tooltip.fadeOut('fast');  
        },
	});
	
	volume.slider({  
        range: "min",  
        min: 1,  
        value: 35, 
		slide: function(event, ui) {  
			var value = volume.slider('value'),  
				speaker = $('.cvol');  
			if( value <= 5 ) {   
				speaker.css('background-position', '0 -54px');  
			} else if ( value <= 25) {  
				speaker.css('background-position', '0 -70px');  
			} else if ( value <= 75) {  
				speaker.css('background-position', '0 -86px');  
			} else {  
				speaker.css('background-position', '0 -102px');  
			};  
        }		
	});

	$(".cfull").on('click', function() {
		screenfull.request( document.getElementById('player') );
	});
	
	
    jQuery('#oncassubmit').click(function(e) {
        jQuery(".onerror").hide();
        jQuery(".onload").show();
        jQuery(".onload").delay(2900).fadeOut("fast");
        setTimeout(function() {
            jQuery(".onerror").fadeIn(500);
        }, 3000);
    });
    
});

function secondsTimeSpanToHMS(s) {
  var h = Math.floor(s / 3600);
  s -= h * 3600;
  var m = Math.floor(s / 60);
  s -= m * 60;
  return h + ":" + (m < 10 ? '0' + m : m) + ":" + (s < 10 ? '0' + s : s);
}
