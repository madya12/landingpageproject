
	(function(tunlr_ns){
		
	  //private scoping
	  var privVar;
	  function priv(){}
	  
	  //Exposed Functions
	  var disabled_modal_ids = [];
	  tunlr_ns.disable = function(ids){
		  disabled_modal_ids = ids;
	  }

	  tunlr_ns.load = function(settings){
					if (typeof closeModal === "function") { 
					    closeModal();
					}		  	
	  	var this_tunlr = this;
		//check if current modal has been disabled (by id)
		var modal_disabled = $.inArray(settings.modal_id, disabled_modal_ids) > -1;
		
		if(modal_disabled!=true){
			var settings = settings;
	
			function buildBtn(obj){
				var btn_text = obj.text;
				var $btn = $('<a/>',{
					"class": "btn-flat btn-flat-red btn-modal-sm",
					"href": "#",
					text: btn_text,
				}).appendTo($modal_alert_footer);
				function isFunction(functionToCheck) {
					var getType = {};
					return functionToCheck && getType.toString.call(functionToCheck) === '[object Function]';
				}
				if(isFunction(obj.click)){
					$btn.click(function(e){e.preventDefault(); obj.click();});
				}else{
					$btn.click(function(e){ e.preventDefault(); closeModal();});
				}		
			}
			
			positionModal = function positionModal(){
				var $body = $('body');
				$body.css('overflow', 'hidden');
				$modal.css('height', '');
				$modal_alert_content.css('height', '');			 
				
				var modal_alert_footer_h = 0;
				if($modal_alert_footer.length){
					modal_alert_footer_h = $modal_alert_footer.outerHeight();
				}	
				// POSITION
				var window_h = window.innerHeight;
				var window_w = window.innerWidth;
				var modal_h = $modal.height()+modal_alert_footer_h;
				var modal_w = $modal.width();
					
				if(modal_h>window_h-50){
					var diff = $(window).width()-window_w;
					if(window_w+diff>modal_w){
						modal_h = window_h-50;
						$body.css('overflow', '');
					}else{
						modal_h = window_h;
						$body.css('overflow', 'hidden');
					}	
				}
				if(window_w<modal_w){
					$modal.width(window_w+'px');
				}
				
				
				$modal.css('height', modal_h);
				$modal.css('top', '0px');
				$modal_alert_content.css('height', '100%');
				$modal_alert_content.css('height', $modal_alert_content.outerHeight()-modal_alert_footer_h); 
				$modal_alert_content.css('overflow', 'auto');				
				var modal_center_pos = (window_h/2)-($modal.height()/2);
				$modal.css('top', modal_center_pos+'px');					
			}
			


			closeModal = function closeModal(){
				var $body = $('body');
				$body.css('overflow', '');
				$(window).unbind('resize');
				$modal.hide();
				if(settings.content_selector!==0 && settings.content_selector!==undefined && settings.content_selector!==""){					
					modal_content_inject.appendTo('body').removeClass('show');
				}
				$modal_fade.fadeOut('slow',function(){
					$modal_container.hide();

					$modal_container.hide();
				});
				
				var optout_exists = $modal.find('#optout').length ? true : false;
				if(optout_exists == true && $('#optout')[0].checked){
					//Jquery function that writes data-attr-modal_id to DB and session variable
					disabled_modal_ids.push(settings.modal_id);
					this_tunlr.disable(disabled_modal_ids);
					if(settings.modal_id=='invite-friends'){
						var temp_modal_id =  "invite-friends-never";
					}else{
						var temp_modal_id = settings.modal_id;
					}
					var formData = {
						'modal_id' : temp_modal_id
					}
					console.log(settings);
					$.ajax({
						type		: 'POST',
						url			: 'controllers/add-disabled-modal.php',
						data		: formData,
						dataType	: 'json',
						encode		: true
					});
					// Insert message optout logic here
					console.log('disabled');										
				}
			}
				
			
			if(settings.override==undefined){
				// Create Modal Elements
				var $modal_container = $('<div/>',{
					"class": "modal-container",
					"data-attr-modal_id" : settings.modal_id
				}).prependTo('body');
				
				var $modal_fade =  $('<div/>',{
					"class": "modal-fade",
				}).appendTo($modal_container);
								
				var $modal = $('<div/>',{
					"class": "modal-alert cb-panel",
				}).appendTo($modal_container);				
				
				var $modal_alert_content = $('<div/>',{
					"class": "modal-alert-content",
				}).appendTo($modal);				
				
				if(settings.disable_footer!=true){
					var $modal_alert_footer =  $('<div/>',{
						"class": "modal-alert-footer",
					}).appendTo($modal);				
				}
				var $modal_alert_footer;
				

										
				// Ad custom buttons if set, if not add default close
				if(settings.buttons!=undefined && settings.buttons!=""){
					i=0;
					while(i<settings.buttons.length){
						buildBtn(settings.buttons[i]);
						i++;
					}
				}else{
					var btn_text = "OK";
					if(settings.button_text!=undefined && settings.button_text!=""){ btn_text = settings.button_text}
					var $btn = $('<a/>',{
						"class": "btn btn-block btn-sflat",
						"href": "#",
						text: btn_text,
					}).appendTo($modal_alert_footer);														
					$btn.click(function(e){ e.preventDefault(); closeModal();});				
				}
				
	
				
				if(settings.content_selector==0 || settings.content_selector==undefined || settings.content_selector==""){
					var modal_content_inject = settings.content;
				}else{
					var modal_content_inject = $(settings.content_selector).addClass('show');
				}
				

			
				// Create Modal Content
				var $header;
				if(settings.header != "" && settings.header != undefined){
					$header = $modal_alert_content.append("<h3>"+settings.header+"</h3>");
				}
				var $content = $modal_alert_content.append(modal_content_inject);
				var $optout;
				if(settings.optout_checkbox==true){
					$optout = $modal_alert_content.append("<input type='checkbox' name='optout' id='optout'> &nbsp;<label for='optout'>Don't show this message again</label>");
				}			
				
				//	SIZE
				if(settings.width != "" || settings.width != undefined){
					$modal.css('max-width', settings.width+'px');
				}
				

							
			}else{
				// Create Modal Elements
				var $modal_container = $('<div/>',{
					"class": "modal-container",
					"data-attr-modal_id" : settings.modal_id
				}).prependTo('body');
				
				var $modal_fade =  $('<div/>',{
					"class": "modal-fade",
				}).appendTo($modal_container);
				
				
					
				var $modal = $(settings.override).appendTo($modal_container);			
				
				var $modal_alert_content = $modal.find('.modal-alert-content');
				
				var $modal_alert_footer = $modal.find('.modal-alert-footer');							
			}
				
				
						
					$modal.hide();
					$modal_container.show();
					$modal.css('opacity', '0').css('display', 'inline-block');
					$modal.animate({
						'opacity': 1
					}, 300);
					// $modal.fadeIn('fast');
					$modal_fade.fadeIn('slow');
					// Modal Fade Click
					$modal_fade.click(function(){
						closeModal();
					});					
					positionModal();

					$(window).resize(function() {
						positionModal();
					});
										
											
		}
				
				
				
			
					
	  
	  };
	
	}(this.tunlrModal = this.tunlrModal || {}));
	