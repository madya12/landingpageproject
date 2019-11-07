//THIS BASE FILE WIL LOAD TUNLR OTHER JS FUNCTIONS

// Console.log fix for browsers with no console
if ( window.console && window.console.log ) {
  // console is available
}else{
	//console not available
	var console = {log:function(){}};
}

$.fn.pressEnter = function(fn) {  

    return this.each(function() {  
        $(this).bind('enterPress', fn);
        $(this).keyup(function(e){
            if(e.keyCode == 13)
            {
              $(this).trigger("enterPress");
            }
        })
    });  
 } 

//use it:

// For Use With Google Analytics hitCallback
function createFunctionWithTimeout(callback, opt_timeout) {
  var called = false;
  var timeout = setTimeout(callback, opt_timeout || 10000);
  return function() {
    if (!called) {
      called = true;
      callback();
      clearTimeout(timeout);
    }
  }
}


//when the dom is ready		
$(document).ready(function(){
	// Hide Nav for internal Popups
	if(!window.isPopup){
		
	}else{
		$('.navbar').hide();
		$('#main').css('padding-top', '0px');					
	}
	
	//init tooltips
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip();
	})
	
	initDNSCheck();
	initSocialClicks();
	//initSetupSteps();
	//sort the status messages

	//Simple Input Focus
	$('.simple-input input').focus(function(){
		 $(this).parents('.simple-input').addClass('focus');
	 });
	 $('.simple-input input').blur(function(){
	 	$(this).parents('.simple-input').removeClass('focus');
	});


	$('.billing-modal-link').click(function(){
	    tunlrModal.load({
			'modal_id' : 'billing-info',
			'header' : 'Billing Info',
			'content_selector':'#billing-info-tmodal',
			'content' : "",
			'optout_checkbox' : false,
			'width' : 500,
			'button_text' : 'CLOSE'
		});	
	});

	$('.account-options-modal-link').click(function(){
	    tunlrModal.load({
			'modal_id' : 'account-options',
			'header' : 'Account Options',
			'content_selector':'#account-options-tmodal',
			'content' : "",
			'optout_checkbox' : false,
			'width' : 500,
			'buttons' : [{
				text: 'CLOSE',
				click:function(){
					$('.alert').remove();
					closeModal();
					//force a poage refresh if has changed
					location.reload();
				}
			}, {
				text: 'SAVE CHANGES',
				click:function(){
					//alert('boing, nothing happened, add the save function here');
					updateAccountOptions();
					//closeModal();
				}
			}]
		});	
	});
	$('.broken-service').click(function(){
		var service = $(this).data('atts-service');
		$('#issue-type').replaceWith('<p class="form-contorl-static" id="issue-type">Broken Service</p>');
		$('#service-name').replaceWith('<p class="form-contorl-static" id="service-name">' + service + '</p>');
		tunlrModal.load({
			'modal_id' : 'brokenModal',
			'header' : 'Service Broken?',
			'content_selector':'#brokenModal',
			'content' : "",
			'optout_checkbox' : false,
			'width' : 500,
			'buttons' : [{
				text : 'CLOSE'
			}]
		})
	});
	$('.show-broken-ticket').click(function(){
		closeModal();
		tunlrModal.load({
			'modal_id' : 'supportTicketModal',
			'header' : 'Submit Support Ticket',
			'content_selector':'#supportTicketModal',
			'content' : "",
			'optout_checkbox' : false,
			'width' : 500,
			'buttons' : [{
				text : 'CLOSE'
			}]
		})
	});


});
		
//when the page is ready
$( window ).load(function() {

});



//misc functions that aren't anywhere else
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
} 

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
} 

function initPage(){

	$('.side_graphic').on('load', function(){
		//image must be bigger than text (centers text);
		
		$this = $(this);
		$row = $this.parents('.row');
		$text_content = $row.find('.text-content');
		
		// sizes
		row_height = $row.innerHeight();
		text_content_height = $text_content.height();
		
		text_content_padding = (row_height/2)-(text_content_height /2);
		$text_content.css('padding-top', text_content_padding);
	
	});
	
	$('.nav a').on('click', function(){
		if(!$(".navbar-toggle").is(':hidden')){
			$(".navbar-toggle").click() //bootstrap 3.x by Richard
		}
	});
	
	$('.select-panel').on('click', function(){
		$('.select-panel').removeClass('active');
		$(this).addClass('active');
	});


}



function animateScroll(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();
	    var target = this.hash;
	    var $target = $(target);
		if($target.length){
		    $('html, body').stop().animate({
		        'scrollTop': $target.offset().top
		    }, 900, 'swing', function () {
		        /* window.location.hash = target; */
		    });			
		}
	});			
}

function scrollTo(location){
    $('html, body').stop().animate({
        'scrollTop': location-60
    }, 900, 'swing', function () {
        /* window.location.hash = target; */
    });
}


function checkVisible( elm, evalType ) {
    evalType = evalType || "visible";

    var vpH = $(window).height(), // Viewport Height
        st = $(window).scrollTop(), // Scroll Top
        y = $(elm).offset().top-60,
        elementHeight = 0;

    if (evalType === "visible") return ((y < (vpH + st)) && (y > (st - elementHeight)));
    if (evalType === "above") return ((y < (vpH + st)));
}



function showAndScroll(selector){
	$('.device-select').hide();
	$('.router-select').hide();
	
	var $target = $(selector);
	var $last_target = $($target[$target.length-1]);

	$target.fadeIn('fast');
	var targetOffset = $last_target.offset().top;
	var targetHeight = $last_target.outerHeight();
	var windowHeight = $(window).height();
	var offset;

	 if (targetHeight < windowHeight) {
	    // offset = targetOffset - ((windowHeight / 2) - (targetHeight / 2));
	     offset = targetOffset - (windowHeight- targetHeight) + 40;
	  }
	  else {
	    offset = targetOffset - 60;
	  }

    $('html, body').stop().animate({
        'scrollTop': offset
    }, 900, 'swing', function () {
        /* window.location.hash = target; */
    });	
}

function initHeroImage(current_country){
	var country_list = [
		['Canada', 'ca'],
		['United Kingdom', 'gb'],
		['United States', 'us'],
/*
		['Argentina', 'ar'],
		['Austria', 'at'],
		['Belgium', 'be'],
		['Brazil', 'br'],
		['Canada', 'ca'],
		['Denmark', 'dk'],
		['Finland', 'fi'],
		['France', 'fr'],
		['Germany', 'de'],
		['Ireland', 'ie'],
		['Luxembourg', 'lu'],
		['Mexico', 'mx'],
		['Netherlands', 'nl'],
		['Norway', 'no'],
		['Sweden', 'se'],
		['Switzerland', 'ch'],
		['United Kingdom', 'gb'],
		['United States', 'us']
*/
	];
	
	var current_country = current_country;
	
	var country_flags = new Array();
				
	function preloader(array) {
		if (document.images) {
			for (i=0; i<array.length; i++){
				country_flags[i] = new Image();
				country_flags[i].src = "/images/flags/_flat-iso/"+array[i][1]+".png";
			}
			var load_count = 0;
			for(i=0; i<country_flags.length; i++){
				country_flags[i].onload = function(){
					++load_count;
					if(load_count>=country_flags.length){
						// all images loaded
						startAnimation();
					}else{
						// still more images to load
					}
				} 
			}
		}
		
	}
	var flag_count=-1;
	function startAnimation(){
    flag_count++;
    if (!(flag_count in country_list)) {
      var next_flag = country_list[0][1];
      flag_count=0;

    }else{
      var next_flag = country_list[flag_count][1];
    }    
    
    if(next_flag==current_country){
      flag_count++;
    }
    if(flag_count>=country_list.length){
      flag_count=0;
    } 

console.log(flag_count);
		setTimeout(function(){

  		$('.hero-flag-right .hero-flag-image').attr('src', country_flags[flag_count].src);
      $('.hero-flag-right .hero-country-name').html(country_list[flag_count][0]);
      startAnimation();
				
		}, 1500);
		
	}
	
		
	preloader(country_list);
}
		

		function initCustomFilters(){
			$('.service-tag-btn').on( 'click', function() {
			  	if($(this).hasClass('service-tag-btn-active')==true){
				  	$(this).removeClass('service-tag-btn-active');
			  	}else{
				  	$(this).addClass('service-tag-btn-active');
			  	}
			  	var filter_list = [];
			  	
			  	
			  	$('.service-tag-btn').each(function(){
				  		var filter_value = $(this).attr('data-filter');
					  if($(this).hasClass('service-tag-btn-active')){
						filter_list.push(filter_value);
					  }	
			  	});
			  	
			  	if(filter_list!=""){
				  	$('.service-item').each(function(){
  					  	var match = 0;
					  		for (i = 1; i <= filter_list.length; i++) { 
						  		if($(this).hasClass(filter_list[i-1])==true){
							  		match = 1
						  		}
						  		if(filter_list.length==i && match!=1){
							  		$(this).hide();
						  		}
						  		if(match==1){
							  		$(this).show();
							  		break
						  		}
						  	}	
					  	}

				  	);
			  	}else{
					$('.service-item').show();
					$('.service-panel-body .ignore').hide();
			  	}
			  	
			  	$('.service-panel-body').each(function(){
					if($(this).height()<=10){
						$(this).find('.service-item-nofilters').show();
					}	
			  	});
			  	
			  	$(filter_list).show();
			});				
		}
		
		function initIsotope(){
			var $container = $('.service-panel .panel-body');
			$container.isotope({
				itemSelector: '.service-item',
				layoutMode: 'vertical',	  
			});
			
			// filter items on button click
			$('.service-tag-btn').on( 'click', function() {
			  	
			  	if($(this).hasClass('service-tag-btn-active')==true){
				  	$(this).removeClass('service-tag-btn-active');
			  	}else{
				  	$(this).addClass('service-tag-btn-active');
			  	}
			  	var filter_list = "";
			  	var filter_value = $(this).attr('data-filter');
			  	
			  	$('.service-tag-btn').each(function(){
					  if($(this).hasClass('service-tag-btn-active')){
						if(filter_list == ""){
							filter_list = "."+filter_value;
						}else{
							filter_list = filter_list+', .'+filter_value;
						}
					  }	
			  	});
			  	

			  	$container.isotope({ filter: filter_list });
			});							
		}
		//initSetupSteps can probaly be deleted
		function initSetupSteps(){
			var $setup_step1 = $('.setup-step1');
			var $setup_step2 = $('.setup-step2');
			var $setup_step3 = $('.setup-step3');
			
			function activateClick($element, num){	
				if($element.hasClass('done') || $element.hasClass('active')){
					// do nothing
					$element.css('cursor', 'default');
				}else{
					//enable clicks
					$element.click(function(){
						goToStep(num);
					});
				}
			}
			
			activateClick($setup_step1, 1);
			activateClick($setup_step2, 2);
			activateClick($setup_step3, 3);	
		}
		
		function goToStep(num){
			if(num==1){
				setCookie('setup_step', 1);
				window.location = "how-to-setup";
			}else if(num==2){
				setCookie('setup_step', 2);
				window.location = "services";
			}else if(num==3){
				setCookie('setup_step', 3);
				window.location = "services";
			}		
		}
		
		
//function to handle updating the subscription on the account-details page
function updateAccountOptions() {	
		var formData = {
			'userID'			: $( 'span#customerEmail').data('att-tunlrid'),
			'plan'				: $('form#update-account-options input[name=accountOptions]:checked').val(),
			'subscriptionIs'	: $('form#update-account-options').data('atts-subscriptionis')
		}
		alert(formData.subscriptionIs);
		$('.absolute_loader').fadeTo("fast", 0.8, function(){
			$.ajax({
				type			: 'POST',
				url				: 'controllers/add-subscription.php',
				data			: formData,
				dataType		: 'json',
				encode			: 'true'
			})		
			.done(function(data) {		
				console.log(data); 
				if ( ! data.success) {
					$('.absolute_loader').fadeOut();
					$('form#update-account-options').append('<div class="alert alert-warning">' + data.message + '</div>');
				} else {
					$('.absolute_loader').fadeOut();
					$('form#update-account-options').append('<div class="alert alert-success">' + data.message + '</div>');
				}
			});		
		});
}

function initSocialClicks(){
	
	$('button.fb-share').click(function(event) {
		
		var referralLink = $('.fb-share').attr('data-attr-refkey');
		var variation = $('.fb-share').attr('data-attr-variation');
		var picture = 'https://cdn.tunlr.com/brand-assets/promo-23_1.jpg';
		ga('send', 'event', 'Experiment-f1', 'SocialInitialize-'+ variation +'', '');//trigger GA event for AB test
		if(variation === 'a') {
			picture = 'https://cdn.tunlr.com/brand-assets/promo-23_1.jpg';
		} else if(variation === 'b') {
			picture = 'https://cdn.tunlr.com/brand-assets/promo-23_2.jpg';
		}
		FB.ui({
		  method: 'feed',
		  link: 'tunlr.com?ref='+referralLink,
		  picture: picture,
		  name: 'Unlock 7,000+ Movies',
		  caption: 'Join Tunlr for Free today!',
		  description: 'Great movies added everyday.'
		}, function(response){
			if (response && response.post_id) {
				//trigger a ref_link create here
				addRefLink(referralLink, 'fb-share');
				//trigger a GA conversion here
				fireEvent('share');
				ga('send', 'event', 'social interaction', 'shared', 'shared on facebook');
				ga('send', 'event', 'Experiment-f1', 'SocialShare-'+ variation +'', ''); //trigger GA event for AB test
			
			} else {
				//was not published
			}
		});

	});
	$('button.fb-invite').click(function(event) {
		FB.ui({
		  method: 'send',
		  link: 'tunlr.com',
		  name: 'Join Tunlr Beta for Free!',
		  caption: 'Join now before our beta is over',
		  description: 'With Tunlr it only takes 1 minute to unblock your favourite TV, movies, and music!'
		}, function(response){});
		//trigger a GA conversion here
		ga('send', 'event', 'social interaction', 'shared', 'invited on facebook');
	});
	$('form#email-invite-friend').submit(function(event) {
		var $email_input =  $('input[name=invite-email]');
		var email_input_val =  $email_input.val();
		if(email_input_val=="" || email_input_val==undefined){
			$email_input.focus();
			return false;
		}
		var formData = {
			'inviteEmail'	: $email_input.val()
		}
		$('.absolute_loader').fadeTo("fast", 0.8, function(){
			$.ajax({
				type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
				url         : 'controllers/email-invite-friend.php', // the url where we want to POST
				data        : formData, // our data object
				dataType    : 'json', // what type of data do we expect back from the server
				encode      : true
			})
			.done(function(data) {
				if ( ! data.success) {
					$('.absolute_loader').fadeOut();
					$('form').after('<div class="alert alert-warning">' + data.message + '</div>');
					fireEvent('share');
				} else {
					$('.absolute_loader').fadeOut();
					$('form').after('<div class="alert alert-success">' + data.message + '</div>');		
					$email_input.val('');	
				}
			})
		});
		ga('send', 'event', 'social interaction', 'shared', 'invited friend by email');
		event.preventDefault();
	});
	
	//track when the tweet is completed
	var twitReferralLink;
	var twitVar
	$('#twitter-share-invite').click(function(event) {
		twitReferralLink = $('#twitter-share-invite').attr('data-attr-refkey');
		twitVar = $('#twitter-share-invite').attr('data-attr-refkey').substr(-1, 1);
		console.log(twitVar);
		closeModal();
		ga('send', 'event', 'Experiment-t1', 'SocialInitialize-'+ twitVar +'', '');//trigger GA event for AB test
	});
	twttr.ready(function (twttr) {
		twttr.events.bind('tweet', function(event){
			if(event.target.id == 'twitter-share-invite') {
				//trigger GA conversion
				fireEvent('share');
				ga('send', 'event', 'social interaction', 'shared', 'shared on twitter');
				ga('send', 'event', 'Experiment-t1', 'SocialShare-'+ twitVar +'', ''); //trigger GA event for AB test
				//add to our affilate conversions
				var uid = $('#customerEmail').attr('data-att-tunlrid');
				addRefLink(twitReferralLink, 'twit-share');
			};
		});		
	});

	
	$('button.import-google').click( function(event) {
		gcontacts_auth();
	});

			

	//****** GOOGLE Contacts ********//
	function gcontacts_auth(){
	    var config = {
	      'client_id': '935860560929-pcmcq3lfhj2vp8k7ssq94l6badj0dhvo.apps.googleusercontent.com',
	      'scope': 'https://www.googleapis.com/auth/contacts.readonly'
	    };
	    gapi.auth.authorize(config, function() {
	      gcontacts_fetch(gapi.auth.getToken());  
	     
	    });
			
	  }
	
	  function gcontacts_fetch(token) {
	    $('.absolute_loader').fadeIn();
	    $.ajax({
		    url: "https://www.google.com/m8/feeds/contacts/default/full?access_token=" + token.access_token + "&alt=json&max-results=500",
		    dataType: "jsonp",
		    success:function(data) {
				$('.google-contacts').toggle();
				$('.import-google').toggle();
				$('.google-contacts').append('<form id="google-contacts" class="form-horizontal"><div class="form-group"><div class="google-invite-header"><div class="check-box pull-right">Select All&nbsp;&nbsp;<input type="checkbox" name="select-all" id="google-select-all"></div></div><div class="google-contacts-inner"></div><div class="google-invite-footer"><button id="google-contacts-submit" class="btn-sflat btn btn-google btn-block"><i class="fa fa-google btn-sflat-icon fixed1"></i>SEND INVITES</button></div></div></form>');
				$('button#google-contacts-submit').click (function(event) {
					event.preventDefault();
					$('#google-contacts-submit').prop('disabled', true);//disable button
					var listContacts = [];
				    $('.contact input[type="checkbox"]:checked').each(function () {
						 var contact = {
						 	 'email' : $(this).val(),
							 'name'  : $(this).parent('.contact').attr('data-attr-name'),
							 'id'	 : $(this).parent('.contact').attr('data-attr-id')
						 }
						 listContacts.push(contact);
					 });
					 var sendData = {
					 	'invitedContacts' : JSON.stringify(listContacts)
					 }
					 //invitedContacts = JSON.stringify(invitedContacts);
					 //var sendData = JSON.stringify(invitedContacts);
					 $.ajax({
					 	type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
						url         : 'controllers/google-invite-friend.php', // the url where we want to POST
						data        : sendData, // our data object
						dataType    : 'json', // what type of data do we expect back from the server
						encode      : true
					 })
					 .done(function(data) {
						 $('#google-contacts-submit').prop('disabled', false);//reenable button
						 $('.contact input[type="checkbox"]:checked').each(function () {
							 var id	 =  $(this).parent('.contact').attr('data-attr-id');
							$('[data-attr-id="'+id+'"]').append('<div>'+data.partial[id].msg+'</div>').addClass(''+data.partial[id].status+'');
						 });
			
					 });
					 ga('send', 'event', 'social interaction', 'shared', 'sent to google contacts');
					 //console.log(sendData.invitedContacts);
					 //alert(invitedContacts);				
					
			
				});
				
            	// display all your data in console
		        console.log(JSON.parse(JSON.stringify(data)));
				// output the data to browser
				var contactID = 0;
				$.each( data.feed.entry, function( key, value ) {
					//$.each( gd$email
					if ( value.title.$t.length < 2 ) { 
						var contactName = value.gd$email[0].address;
					} else {
						var contactName = value.title.$t;
					}
					contactID++;
					$('form .google-contacts-inner').append( '<div class="check-box contact" data-attr-id="contact-'+contactID+'" data-attr-name="'+contactName+'"><span class="name">' +contactName+ '</span><input type="checkbox" value="'+value.gd$email[0].address+'" class="pull-right"><br> <span class="email">' +value.gd$email[0].address+ '</span></div>' );


					//check all google contacts
					$('#google-select-all').click(function(event) {
						  $( '.contact input[type="checkbox"]' ).prop('checked', this.checked);
					});
					
					if (typeof positionModal === "function") { 
					    // safe to use the function
					    positionModal();
					}
					
					$('.absolute_loader').fadeOut();
					
				});
				
		    }
		});
	}
	
	function makerandom() {
		var text = "";
		var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	
		for( var i=0; i < 3; i++ ) {
			text = text + possible.charAt(Math.floor(Math.random() * possible.length));
		}
			text = text + (new Date).getTime();
		return text;
	}
	function addRefLink(refLink, type) {
		var inputData = {
			'refLink' : refLink,
			'type' : type,
			'action' : 'AdNew'
		};
		console.log(inputData);
		$.ajax({
			type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url         : 'controllers/referral-links.php', // the url where we want to POST
			data        : inputData, // our data object
			dataType    : 'json', // what type of data do we expect back from the server
			encode      : true
		})
	}

}