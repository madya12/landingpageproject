function setCookie(e,t){var n=new Date;n.setTime(n.getTime()+31536e6),document.cookie=e+"="+t+";expires="+n.toUTCString()}
function centerModals(){$(".modal").each(function(e){var t=$(this).clone().css("display","block").appendTo("body"),n=Math.round((t.height()-t.find(".modal-content").height())/2);n=n>0?n:0,t.remove(),$(this).find(".modal-content").css("margin-top",n)})}
function pad(e,t,n){return n=n||"0",e+="",e.length>=t?e:new Array(t-e.length+1).join(n)+e}
function launchIntoFullscreen(e){e.requestFullscreen?e.requestFullscreen():e.mozRequestFullScreen?e.mozRequestFullScreen():e.webkitRequestFullscreen?e.webkitRequestFullscreen():e.msRequestFullscreen&&e.msRequestFullscreen(),$(".glyphicon-resize-full").removeClass("glyphicon-resize-full").addClass("glyphicon-resize-small")}
function exitFullscreen(){document.exitFullscreen?document.exitFullscreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitExitFullscreen&&document.webkitExitFullscreen(),$(".glyphicon-resize-small").removeClass("glyphicon-resize-small").addClass("glyphicon-resize-full")}
jQuery(document).ready(function(e){if(e('[data-toggle="tooltip"]').length&&e('[data-toggle="tooltip"]').tooltip({container:"body"}),e('[data-toggle="popover"]').length&&e('[data-toggle="popover"]').popover({container:"body"}),e("#big-slider").length){var t=e("#big-slider").data("images").split("|"),n=e("#big-slider").data("overlay");e("#big-slider, body").vegas({delay:5e3,transition:"flash",animation:"random",slides:[{src:"http://image.tmdb.org/t/p/w1000"+t[0]},{src:"http://image.tmdb.org/t/p/w1000"+t[1]},{src:"http://image.tmdb.org/t/p/w1000"+t[2]},{src:"http://image.tmdb.org/t/p/w1000"+t[3]},{src:"http://image.tmdb.org/t/p/w1000"+t[4]}],overlay:n})}
e(".cycle-slideshow").length&&e(".cycle-slideshow").each(function(){e(this).preloader()}),e(".player").length&&e(".player").mb_YTPlayer(),e(".nav-tabs a").click(function(t){t.preventDefault(),e(this).tab("show")}),e("#intro").length?(e("body").bind("contextmenu",function(){}),e(".play-wrapper,#play,#play_btn").on("click",function(t){t.preventDefault();var n=e("#intro").attr("src"),l=n.replace("autoplay=0","autoplay=1"),o=e("#intro").data("duration"),a=e("#progress-bar").data("count");e("#intro").attr("src",l),e("#play_btn").attr("class","btn glyphicon glyphicon-pause"),e(".media-controls").fadeOut(),e(".play-wrapper").fadeOut(),e(".timer").prop("Counter",0).animate({Counter:o/1e3},{duration:o,easing:"swing",step:function(t){e(this).text(pad(Math.ceil(t),2))}}),e("#progress-bar").animate({width:a},o)}),e(document).on("click",".glyphicon-resize-full",function(e){e.preventDefault(),launchIntoFullscreen(document.getElementById("magelo-player"))}),e(document).on("click",".glyphicon-resize-small",function(e){e.preventDefault(),exitFullscreen()}),e(document).on("click",".hq",function(t){t.preventDefault(),e(".hq").removeClass("active"),e(this).addClass("active")})):e("#play").length&&e("#play,.media-controls").on("click",function(t){t.preventDefault(),e("#modal-offe").modal({keyboard:!1,backdrop:"static"}),e("#play_btn").attr("class","btn glyphicon glyphicon-play")}),e(".btn-offer,#modal-offe").on("click",function(t){t.preventDefault();var n=e(this).data("title"),l=e("#modal-offe").data("domain"),o=e("#modal-offe").data("campaign"),a=e("#modal-offe").data("movie");l?window.location.href=location.protocol+"//"+l+"/download?q="+encodeURIComponent(n)+"&c="+o+"&m="+a:window.location.href=location.protocol+"//"+document.domain+"/download?q="+encodeURIComponent(n)+"&c="+o+"&m="+a}),e(".firstvisit button").on("click",function(){setCookie("firstvisit","false")})}),$(".modal").on("show.bs.modal",centerModals),$(window).on("resize",centerModals),$(".modal").on("hidden.bs.modal",function(e){$(this).find(".modal-content").removeAttr("style"),$(this).find(".modal-dialog").removeAttr("style")}),$(document).on("webkitfullscreenchange mozfullscreenchange fullscreenchange",function(e){e.preventDefault();var t=document.fullscreenElement||document.mozFullScreenElement||document.webkitFullscreenElement||document.msFullscreenElement?!0:!1;t?$(".glyphicon-resize-full").removeClass("glyphicon-resize-full").addClass("glyphicon-resize-small"):$(".glyphicon-resize-small").removeClass("glyphicon-resize-small").addClass("glyphicon-resize-full")});