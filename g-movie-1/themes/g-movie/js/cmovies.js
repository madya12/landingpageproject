$(document).ready(function(){
	qtip_movie_item();
	function e() {
		$(this).find(".sub-container").css("display", "block")
	}

    function s() {
		$(this).find(".sub-container").css("display", "none")
    }
    /*
	$.ajax({
        url: base_url + "ajax/load_login_status",
        type: "GET",
        dataType: "json",
        success: function(data) {
            $("#top-user").html(data.content), 1 == data.is_login && (is_login = true)
        }
    }),
	*/
	$("#search a.box-title").click(function() {
        $("#search .box").toggleClass("active")
    }),
	
	$(".mobile-menu").click(function() {
        $("#menu,.mobile-menu").toggleClass("active"), $("#search, .mobile-search").removeClass("active")
    }),
	
	$(".mobile-search").click(function() {
        $("#search,.mobile-search").toggleClass("active"), $("#menu, .mobile-menu").removeClass("active")
    }),
	
	$(".filter-toggle").click(function() {
        $("#filter").toggleClass("active"), $(".filter-toggle").toggleClass("active")
    }),
	
	$("#toggle, .cac-close").click(function() {
        $("#comment").toggleClass("active")
    }),
	
	$(".top-menu> li").bind("mouseover", e), $(".top-menu> li").bind("mouseout", s);

	$(function(){
		function e(){
			var e = $(this), s = e.find(".modal-dialog");
				e.css("display", "block"), s.css("margin-top", Math.max(0, ($(window).height() - s.height()) / 2))
		}
		$(".modal").on("show.bs.modal", e), $(window).on("resize", function(){
			$(".modal:visible").each(e)
		})
	});
    /*
	var o = !0;
    $(".search-suggest").mouseover(function() { o = !1 });
	$(".search-suggest").mouseout(function() { o = !0 });
	
	var search_a;
	$("input[name=q]").keyup(function() {
        var e = $(this).val();
		if (e.trim().length > 2) {
			if (typeof search_a !== "undefined"){
				search_a.abort();
			}

			search_a = $.ajax({
				url: base_url + "ajax/suggest_search",
				type: "POST",
				dataType: "json",
				data: { keyword: e, },
				success: function(e) {
					$(".search-suggest").html(e.content), "" !== e.content.trim() ? $(".search-suggest").show() : $(".search-suggest").hide()
				}
			});
		} else {
			$('.search-suggest').hide();
		}
    }),
	
	$("input[name=q]").blur(function() {
        o && $(".search-suggest").hide()
    }),
	
	$("input[name=q]").focus(function() {
        "" !== $(".search-suggest").html() && $(".search-suggest").show()
    }),
	
	$("input[name=q]").keypress(function(e) {
        13 == e.which && searchMovie()
    }),
	
	$("#login-form").submit(function(e) {
        $("#login-submit").prop("disabled", !0), $("#login-loading").show();
        var post = $(this).serializeArray(),
            action = $(this).attr("action");
        $.ajax({
            url: action,
            type: "POST",
            data: post,
            dataType: "json",
            success: function(e) {
                0 == e.status && (
					$("#error-message").show(),
					$("#error-message").text(e.message),
					$("#login-submit").removeAttr("disabled"),
					$("#login-loading").hide()
				),
				1 == e.status && window.location.reload()
            }
        }), e.preventDefault()
    }),

	$("#register-form").submit(function(e) {
        var s = $("#username").val();
        $("#register-submit").prop("disabled", !0), $("#register-loading").show();
        var o = $(this).serializeArray();
        o.push({
            name: "token",
        });
        var a = $(this).attr("action");
        $.ajax({
            url: a,
            type: "POST",
            data: o,
            dataType: "json",
            success: function(e) {
                if ($(".error-block").hide(), 0 == e.status) {
                    for (var s in e.messages) $("#error-" + s).show(), $("#error-" + s).text(e.messages[s]);
                    $("#register-submit").removeAttr("disabled"), $("#register-loading").hide()
                }
                1 == e.status && window.location.reload()
            }
        }), e.preventDefault()
    }),
	
	$("#forgot-form").submit(function(e) {
        $("#forgot-submit").prop("disabled", !0), $("#forgot-loading").show();
        var s = $(this).serializeArray();
        $.ajax({
            url: base_url + "user/forgotPassword",
            type: "POST",
            data: s,
            dataType: "json",
            success: function(e) {
                0 == e.status && ($("#forgot-error-message").show(), $("#forgot-error-message").text(e.message)), 1 == e.status && ($("#forgot-success-message").show(), $("#forgot-success-message").text(e.message)), $("#forgot-submit").removeAttr("disabled"), $("#forgot-loading").hide()
            }
        }), e.preventDefault()
    }),
	*/
	$("#request-form").submit(function(e){
        var s = $("#movie_name").val();
        $("#request-submit").prop("disabled", !0), $("#request-loading").show();
        var o = $(this).serializeArray();
        o.push({
            name: "token",
        });
        var a = $(this).attr("action");
        $.ajax({
            url: a,
            type: "POST",
            data: o,
            dataType: "json",
            success: function(e) {
                if ($(".error-block").hide(), 0 == e.status)
                    for (var s in e.messages) $("#error-" + s).show(), $("#error-" + s).text(e.messages[s]);
                1 == e.status && ($("#message-success").show(), setTimeout(function() {
                    $("#message-success").hide()
                }, 5000), document.getElementById("request-form").reset()), $("#request-submit").removeAttr("disabled"), $("#request-loading").hide()
            }
        }), e.preventDefault()
    }),
	
	$("#report-form").submit(function (e){
		if (!$.cookie('report-' + movie.id)) {
			$("#report-submit").prop("disabled", true);
			$("#report-loading").show();
			var postData = $(this).serializeArray();
			var formURL = $(this).attr("action");
			$.ajax({
				url: formURL,
				type: "POST",
				data: postData,
				dataType: "json",
				success: function (data) {
					if (data.status == 0){
						$("#report-error-message").show();
						$("#report-error-message").text(data.message);
					}
					if(data.status == 1){
						$('#pop-report').modal('hide');
						$("#report-alert").show();
						setTimeout(function(){ $("#report-alert").hide(); }, 5000);
						$(".bp-btn-report").remove();
						$.cookie('report-' + movie.id, true, {path: '/', expires: 1});
						document.getElementById("report-form").reset();
					}
					$("#report-submit").removeAttr("disabled");
					$("#report-loading").hide();
				}
			});
		}
		e.preventDefault();
	});
});

function favorite(movieID,type,name){
    is_login ? (
		$.ajax({
			url: base_url + "ajax/user_favorite",
			method: "POST",
			data: { movieID: movieID,},
			dataType: "json",
			success: function(data){
				if( data.is_login == false ){
					$("#pop-login").modal("show");
				}else{
					if( data.status == 1 ){
						$(".btn-favorite-" + movieID).addClass("active");
						var message="<strong>"+name+"</strong> has been added to your favorite list.";
					}else{
						$(".btn-favorite-" + movieID).removeClass("active")
						var message="<strong>"+name+"</strong> has been removed from your favorite list.";
					}
					if(type == 1){
						$("#message-content").html(message),
						$("#pop-alert").modal("show")
					}else if(type == 2){
						$("#favorite-alert").show(),
						$("#favorite-message").html(message),
						setTimeout(function(){$("#favorite-alert").hide()}, 5000)
					}
				}
			}
		})
	) : $("#pop-login").modal("show")
}

function updateMovieView(movieID){
    $.cookie("view-" + movieID) || $.ajax({
        url: base_url + "ajax/movie_update_view",
        type: "POST",
        dataType: "json",
        data: { movieID: movieID },
		success: function(data){
			if( data.status == 1 ){
				$.cookie("view-" + movieID,"1",{expires:1,path: '/'});
			}
        }
    })
}

function validateEmail(e) {
    var s = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return e.length > 0 && s.test(e)
}

function qtip_movie_item(){
	if (!jQuery.browser.mobile){
		$('a.cluetip').cluetip({
            dropShadow: true,
            sticky: true,
            positionBy: 'mouse',
            mouseOutClose: true,
            showTitle: false,
            closeText: '',
            width: 360,
        });
	}
	$("img.lazy").lazyload({
		effect: "fadeIn"
	});
}

function validate_report() {
	if (($("#report-form input[name*='issue']:checked").length) <= 0) {
		alert("Please select any issue.");
		return false;
	}
	return true;
}

function autonext(){
	var next = $.cookie("player-next");
	if(next == 0){
		$.cookie("player-next","1",{expires:365,path: '/'});
		$('#autonext').html('ON');
	}else{
		$.cookie("player-next","0",{expires:365,path: '/'});
		$('#autonext').html('OFF');
	}
}

function function_one(){
	var cookieData = $jwcookie.getItem('resume_' + encodeURIComponent(window.location.href));
	if(cookieData) {
		var resumeAt = cookieData.split(':')[0], videoDur = cookieData.split(':')[1];
		if(parseInt(resumeAt) < parseInt(videoDur)){
			player.seek(resumeAt);
		}else if(cookieData && !(parseInt(resumeAt) < parseInt(videoDur))) {
		}
	}
}

function loadSchedule(){
	var content = document.getElementById('schedule_list_allpage');
	var buttonLoadSchedule = document.getElementById('buttonLoadSchedule');
	if(content.style.display == "none"){
		(!$("#schedule").text().length) ? $.ajax({
			url: base_url + "ajax/schedule",
			type: "GET",
			dataType: "json",
			success: function(data) {
				$("#schedule").html(data.content);
				$('.ps-active-y').perfectScrollbar();
			}
		}) : "";
		content.style.display = "block";
		buttonLoadSchedule.innerHTML = '<a class="toggle_schedule_close" href="javascript:loadSchedule()"><span class="btn-close-schedule">Close</span></a>';
	}else{ 
		content.style.display = "none";
		buttonLoadSchedule.innerHTML = '<a class="toggle_schedule" href="javascript:loadSchedule()"><i class="fa fa-bolt schedule_thunder"></i> <span>Schedule</span></a>';
    }
}