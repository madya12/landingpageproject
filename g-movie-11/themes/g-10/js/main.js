document.addEventListener('DOMContentLoaded',function(){function getAll(selector){return Array.prototype.slice.call(document.querySelectorAll(selector),0)}
var rootEl=document.documentElement;var $burgers=getAll('.navbar-burger');if($burgers.length>0){$burgers.forEach(function($el){$el.addEventListener('click',function(){var target=$el.dataset.target;var $target=document.getElementById(target);$el.classList.toggle('is-active');$target.classList.toggle('is-active')})})}
var $modals=getAll('.modal');var $modalButtons=getAll('.modal-button');var $modalCloses=getAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button');var $ytCloses=document.getElementById('youtube-video');if($modalButtons.length>0){$modalButtons.forEach(function($el){$el.addEventListener('click',function(){var target=$el.dataset.target;var $target=document.getElementById(target);rootEl.classList.add('is-clipped');$target.classList.add('is-active')})})}
if($modalCloses.length>0){$modalCloses.forEach(function($el){$el.addEventListener('click',function(){closeModals();$ytCloses.contentWindow.postMessage('{"event":"command","func":"'+'stopVideo'+'","args":""}','*')})})}
document.addEventListener('keydown',function(event){var e=event||window.event;if(e.keyCode===27){closeModals()}});function closeModals(){rootEl.classList.remove('is-clipped');$modals.forEach(function($el){$el.classList.remove('is-active')})}
var navbarEl=document.getElementById('navbar');var navbarBurger=document.getElementById('navbarBurger');var navMenuEl=document.getElementById('navMenu');var NAVBAR_HEIGHT=52;var THRESHOLD=160;var navbarOpen=!1;var horizon=NAVBAR_HEIGHT;var whereYouStoppedScrolling=0;var scrollFactor=0;var currentTranslate=0;navbarBurger.addEventListener('click',function(el){navbarOpen=!navbarOpen;if(navbarOpen){rootEl.classList.add('is-clipped')}else{rootEl.classList.remove('is-clipped')}});function upOrDown(lastY,currentY){if(currentY>=lastY){return goingDown(currentY)}
return goingUp(currentY)}
function goingDown(currentY){var trigger=NAVBAR_HEIGHT;whereYouStoppedScrolling=currentY;if(currentY>horizon){horizon=currentY}
translateHeader(currentY,!1)}
function goingUp(currentY){var trigger=0;if(currentY<whereYouStoppedScrolling-NAVBAR_HEIGHT){horizon=currentY+NAVBAR_HEIGHT}
translateHeader(currentY,!0)}
function constrainDelta(delta){return Math.max(0,Math.min(delta,NAVBAR_HEIGHT))}
function translateHeader(currentY,upwards){var translateValue=void 0;if(upwards&&currentTranslate==0){translateValue=0}else if(currentY<=NAVBAR_HEIGHT){translateValue=currentY*-1}else{var delta=constrainDelta(Math.abs(currentY-horizon));translateValue=delta-NAVBAR_HEIGHT}
if(translateValue!=currentTranslate){var navbarStyle='\n        transform: translateY('+translateValue+'px);\n      ';currentTranslate=translateValue;navbarEl.setAttribute('style',navbarStyle)}
if(currentY>THRESHOLD*2){scrollFactor=1}else if(currentY>THRESHOLD){scrollFactor=(currentY-THRESHOLD)/THRESHOLD}else{scrollFactor=0}
var translateFactor=1+translateValue/NAVBAR_HEIGHT}
translateHeader(window.scrollY,!1);var ticking=!1;var lastY=0;window.addEventListener('scroll',function(){var currentY=window.scrollY;if(!ticking){window.requestAnimationFrame(function(){upOrDown(lastY,currentY);ticking=!1;lastY=currentY})}
ticking=!0})})