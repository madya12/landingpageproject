// JavaScript Document
// ajaxform.js
$(document).ready(function() {
	
	//set up the ajax loaders
	$( document ).ajaxStart(function() {
		$( '.ajaxLoader :input' ).attr('disabled', true);
		$( '.ajaxLoader' ).prepend( '<div class="loadDiv"><div class="loadIco"></div></div>' );
		var child = $('.loadDiv');
		var parent = $('.ajaxLoader');
		child.css({
			top: parent.height()/2 - child.height()/2 , 
			left: parent.width()/2 - child.width()/2 
		});
	});
		$( document ).ajaxStop(function() {
		$( '.ajaxLoader :input' ).attr('disabled', false);
		$( '.loadDiv' ).remove();
	});

	
	//process the paypal cancel button
	$('form#cancel-subscription-form').submit(function(event) {
		var formData = {
			'cancelRecurlySubscription'				: 'true'
		};
		//which payment gateway to cancel
		var cancelURL = '';
		if ($('input#sub-type').val() === 'PayPal') {
      cancelURL = 'paypal-cancel.php';
		} else if ($('input#sub-type').val() === 'Recurly') {
      cancelURL = 'recurly.php';
		} else if ($('input#sub-type').val() === 'Coinbase') {
      cancelURL = 'coinbase.php?cancel';
		}
		//alert(formData.action);
		$('.absolute_loader').fadeTo("fast", 0.8, function(){
			$.ajax({
				type        : 'POST',
				url         : 'controllers/' + cancelURL,
				data        : formData,
				dataType    : 'json',
				encode      : true
			})
			.done(function(data) {
				if ( ! data.success) {
					$('.absolute_loader').fadeOut();
					$('form').find('.alert').remove();
					$('form').after('<div class="col-md-12"><div class="alert alert-warning">' + data.message + '</div></div>');
				} else {
					$('.absolute_loader').fadeOut();
					$('form').find('.alert').remove();
					$('form').replaceWith('<div class="col-md-12"><div class="alert alert-success">' + data.message + '</div></div>');
					window.location.href = 'account-details?canceled';
				}
			});
		});
		event.preventDefault();

	});
	
	//process the unsubscribe button
	$('form#unsubscribe-form').submit(function(event) {

		var formData = {
      'email': $('input[name=email]').val(),
			'action': 'unsubscribe',
			'emailPreferences': $('input[name=unsubscribe]:checked').map(function() {return this.value;}).get().join(','),
			'g-captcha-response': $('input[name=g-captcha-response]').val() 
		};
		//alert(formData.action);
		$('.absolute_loader').fadeTo("fast", 0.8, function(){
			$.ajax({
				type        : 'POST',
				url         : 'controllers/unsubscribe.php',
				data        : formData,
				dataType    : 'json',
				encode      : true
			})
			.done(function(data) {
				if ( ! data.success) {
					$('.absolute_loader').fadeOut();
					$('form').find('.alert').remove();
					$('form').after('<div class="col-md-12"><div class="alert alert-warning">' + data.message + '</div></div>');
				} else {
					$('.absolute_loader').fadeOut();
					$('form').find('.alert').remove();
					$('form').replaceWith('<div class="col-md-12"><div class="alert alert-success">' + data.message + '</div></div>');			
					
				}
			});
		});
		event.preventDefault();
	});
	
	//handle the email preferences form
	$('form#update-email-preferences').submit(function(event) {
		
		var formData = {
			'action': 'update',
			'emailPreferences': $('input[name=unsubscribe]:not(:checked)').map(function() {return this.value;}).get().join(',')
		};
		//alert(formData.emailPreferences);
		$('.absolute_loader').fadeTo("fast", 0.8, function(){
			$.ajax({
				type        : 'POST',
				url         : 'controllers/unsubscribe.php',
				data        : formData,
				dataType    : 'json',
				encode      : true
			})
			.done(function(data) {
				if ( ! data.success) {
					$('.absolute_loader').fadeOut();
					$('form#update-email-preferences').find('.alert').remove();
					$('form#update-email-preferences').after('<div class="col-md-12"><div class="alert alert-warning">' + data.message + '</div></div>');
				} else {
					$('.absolute_loader').fadeOut();
					$('form#update-email-preferences').find('.alert').remove();
					$('form#update-email-preferences').after('<div class="col-md-12"><div class="alert alert-success">' + data.message + '</div></div>');			
					
				}
			});
		});
		event.preventDefault();
  });
	
	
	//process index subscribe form	
	$('form#initial-signup').submit(function(event) {
		var formData = {
      'email': $('input[name=email]').val(),
			'action': 'verify'
		};
    if(formData.email==""){
			alert("Please enter a valid email.");
    } else {
			$('.cta1_content.step.step1').fadeOut(200, function(){
				$('.cta1_content.step.step2').fadeIn(200);
				setTimeout(function(){
					if(checkVisible('.cta1')==false){
						scrollTo($('.cta1').offset().top);
					}
				}, 5);
			});
			//submit the data
			$.ajax({
				type		: 'POST',
				url			: 'controllers/trial-account.php',
				data		: formData,
				dataType	: 'json',
				encode		: true
			})
			.done(function(data) {
				if( ! data.success) {
					$('.cta1_content.step.step2').fadeOut(200, function(){
						$(this).hide();
						$('.cta1_content.step.step1').fadeIn(200, function(){
							var message = data.message;
							if (message.toLowerCase().indexOf('email') >= 0) {
								message = 'That email is already in use, please try again with a different email.';
							} else {
								message = message;
							}
							tunlrModal.load({
								'modal_id' : 'responseModal',
								'header' : data.message,
								'content_selector':'',
								'content' : message,
								'optout_checkbox' : false,
								'width' : 500,
								'buttons' : [{
									text : 'CLOSE'
								}]
							});
						});
					});
				} else {
					//return the notification to verify email			
					$('.cta1_content.step.step2').fadeOut(200, function() {
						$('div.cta1_content.step.step1').replaceWith( '<div class="cta1_text1" >We have sent an email to '+formData.email+'.</div><div class="cta1_text2">Please check your email to verify your account.</div>' );
/*
						setTimeout(function(){
							scrollTo($('.cta1').offset().top-120);
						}, 5);
*/
						$('.cta1_content.step.step1').fadeIn(200, function(){
							
						});
					});				
					ga ('send', 'event', 'signup', 'email submit', window.location.pathname);
					//track back to facebook
					//window._fbq.push(["track", "TunlrNewTrial", {
					//}]);
					//send to signup.php
					//window.location.href = '/signup?email=' + formData.email + '';
				}
				
			});
			
		}
		event.preventDefault();
	});

	//process index subscribe form	
	$('form#initial-signup-1').submit(function(event) {
		var formData = {
      'email': $('input[name=email]').val(),
			'password': $('input[name=password]').val(),
			'action': 'create-account'
		};
    if(formData.email==""){
			alert("Please enter a valid email.");
    } else {
			$('.cta1_content.step.step1').fadeOut(200, function(){
				$('.cta1_content.step.step2').fadeIn(200);
						setTimeout(function(){
							if(checkVisible('.cta1')==false){
								scrollTo($('.cta1').offset().top);
							}
						}, 5);				
			});
			//submit the data
			$.ajax({
				type		: 'POST',
				url			: 'controllers/signup.php',
				data		: formData,
				dataType	: 'json',
				encode		: true
			})
			.done(function(data) {
				if( ! data.success) {
					$('.cta1_content.step.step2').fadeOut(200, function(){
						$(this).hide();
						$('.cta1_content.step.step1').fadeIn(200, function(){
							tunlrModal.load({
								'modal_id' : 'responseModal',
								'header' : data.title,
								'content_selector':'',
								'content' : data.message,
								'optout_checkbox' : false,
								'width' : 500,
								'buttons' : [{
									text : 'CLOSE'
								}]
							});
						});
					});
				} else {
					//log the user in
					//return the notification to verify email			
					/*
					$('.cta1_content.step.step2').fadeOut(200, function() {
						$('div.cta1_content.step.step1').replaceWith( '<div class="cta1_text1" >We have sent an email to '+formData.email+'.</div><div class="cta1_text2">Please check your email to verify your account.</div>' );
/*
						setTimeout(function(){
							scrollTo($('.cta1').offset().top-120);
						}, 5);
*/
						//$('.cta1_content.step.step1').fadeIn(200, function(){
							
						//});
					//});				
					
					fbq('track', 'Lead');
					window._fbq = window._fbq || [];
					window._fbq.push(['track', '6028119760773', {'value':'0.00','currency':'USD'}]);
					ga ('send', 'event', 'signup', 'email signup', window.location.pathname, {
					   hitCallback: createFunctionWithTimeout(function() {
					      	var redirect_after = $('#redirect-after').val();
							if(redirect_after!=undefined && redirect_after != ""){
								window.location = '/'+redirect_after;
							}else{
								if($('#our_dns').val()==1){
									window.location.href = "/dashboard";
								}else{
									window.location.href = "/how-to-setup";
								}
							}
					    })
					});
					

					//track back to facebook
					//window._fbq.push(["track", "TunlrNewTrial", {
					//}]);
					//send to signup.php
					//window.location.href = '/signup?email=' + formData.email + '';
				}
				
			});
			
		}
		event.preventDefault();
	});


	
	//process the trial signup form
	$('form#trial-signup-form').submit(function(event) {
		var $password = $('input[name=password]');
		var $password2 =  $('input[name=confirm-password]');
		if($password.val()==""||$password.val()==undefined){
			$password.focus();
			return false;
		}

		if($password2.val()==""||$password2.val()==undefined){
			$password2.focus();
			return false;
		}
		
		var formData = {
			'email'				: $('input[name=email]').val(),
			'key'				: $('input[name=key]').val(),
			'password'			: $password.val(),
			'confirm-password'	: $password2.val(),
			'action'			: 'create-account'
		}
		$('.absolute_loader').fadeTo("fast", 0.8, function(){
			$.ajax({
				type		: 'POST',
				url			: 'controllers/trial-account.php',
				data		: formData,
				dataType	: 'json',
				encode		: true
			})
			.done(function(data) {
				if( ! data.success) {
					var msg = data.message;
					if (msg.indexOf('not been verified') !== -1) {
						ga ('send', 'event', 'signup', 'email submit', window.location.pathname);
					}
					$('.absolute_loader').fadeOut();
					$('form').find('.alert').remove();
					$('form').after('<div class="col-md-12"><div class="alert alert-warning">' + data.message + '</div></div>');
				} else {
					ga ('send', 'event', 'signup', 'email signup', window.location.pathname,{
						hitCallback: createFunctionWithTimeout(function() {
							//log the user in
							var redirect_after = $('#redirect-after').val();
							if(redirect_after!=undefined && redirect_after != ""){
								window.location = '/'+redirect_after;
							}else{
								if($('#our_dns').val()==1){
									window.location.href = "/services";
								}else{
									window.location.href = "/how-to-setup";
								}
							}	
					    })						
					});

				}
			})
		})
		event.preventDefault();
	});

	
	 // process the beta signup form
    $('form#beta-signup-form').submit(function(event) {
			
				$('.form-group').removeClass('has-error'); // remove the error class
				$('.alert').remove(); // remove the error text
				
				// FORM VALIDATION
				//console.log($('input[name=input_key]').val());
				if($('input[name=input_key]').val() == "" || $('input[name=input_key]').val()==undefined){
					alert("You need a private Beta Key in order to sign up.  If you recieved an email indicating you have been chosen for our FREE Beta, make sure to load this page by clicking the link provided to generate your key.");
					return false;
				}else if($('input[name=login_email]').val() =="" || $('input[name=login_email]').val()==undefined){
						alert("Please enter your email.");
						return false;
										
				}else if($('input[name=login_password]').val() =="" || $('input[name=login_password]').val() ==undefined ){
					alert('Please enter a password');
					return false;
				}else if($('input[name=login_password2]').val() =="" || $('input[name=login_password2]').val() ==undefined ){
					alert('Please confirm your password');
					return false;
				}else if($('input[name=login_password]').val() !== $('input[name=login_password2]').val()){
					alert('Error: Your password fields do not match');
					return false;
				}
	
			// get the form data
			var formData = {
				'betakey'		: $('input[name=input_key]').val(),
				'email'         : $('input[name=login_email]').val(),
				'ipaddress'		: $('input[name=ipaddress]').val(),
				'password'		: $('input[name=login_password]').val()
			};
			
			$('.absolute_loader').fadeTo("fast", 0.8, function(){
				// process the form
				$.ajax({
					type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
					url         : 'controllers/beta-account.php', // the url where we want to POST
					data        : formData, // our data object
					dataType    : 'json', // what type of data do we expect back from the server
					encode      : true
				})
					// using the done promise callback
					.done(function(data) {
						
						// log data to the console so we can see
						// console.log(data); 
		
						// here we will handle errors and validation messages
						if ( ! data.success) {
							$('.absolute_loader').fadeOut();
							$('form').find('.alert').remove();
							$('form').after('<div class="col-md-12"><div class="alert alert-warning">' + data.message + '</div></div>');
						} else {
							// ALL GOOD! just show the success message!
							//$('form').replaceWith('<h3>An email has been sent!</h3><p>Check you inbox for details</p>');
							var redirect_after = $('#redirect-after').val();
							if(redirect_after!=undefined && redirect_after != ""){
								window.location = '/'+redirect_after;
							}else{
								if($('#our_dns').val()==1){
									window.location.href = "/dashboard";
								}else{
									window.location.href = "/how-to-setup";
								}
							}							
						}
					});				

			})



        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
	
    // process the free account form
    $('form#free-tunlr-form').submit(function(event) {
				
				$('.form-group').removeClass('has-error'); // remove the error class
				$('.alert').remove(); // remove the error text
	
			// get the form data
			var formData = {
				'email'         : $('input[name=email]').val(),
				'ipaddress'		: $('input[name=ipaddress]').val(),
				'password'		: $('input[name=password]').val()
			};
			
	
			// process the form
			$.ajax({
				type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
				url         : 'controllers/free-account.php', // the url where we want to POST
				data        : formData, // our data object
				dataType    : 'json', // what type of data do we expect back from the server
				encode      : true
			})
				// using the done promise callback
				.done(function(data) {
	
					// log data to the console so we can see
					//console.log(data); 
	
					// here we will handle errors and validation messages
					if ( ! data.success) {
						$('form').find('.alert').remove();
						$('form').after('<div class="col-md-8 col-md-offset-2"><div class="alert alert-warning">' + data.message + '</div></div>');
					} else {
						// ALL GOOD! just show the success message!
						$('form').replaceWith('<h3>An email has been sent!</h3><p>Check you inbox for details</p>');
						window.location.href = "dashboard";
					}
				});

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
	
	// process the update account form
	
	//first we need to include some jquery to update the inputs dynamically
	$("#fname").bind("change paste keyup", function() {
       document.getElementById("fname").defaultValue = $(this).val();
	});
	$("#lname").bind("change paste keyup", function() {
	   document.getElementById("lname").defaultValue = $(this).val(); 
	});
	$("#email").bind("change paste keyup", function() {
	   document.getElementById("email").defaultValue = $(this).val();  
    });
	
	$("form#update-account-details #email").bind("change paste keyup", function() {
	   $( '.verified-status i.fa' ).replaceWith( '<i class="fa fa-exclamation-triangle" data-toggle="tooltip" data-placement="left" title="Your email needs to be verified"></i>' );
    });
	
    $('form#update-account-details').submit(function(event) {
				
			$('.form-group').removeClass('has-error'); // remove the error class
			$('.alert').remove(); // remove the error text
	
			// get the form data
			var formData = {
				'fname'				: $('input[name=fname]').val(),
				'lname'				: $('input[name=lname]').val(),
				'email'             : $('input[name=email]').val(),
				//'ipaddress'		: $('input[name=ipaddress]').val()
			};
			
	
			// process the form
			$('.absolute_loader').fadeTo("fast", 0.8, function(){
				$.ajax({
					type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
					url         : 'inc/update-account-details.php', // the url where we want to POST
					data        : formData, // our data object
					dataType    : 'json', // what type of data do we expect back from the server
					encode      : true
				})
					// using the done promise callback
					.done(function(data) {
		
						// log data to the console so we can see
						//console.log(data); 
		
						// here we will handle errors and validation messages
						if ( ! data.success) {
							$('.absolute_loader').fadeOut();
							$('form#update-account-details').find('.alert').remove();
							$('form#update-account-details').append('<div class="alert alert-warning">' + data.message + '</div>');
						} else {
							// ALL GOOD! just show the success message!
							$('.absolute_loader').fadeOut();
							$('form#update-account-details').find('.alert').remove();
							$('form#update-account-details').append('<div class="alert alert-success">' + data.message + '</div>');
							if( data.action == 'forceRefresh' ) {
								location.reload();
							}
						}
				});
			});

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
	
	//process the login form
	$('form#account-login-form').submit(function(event) {			
			var $this = $(this);
			$this.next('.alert').remove();
			// get the form data
			var loginformData = {
				'login_email'	 : $('input[name=login_email]').val(),
				'login_password' : $('input[name=login_password]').val(),
				'redirect_after' : $('input[name=redirect-after]').val(),
				'verify_after'   : $('#account-login-form').attr('data-attr-verify'),
				'remember'		 : $('input[name=remember]:checked').val()
			};
			console.log(loginformData.verify_after);
			$('.absolute_loader').fadeTo("fast", 0.8, function(){
				//process the form
				$.ajax({
					type		: 'POST',
					url			: 'inc/account-login.php',
					data		: loginformData,
					dataType	: 'json',
					encode		: 'true' 
				})
				// using the done promise callback
				.done(function(data) {
		
					// log data to the console so we can see
					//console.log(data); 
			
					// here we will handle errors and validation messages
					if ( ! data.success) {
						$('.absolute_loader').fadeOut();
						$this.after('<div class="alert alert-warning">' + data.message + '</div>');
					} else {
						// ALL GOOD! just show the success message!
						$this.after('<div class="alert alert-success">' + data.message + '</div>');
						if(loginformData.redirect_after !== '') {
							var redirectLink = loginformData.redirect_after;
						} else {
							var redirect_after = $('#redirect-after').val();
							if(redirect_after!=undefined && redirect_after != ""){
								window.location = '/'+redirect_after;
							}else{
								if($('#our_dns').val()==1){
									var redirectLink = "/services";
								}else{
									var redirectLink = "/how-to-setup";
								}
							}								
						}
						if(loginformData.verify_after !== '') {
							redirectLink += '?verify='+loginformData.verify_after;
						}
						window.location.href = redirectLink;
					}
					
				});
				
			});

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
	});
	
	//process the remove account button
	$('button.remove-card').click(function(event) {
		var formData ={
			'cardID'	: $(this).closest( ".panel" ).data('card-id')
		}
		$.ajax({
			type		: 'POST',
			url			: 'inc/delete-card.php',
			data		:  formData,
			dataType	: 'json',
			encode		: 'true'
		})
		.done(function(data) {
			location.reload(true);
		});
	});
	//process the make default button
	$('button.make-default').click(function(event) {
		var formData ={
			'cardID'	: $(this).closest( ".panel" ).data('card-id')
		}
		$.ajax({
			type		: 'POST',
			url			: 'inc/set-default-card.php',
			data		:  formData,
			dataType	: 'json',
			encode		: 'true'
		})
		.done(function(data) {
			location.reload(true);
		});
	});
	
	// process the forgot password form
	$('button[name=forgot-password]').click(function(event) {
		event.preventDefault();
		
		var formData = {
			'email'					: $('input[name=InputUserEmail]').val(),
			'g-captcha-response'	: $('input[name=g-captcha-response]').val()
		}
		$('.absolute_loader').fadeTo("fast", 0.8, function(){
			$.ajax({
				type		: 'POST',
				url			: 'inc/password-forgot.php',
				data		: formData,
				dataType	: 'json',
				encode		: 'true'
			})
			.done(function(data) {
				// log data to the console so we can see
				console.log(data); 
				
				//onloadCallback();
				
				// here we will handle errors and validation messages
				if ( ! data.success) {
					$('.absolute_loader').fadeOut();
					//grecaptcha.reset(widgetId1); //reset the recaptch so form can be resubmitted
					$('form').find('.alert').remove();
					$('form').after('<div class="alert alert-warning">' + data.message + '</div>');
				} else {
					// ALL GOOD! just show the success message!
					$('.absolute_loader').fadeOut();
					$('form').find('.alert').remove();
					$('form').after('<div class="alert alert-success">' + data.message + '</div>').hide();
				}
					
			});
		});
		
	});
	
	//process the password reset form
	$('form#password-reset').submit(function(event) {
		var formData = {
			'passwordKey'	: $('input[name=password-key]').val(),
			'passwordNew'		: $('input[name=new_password]').val(),
			'passwordConfirm'	: $('input[name=confirm_password]').val()

		}
		if (formData.passwordNew == formData.passwordConfirm) {
			$.ajax({
				type		: 'POST',
				url			: 'inc/password-reset.php',
				data		: formData,
				dataType	: 'json',
				encode		: 'true'
			})
			.done(function(data) {
				//console.log(data);
				 
				if( ! data.success) {
					$('form#password-reset').find('.alert').remove();
					$('form#password-reset').append('<div class="alert alert-warning">' + data.message + '</div>');
				} else {
					$('form#password-reset').find('.alert').remove();
					$('form#password-reset').after('<div class="alert alert-success">' + data.message + '</div>').hide();	
				}
			});
			
		} else {
			$('form').find('.alert').remove();
			$('form').append('<div class="alert alert-warning">Passwords do not match.</div>');
		}
		event.preventDefault();
	});
	
	//process the update password form
	$('form#update-password').submit(function(event) {
		var formData = {
			'oldPassword'		: $('input[name=old-password]').val(),
			'newPassword'		: $('input[name=new-password]').val(),
			'confirmPassword'	: $('input[name=confirm-password]').val()
		}
		$('.absolute_loader').fadeTo("fast", 0.8, function(){
			if (formData.newPassword == formData.confirmPassword) {
				$.ajax({
					type		: 'POST',
					url			: 'controllers/password-update.php',
					data		: formData,
					dataType	: 'json',
					encode		: 'true'
				})
				.done(function(data) {
					if ( ! data.success) {
						$('.absolute_loader').fadeOut();
						$('form#update-password').find('.alert').remove();
						$('form#update-password').append('<div class="alert alert-warning">' + data.message + '</div>');
					} else {
						$('.absolute_loader').fadeOut();
						$('form#update-password').find('.alert').remove();
						$('form#update-password').append('<div class="alert alert-success">' + data.message + '</div>');
					}
				});
			} else {
				$('.absolute_loader').fadeOut();
				$('form#update-password').find('.alert').remove();
				$('form#update-password').append('<div class="alert alert-warning">Please ensure your new passwords match.</div>');
			}
		});
		event.preventDefault();
	});
	//process the activate account button
	$('button#activate-account').click(function(event) {
		var $load_hide = $('.act_load_hide');
		var $loader = $('.activate_loader');
		$load_hide.hide();
		$loader.show();
		$.ajax({
			type		: 'POST',
			url			: 'controllers/account-activate.php',
			
			dataType 	: 'json',
			encode		: 'true'
		})
		.done(function(data) {
			if ( ! data.success) {
				alert(data.message);
				$loader.fadeOut(100,function(){
					$load_hide.fadeIn();
				});
			} else {
				goToStep(3);
			}
		})
	});
	
	//submmit the support ticket
	$('form#submit-support-ticket').submit(function(event) {
		var formData = {
			'issuetype'		: $(this).find('#issue-type').text(),
			'servicename'		: $(this).find('#service-name').text(),
			'messagedetails'	: $(this).find('textarea#message-details').val()
		}
		$('.absolute_loader').fadeTo("fast", 0.8, function(){
			$.ajax({
				type		: 'POST',
				url			: 'controllers/create-case.php',
				data		: formData,
				dataType 	: 'json',
				encode		: 'true'
			})
			.done(function(data) {
				if ( ! data.success ) {
					$('.absolute_loader').fadeOut();
					$('form').find('.alert').remove();
					$('form').append('<div class="alert alert-warning">The ticket could not be processed at this time.  Please try again.</div>');
				} else {
					$('.absolute_loader').fadeOut();
					closeModal();
					tunlrModal.load({
						'modal_id' : 'responseModal',
						'header' : 'Thank You',
						'content_selector':'',
						'content' : "Thank you, we recieved your submission",
						'optout_checkbox' : false,
						'width' : 500,
						'buttons' : [{
							text : 'CLOSE'
						}]
					});
				}
			});
		})
		event.preventDefault();
	});
	
	



	

	/*$('.profile-vote').click(function(event) {
		
		var theData = {
			'type'		: $(this).data('atts-type'),
			'vote'		: 1,
			'profileID'	: $(this).closest('.service-item').data('atts-profileid')
		}
		$.ajax({
			type		: 'POST',
			url			: 'controllers/profile-votes.php',
			data		: theData,
			dataType	: 'json',
			encode		: 'true'
		})
		.done(function(data) {
			if ( ! data.success) {
				alert(data.message);
			} else {
				//show the desk form
				alert(data.message);
			}
		})
				
		event.preventDefault();
	});
	*/

	//handle the contact us form
	$('button#contact-us-btn').click(function(event) {

		
	   event.preventDefault();
	    $this = $(this);
	    $form = $('#contact-us');
	    $contactEmail = $('#contactEmail');
	    $contactMessage = $('#contactMessage');
	    
	    if($contactEmail.val()==""||$contactEmail.val()==undefined){
		    $contactEmail.focus();
	    }else if($contactMessage.val()==""||$contactMessage.val()==undefined){
		     $contactMessage.focus();
	    }else{
			var formData = {
				'g-captcha-response'	: $('input[name=g-captcha-response]').val(),
				'name'		: $('input#contactName').val(),
				'email'		: $('input#contactEmail').val(),
				'message'	: $('textarea#contactMessage').val()
			}
			$('.absolute_loader').fadeTo("fast", 0.8, function(){
				$.ajax({
					type		: 'POST',
					url			: 'controllers/contact-handler.php',
					data		: formData,
					dataType	: 'json',
					encode		: true
				})
				.done(function(data) {
					if ( ! data.success ) {
						$('.absolute_loader').fadeOut();
						$('form').find('.alert').remove();
						$('form').append('<div class="alert alert-warning">' + data.message + '</div>');
					} else {
						$('.absolute_loader').fadeOut();
						$('form').append('<div class="alert alert-success">Message Sent</div>');
					}
				});
			});
	    }


		
			
	});

	
	// GOOGLE LOGIN and Sign UP 
	$('button#g-signup').click(function(event){
		ga ('send', 'event', 'signup', 'google signup click', window.location.pathname);
		GoogleAuth.signIn({
	  		'scope': 'profile email'
		});
		if (GoogleAuth.isSignedIn.get() == true) {
			var action = $('button#g-signup').data('atts-action');
			var googleUser = GoogleAuth.currentUser.get()
			var token = googleUser.getAuthResponse().id_token;
			if (action === 'signup') {
				$('.absolute_loader').fadeTo("fast", 0.8, function(){
					SubmitGoogleSignup(token);
				})
			}
			if (action === 'login') {
				$('.absolute_loader').fadeTo("fast", 0.8, function(){
					SubmitGoogleSignin(token);
				})
			}
		}
		GoogleAuth.isSignedIn.listen(function(status) {
			console.log(status);
			if(status === true) {
				console.log('true');
				var action = $('button#g-signup').data('atts-action');
				var googleUser = GoogleAuth.currentUser.get()
				var token = googleUser.getAuthResponse().id_token;
				if (action === 'signup') {
					$('.absolute_loader').fadeTo("fast", 0.8, function(){
						SubmitGoogleSignup(token);
					})
				}
				if (action === 'login') {
					$('.absolute_loader').fadeTo("fast", 0.8, function(){
						SubmitGoogleSignin(token);
					})
				}
				//console.log(token);
				} else {
					console.log('false');
				}
			});
		});
		var SubmitGoogleSignup = function(token) {
			var submitData = {
				'token'			: token,
				'system'		: 'GOOGLE',
				'action'		: 'create-account'
			}
			$.ajax({
				type		: 'POST',
				url			: 'controllers/trial-account.php',
				data		: submitData,
				dataType	: 'json',
				encode		: true
			})
			.done(function(data) {
				//closeModal();
				if( ! data.success) {
					$('.absolute_loader').fadeOut();
					tunlrModal.load({
						'modal_id' : 'account-options',
						'header' : 'Account creation error',
						'content_selector':'',
						'content' : data.message,
						'optout_checkbox' : false,
						'width' : 500,
						'buttons' : [{
							text: 'CLOSE',
						}]
					})
					//console.log(data.message);
				} else {
					//console.log(data.message);
					fbq('track', 'Lead');
					window._fbq = window._fbq || [];
					window._fbq.push(['track', '6028119760773', {'value':'0.00','currency':'USD'}]);
					ga ('send', 'event', 'signup', 'google signup', window.location.pathname, {
						hitCallback: createFunctionWithTimeout(function() {
							var redirect_after = $('#redirect-after').val();
							if(redirect_after!=undefined && redirect_after != ""){
								window.location = '/'+redirect_after;
							}else{
								window.location = '/how-to-setup';
							}	
					    })							
					});	
					
				}
			})
		};
		
		var SubmitGoogleSignin = function(token) {
			var submitData = {
				'loginType'		: 'google',
				'token'			: token,
				'system'		: 'GOOGLE',
			}
			$.ajax({
				type		: 'POST',
				url			: 'controllers/ext-login.php',
				data		: submitData,
				dataType	: 'json',
				encode		: true
			})
			.done(function(data) {
				//closeModal();
				if( ! data.success) {
					$('.absolute_loader').fadeOut();
					tunlrModal.load({
						'modal_id' : 'account-options',
						'header' : 'Login Error',
						'content_selector':'',
						'content' : data.message,
						'optout_checkbox' : false,
						'width' : 500,
						'buttons' : [{
							text: 'CLOSE',
						}]
					})
					//console.log(data.message);
				} else {
					//console.log(data.message);
					var redirect_after = $('#redirect-after').val();
					if(redirect_after!=undefined && redirect_after != ""){
						window.location = '/'+redirect_after;
					}else{
						window.location = '/dashboard';
					}					
					
				}
			});
		};

});


	function assignmentUpdateEvent($element, type){
		var $this = $element;
		var $service_item = $this.parents('.service-item');
		
		//change the status button
		var state;
		if($this.hasClass("btn-active")){
			state='active';
		}
		if($this.hasClass("btn-deactive")){
			state='inactive';
		}
		function toggleUI(){
			disableAllUpdates($service_item);
			if(state=='active'){
				$service_item.addClass('inactive');
				$this.toggleClass( "btn-deactive" ).toggleClass( "btn-active" );
				$this.data('atts-action', 'profile-off');
				$this.attr('data-atts-action', $(this).data('atts-action'));
				$service_item.find('select.profile-country').addClass("hidden");
				state = 'inactive';
			}else if(state=='inactive'){
				$service_item.removeClass('inactive');
				$this.toggleClass( "btn-active" ).toggleClass( "btn-deactive" );
				$this.data('atts-action', 'profile-on');
				$this.attr('data-atts-action', $(this).data('atts-action'));
				$service_item.find('select.profile-country').removeClass("hidden");
				state = 'active';
			}					
		}	
		
		toggleUI();
		
		var $setup_steps = $('.process-steps-container');
		var setup_steps_exist = $setup_steps.length;
		
		//set the form data
		var formData = {
			'action'		: $this.data('atts-action'),
			'assignmentid'	: $service_item.data('atts-assignment'),
			'country'		: $service_item.find('select.profile-country option:selected').val(),
			'customer_id' 	: $service_item.data('atts-customer'),
			'profile_id'	: $service_item.data('atts-profileid'),
			'named_id'		: $service_item.data('atts-namedid'),
			'tunlr_cust_id' : $( 'span#customerEmail').data('att-tunlrid'),
			'steps_exist'	: setup_steps_exist
		};

		console.log(formData);
		//alert(formData.action);
		
		//process the form
		$.ajax({
			type		: 'POST',
			url			: 'inc/assignment-update.php',
			data		: formData,
			dataType	: 'json',
			encode		: true
		}).done(function(data) {
			//console.log(data);
			if(data['success']==true){
				serviceUpdateModal();						
				//$service_item.data('atts-assignment', data['response']['id']);
				//$service_item.find('select.profile-country').val(data['response']['country_code']);			
				//moveServiceItem($service_item);
				enableAllUpdates($service_item);
				$service_item.find('.service-status .text-success').fadeIn();
				$('.no-services').fadeOut();	
				ga ('send', 'event', 'services', formData.action, formData.name_id);			
			}else{
				toggleUI();
				if(data['denied']==true) {
					//alert('permission  denied');
					//pop a modal
					tunlrModal.load({
						'modal_id' : 'permission-denied',
						'header' : 'Permission Denied',
						'content' : "<p>You do not have the appropriate permission to use this profile.  Please <a href='/upgrade'>upgrade your account.</a></p>",
						"optout_checkbox" : false,
						"width" : 500					
					});	
					enableAllUpdates($service_item);
					$service_item.find('.service-status .text-success').fadeIn();
					$('.no-services').fadeOut();	
				} else {
					setTimeout(function(){
						enableAllUpdates($service_item);
						$service_item.find('.service-status .text-danger').fadeIn();
					},250);
					ga ('send', 'event', 'errors', 'service update failed', formData.name_id);
				}
			}
			
		});
		//document.location.reload();
		
	}

	// process the update a profile assignment button
	var assignmentUpdate = function(){
		$('.assignment-update').off('click');
		$(".button-toggle-knob").off('vmousedown');
		
		// If regular click - fire assignment update event
		$('.assignment-update').click(function(event) {							
				assignmentUpdateEvent($(this), 'click');				
		});
		
		// Check if switch is dragged & cancel click event
		$(".button-toggle-knob").on("vmousedown",function(event){
			
			var $assignment_update = $(this).parents('.assignment-update');
			var $switch = $(this);
			var $parent = $(this).parent();
			var parent_w = $parent.width();
			var min_left = 0-4;
			var max_left = parent_w-32;
			var action_ratio = 0.3; // Amount switch needs to be slid for an action to occur. 
			var move_ratio = 0;
			
			var $service_desc = $switch.parents('.service-item').find('.service-description');
			
			var touch = event.touches;
			var touch_event;
			if(touch){ touch_event = touch[0]; }else{touch_event = event;} // Use touch event if exists (for mobile), else use regular event for desktop;				
			
			var switch_x = parseInt($switch.css('left'));
			var current_x = touch_event.pageX;
				
			// INITIALIZE SWITCH	
			$switch.css('transition','initial'); // disable switch animations for smoother drag
			
			
			
			//MOUSE MOVE
			$switch.on('vmousemove', function(event){
				var touch = event.touches;
				var touch_event;
				if(touch){
					touch_event = touch[0];
				}else{
					touch_event = event;
				}
				
				// LIMIT SWITCH DRAG TO CONFINES OF SWITCH
				var temp2 = touch_event.pageX - current_x + switch_x;	
				if(temp2<=min_left){
					var new_x = min_left;
				}else if(temp2>=max_left){
					var new_x = max_left;
				}else{
					var new_x = temp2;
				}
				move_ratio = (new_x-switch_x)/parent_w;
				
				disableAllUpdateEvents();
				$switch.css('left', new_x);			
			});
			
		
			$(document).on('vmouseup', function(){
				//$service_desc.html('mouseup');
				if(move_ratio>0 && move_ratio>action_ratio || move_ratio<0 && move_ratio<(action_ratio*-1)){
					assignmentUpdateEvent($assignment_update, 'slide');
					
				}else{
					setTimeout(function(){
						assignmentUpdate();	
					},10);
				}
				// RESET EVENTS ON MOUSE UP
				$switch.off('vmousemove');
				$(document).off('vmouseup');
				
				
				// RESET SWITCH ON MOUSE UP
				$switch.css('transition','');
				$switch.css('left', '');
				
			});
		});						
	}

	
	
	function serviceUpdateModal(){
		tunlrModal.load({
			'modal_id' : 'service-update',
			'header' : 'Please allow a few minutes for changes to take effect.',
			'content' : "<p>Some websites may cache your old settings so we recommend clearing your browser and DNS cache after making changes.</p><p>For instructions click here: <a href='https://support.tunlr.com/customer/portal/articles/1909235-tunlr-not-working-basic-troubleshooting'>How to clear your DNS cache</a></p>",
			"optout_checkbox" : true,
			"width" : 500
			
		});	
	}
	
	function moveServiceItem($service_item){
		if($service_item.parents('.service-panel-body').hasClass('service-panel-body-inactive')){
			// Cache jQuery objects
			var $service_item = $service_item;
			var $current_panel = $('.service-panel-body-inactive');
			var $other_panel = $('.service-panel-body-active');
				
			// set variables
			var current_panel = [];
			current_panel['height'] = $current_panel.height();
			current_panel['offset'] = $current_panel.offset();
			
			var other_panel=[];
			other_panel['height'] = $other_panel.height();
			other_panel['bottom'] = $other_panel.offset().top + other_panel['height'];
			
			var service_item = [];
			service_item['position'] = $service_item.position();
			service_item['height'] = $service_item.outerHeight();
			service_item['offset'] = $service_item.offset();
			
			// create clone
			$service_item_temp = $service_item.clone().insertBefore($service_item);
			
			// change original - prepare for move
			$service_item.css({
				'position': 'absolute',
				'top': service_item['position'].top+'px',
				'width': '100%',
/*
				'-webkit-transform' : 'scale(1.2)',
				'transform'         : 'scale(1.2)'	
*/			
			});
			
			// animate other panel
			$other_panel.animate({
				'height': (other_panel['height']+service_item['height'])+'px',
			});
			
			// animate space consumed by current service item		
			$service_item_temp.css('overflow','hidden');
			$service_item_temp.animate({
				'height':'0px',
				'paddingTop': '0px',
				'paddingBottom': '0px',					
			},500, function(){
				$service_item_temp.remove();
			});
			
			
			var top_difference = other_panel['bottom'] - (current_panel['offset'].top + service_item['height']);
			
			// animate service-item
			$service_item.animate({
				'top':top_difference+'px',
			}, 1000, function(){
				
				$service_item.css({
/*
					'-webkit-transform' : '',
					'transform'         : ''
*/
				});
				//setTimeout(function(){
					$other_panel.css('height', '');
					$service_item.css({
						'position':'',
						'top':'',
						'width':'',
					});
					$service_item.appendTo($other_panel);
				//},500);				
			});
			
		}
	}
	
	
	selectProfileCountry = function(){
		console.log($('select.profile-country').change());
		//process the update a profile with country
	
	}
		$('select.profile-country').change(function(event) {
			var $this = $(this);
			var $service_item = $(this).parents('.service-item');
			disableAllUpdates($service_item);
			var $customSelect = $this.siblings(".customSelect");
			$customSelect.css('background-image', 'url("images/flags/'+$this.val().toLowerCase()+'.png"),url("../assets/customSelect/customSelect-arrow.gif")');
			var formData = {
				'action'		: "profile-country",
				'assignmentid'	: $(this).closest( ".service-item" ).data('atts-assignment'),
				'country'		: $(this).find('option:selected').val(),
				'profile_id'	: $(this).closest( ".service-item" ).data('atts-profileid'),
				'tunlr_cust_id' : $( 'span#customerEmail').data('att-tunlrid')
				
			};
			$.ajax({
				type		: 'POST',
				url			: 'inc/assignment-update.php',
				data		: formData,
				dataType	: 'json',
				encode		: true
			})
			.done(function(data) {
				serviceUpdateModal();
				console.log(data);
				if(data['success']==true){
					enableAllUpdates($service_item);
					$service_item.find('.service-status .text-success').fadeIn();
				}else{
					enableAllUpdates($service_item);
					$service_item.find('.service-status .text-danger').fadeIn();
				}
			});
			
			//console.log( formData )
			
		});	

	function disableAllUpdateEvents(){
		$('.assignment-update').off('click');
		$(".button-toggle-knob").off("vmousedown");
	}

	function disableAllUpdates($service_item){
		disableAllUpdateEvents();
		//$('select.profile-country').off();
		$('.service-panel-body').fadeTo(100, 0.5);
		if($service_item){
			$service_item.find('.service-status strong').hide();
			$service_item.find('.service-status img').show();
		}
	}
	
	function enableAllUpdates($service_item){
		assignmentUpdate();
		//selectProfileCountry();
		$('.service-panel-body').fadeTo(200, 1);
		if($service_item){
			$service_item.find('.service-status img').hide();
		}
	}

/**********************************/	
/*** FACEBOOK LOGIN and Sign UP ***/
/**********************************/
	var fbVerifyUser = function() {
		FB.api('/me', function(response) {
			//submit to handler
			console.log(response);
			var submitData = {
				'loginType'		: 'facebook',
				'facebookid'		: response.id
			}
			$.ajax({
				type		: 'POST',
				url			: 'controllers/ext-login.php',
				data		: submitData,
				dataType	: 'json',
				encode		: true
			})
			.done(function(data) {
				if( ! data.success) {
					alert(data.message);
					//console.log('user doesn\'t exists');
				} else {
					//console.log('logged in');
					var redirect_after = $('#redirect-after').val();
					if(redirect_after!=undefined && redirect_after != ""){
						window.location = '/'+redirect_after;
					}else{
						window.location = '/dashboard';
					}
					
				}
			});
		});
	}
	var createTrial = function(response) {
		console.log('creating trial');
		var submitData = {
			'email'			: response.email,
			'fname'			: response.first_name,
			'lname'			: response.last_name,
			'externalid'	: response.id,
			'system'		: 'FACEBOOK',
			'action'		: 'create-account'
		}
		$.ajax({
			type		: 'POST',
			url			: 'controllers/trial-account.php',
			data		: submitData,
			dataType	: 'json',
			encode		: true
		})
		.done(function(data) {
			//closeModal();
			if( ! data.success) {
				tunlrModal.load({
					'modal_id' : 'account-options',
					'header' : 'Account creation error',
					'content_selector':'',
					'content' : data.message,
					'optout_checkbox' : false,
					'width' : 500,
					'buttons' : [{
						text: 'CLOSE',
					}]
				})
				//console.log(data.message);
			} else {
				//console.log(data.message);
				var redirect_after = $('#redirect-after').val();
				if(redirect_after!=undefined && redirect_after != ""){
					window.location = '/'+redirect_after;
				}else{
					window.location = '/how-to-setup';
				}
			}
		});
	}
	
	var rerequestEmail = function() {
		FB.login(function(response) {
			console.log(response);
			if (response.status === 'connected') {
				FB.api('/me', function(response) {
					console.log(JSON.stringify(response));	
					if (response.email == null) {
						//no email make sure to prompt for email before creating account
						//console.log('tunlr requires email');
						tunlrModal.load({
								'modal_id' : 'account-options',
								'header' : 'Signup with facebook',
								'content_selector':'',
								'content' : '<p>It appears that you don\'t have an email associated with your account, please enter it below to create your Tunlr account.</p><form class="form-horizontal"><div class="form-group"><label class="col-sm-2 control-label">Email</label><div class="col-sm-10"><input id="facebook-email" type="email"></div></div></form>',
								'optout_checkbox' : false,
								'width' : 500,
								'buttons' : [{
									text: 'CLOSE',
								}, {
									text: 'CONTINUE',
									click:function(){
										response.email = $('input#facebook-email').val();
										console.log(JSON.stringify(response.email));
										console.log(JSON.stringify(response));
										createTrial(response);
										//rerequestEmail();
										//closeModal();
									}
								}]
							})
						//alert('no email available');
						//$('#myModal').('show'); 
						//rerequestEmail();
						//requested once, send to manually enter email
						
					} else {
						//register trial account
						createTrial(response);
					}
				});
			} else if (response.status === 'not_authorized') {
				// The person is logged into Facebook, but not your app.
			} else {
				// The person is not logged into Facebook, so we're not sure if
				// they are logged into this app or not.
			}
		}, { scope: 'email', auth_type: 'rerequest' });
	}
	
	window.fbAsyncInit = function() {
    	FB.init({
        	appId      	: '1433099966990877',
          	xfbml      	: false,
			status		: true,
          	version	    : 'v2.3'
        });
		/*FB.getLoginStatus(function(response) {
			if (response.status === 'connected') {
				console.log('Logged in.');
			} else {
				//show a facebook login
				//FB.login();
			}
		});*/
		
		//facebook signup button
		$('button#fb-signup').click(function(event) {
			ga ('send', 'event', 'signup', 'facebook signup click', window.location.pathname);
			FB.login(function(response){
				//console.log(response);
				if (response.status === 'connected') {
					FB.api('/me', function(response) {
						console.log(JSON.stringify(response));
						if (response.email == null) {
							tunlrModal.load({
								'modal_id' : 'account-options',
								'header' : 'Signup with Facebook',
								'content_selector':'',
								'content' : 'Tunlr requires your email address to create an account. Click continue to create your Tunlr account with Facebook.<br/><br>If you do not have an email associated with your facebook account you will be prompted for one.',
								'optout_checkbox' : false,
								'width' : 500,
								'buttons' : [{
									text: 'CLOSE',
								}, {
									text: 'CONTINUE',
									click:function(){
										rerequestEmail();
										closeModal();
									}
								}]
							})
							//no email make sure to prompt for email before creating account
							//alert('Tunlr requires your email to create an account.');
							//console.log('tunlr requires email');
							//rerequestEmail();
							
						} else {
							//console.log('should create');
							//register trial account
							ga ('send', 'event', 'signup', 'facebook signup', window.location.pathname, {
								hitCallback: createFunctionWithTimeout(function() {
							      createTrial(response);
							    })
							});
							fbq('track', 'Lead');
							window._fbq = window._fbq || [];
							window._fbq.push(['track', '6028119760773', {'value':'0.00','currency':'USD'}]);
						}
					});
				} else if (response.status === 'not_authorized') {
					// The person is logged into Facebook, but not your app.
				} else {
					// The person is not logged into Facebook, so we're not sure if
					// they are logged into this app or not.
				}
			}, {scope: 'public_profile,email'});
		});
		
		//facebook signup with confirm email
		$('button#fb-confirm-email').click(function(event) {
			FB.api('/me', function(response) { 
				response.email = $('input[name=email]').val();
				createTrial(response);
			});
		});
		
		//facebook login button
		$('button#facebook-login').click(function(event) {
			var fbAction = $('button#facebook-login').attr('data-atts');
			//alert( fbAction );
			if (fbAction === 'fb-logout') {
				FB.logout(function(response) {
					//console.log(response);
					if (response.status === 'unknown') {
						$('button#facebook-login').attr('data-atts', 'fb-login');
						$('button#facebook-login').text('FB Login');	
					}
				});
			}
			if (fbAction === 'fb-login') {
				FB.login(function(response){
					//console.log(response);
					if (response.status === 'connected') {
						// Logged into your app and Facebook.
						fbVerifyUser();
						// update the facebook button		
					} else if (response.status === 'not_authorized') {
						// The person is logged into Facebook, but not your app.
						//console.log('Facebook not authorized, please accept permissions');
					} else {
						// The person is not logged into Facebook, so we're not sure if
						// they are logged into this app or not.
					}
				}, {scope: 'public_profile,email'});
			}
		});
	
	};
	
	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	



	// SERVICE VOTES

	function updateVoteCount(num) {
		if(num==-1){
			var countChange = -1;	
		}else{
			var countChange = 1;	
		}
		
		var $voteCount = $('.voteCount');	
		var voteCount = $voteCount.html();
		var $votes_remaining = $('.votes-remaining');
		
		if(voteCount<=0 && countChange!=-1){
			voteCount = 0;
		}else{
			voteCount = voteCount - countChange;
		}
		$voteCount.html(voteCount);
		$votes_remaining.addClass('a1');
	
		setTimeout(function(){
			$votes_remaining.removeClass('a1');
			setTimeout(function(){
				$votes_remaining.addClass('a1');
				setTimeout(function(){
					$votes_remaining.removeClass('a1');
				}, 500);									
			}, 500);
		},500);
		if(voteCount <= 0) {
			$('.btn-vote').addClass('inactive');
		}
	}
	
	function sendVote(voteValue) {
		var theData = {
			'profileName' : voteValue,
			'vote'		  : 1,
			'type'		: 'REQUEST'
		}
		$.ajax({
			type		: 'POST',
			url			: 'controllers/profile-votes.php',
			data		: theData,
			dataType	: 'json',
			encode		: 'true'
		})
		.done(function(data) {
			if ( ! data.success) {
				alert(data.message);								
			} else {
				ga ('send', 'event', 'service votes', 'voted', voteValue);
			}
		})
	}
	
function initializeVotingSection(){
	$unvote_x = $('.unvote-x');
	$vote_listed = $('.btn-vote.vote-listed');
	$vote_other = $('.btn-vote.vote-other');
	$vote_other_input = $('#vote-other-input');
	
	$vote_other_input.pressEnter(function(){
		$vote_other.click();
	});
	
	$unvote_x.off('click');
	$vote_listed.off('click');
	$vote_other.off('click');
	
	//process profile vote actions
	$('.unvote-x').click(function(event){
			event.preventDefault();
			var $this = $(this);
			var $btn = $this.parents('.vote-bubble');
			var voteValue = $btn.attr('data-atts-name');	
			var theData = {
				'profileName' : $btn.attr('data-atts-name'),
				'type'		: 'DELETE'
			}
			$.ajax({
				type		: 'POST',
				url			: 'controllers/profile-votes.php',
				data		: theData,
				dataType	: 'json',
				encode		: 'true'
			})
			.done(function(data) {
				if ( ! data.success) {
					alert(data.message);
				} else {
					$('.btn-vote').removeClass('inactive');
					$btn.replaceWith('<a data-atts-name="'+voteValue+'" class="btn-vote pull-right vote-listed" href="#">Vote</a>');
					initializeVotingSection();
					updateVoteCount(-1);
					ga ('send', 'event', 'service votes', 'cancelled vote', voteValue);
				}
			})
					
	});	
	
	$vote_other.click(function(event) {
		event.preventDefault();
		var $this = $(this);
		var $input = $('input[name="service-request-other"]');
		if(!$this.hasClass('inactive')){
			var $this_li = $this.parents('li');
			//var $prev_li = $this_li.previous();
			var voteValue = $input.val();
			if(voteValue != undefined && voteValue != ""){ 
				sendVote(voteValue);
				//$(this).replaceWith( '<span class="btn-vote pull-right">Vote</span>' );
				updateVoteCount();
				var new_li = '<li><span class="service-name vote-service-name-static" style="cursor: default;">'+voteValue+'</span><span class="vote-bubble pull-right" data-atts-name="'+voteValue+'">Voted <a href="#" class="unvote-x"><i class="fa fa-times-circle"></i></span></a></li>'
				$this_li.before(new_li);
				initializeVotingSection();
				$vote_other_input.val('');
			}else{
				$input.focus();
			}			
		}

		//$('input[name="service-request-other"]').siblings.('a.btn-vote').data('data-atts-name', voteValue);
	});
	$vote_listed.click(function(event) {
		var $this = $(this);
		if(!$this.hasClass('inactive')){
			var voteValue = $(this).data('atts-name');
			sendVote($(this).data('atts-name'));
			$(this).replaceWith( '<span class="vote-bubble pull-right" data-atts-name='+voteValue+'>Voted <a href="#" class="unvote-x"><i class="fa fa-times-circle"></i></span></a></span>' );
			initializeVotingSection();	
			updateVoteCount();
			event.preventDefault();
		}
	});
}

function sendVerificationEmail(email){
		$.ajax({
		type        : "POST", // define the type of HTTP verb we want to use (POST for our form)
		url         : "controllers/send-verification-email.php", // the url where we want to POST
		//data        : formData, // our data object
		dataType    : "json", // what type of data do we expect back from the server
		encode      : true
	})
	.done(function(data) {
		if ( ! data.success) {
			// no failed response is returned
				tunlrNotif.load({
					text: "Sorry, your verification email could not be sent at this time."

				});																			
		} else {
			//update button to show sent		
				tunlrNotif.load({
					text: "A verification email has been sent to <strong>"+email+"</strong>.",
					color: "blue",
					buttons: [{
						text : "RESEND VERIFICATION EMAIL",
						click: function($this, closeNotif){
							closeNotif();
							sendVerificationEmail(email);
						}
					}]
				});
				addSessionDisabledModal("verify-notification");										
		}
	});
}


function addSessionDisabledModal(modal_id){
	var formData = {
		"modal_id" : modal_id,
	}
	$.ajax({
		type        : "POST", // define the type of HTTP verb we want to use (POST for our form)
		url         : "controllers/add-session-dissabled-modal.php", // the url where we want to POST
		data        : formData, // our data object
		dataType    : "json", // what type of data do we expect back from the server
		encode      : true
	});
}

function fireEvent(name){
	$.post('/event.php', {event_name: name 		
	}).done(function(data)  {
	    console.log(data);
	}).fail(function()  {
	    console.log('Error: Event fail');
	});	    
};