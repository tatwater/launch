function resizeToEdge(){$(".to-edge").width($("body").innerWidth()/2-80)}function resizeOpenToEdge(){var e=225*$(".drawer-open").find($(".event")).length;if(e+80>$("body").innerWidth()){for(;e+80>$("body").innerWidth();)e-=225;$(".drawer-open .to-edge").css("width",e+80)}else $(".drawer-open .to-edge").css("width",e+80)}$(document).ready(function(){resizeToEdge(),startSlideIndex=Math.floor(Math.random()*$(".hero-slider .slide").length),$(".hero-slider .slide").each(function(){var e=""+$(this).attr("data-bg-mask")+", url('wp-content/themes/launch/img/hero-slider/"+$(this).attr("data-bg-img")+"')";$(this).css({background:e,"background-position":"50% 50%","background-repeat":"no-repeat","background-size":"cover"}),$(this).find("h1").after("<p>"+$(this).parent().attr("data-description")+"</p>")}),$("[data-toggle='search']").on("click",function(){$(this).parents(".main-nav").toggleClass("search-open"),$(this).parents(".main-nav").hasClass("search-open")&&$(this).siblings("form").find("[type='search']").val(""),$(this).siblings("form").find("[type='search']").focus()}),$("[data-toggle='signup-modal']").on("click",function(){var e=$(this).prev("[type='email']").val();$(this).prev("[type='email']").val(""),$(".modal").each(function(){$(this).toggleClass("modal-open"),$(this).find("[type='email']").val(e),$(this).find("[name='FNAME']").focus()})}),$("[data-toggle='events-drawer']").on("click",function(){$(this).parents(".events").toggleClass("drawer-open"),$(this).parents(".events").hasClass("drawer-open")?resizeOpenToEdge():resizeToEdge()}),$(window).resize(function(){$(".events").each(function(){$(this).hasClass("drawer-open")?resizeOpenToEdge():resizeToEdge()})}),$(window).bind("scroll",function(){$(".main-nav").each(function(){$(window).scrollTop()>$(this).offset().top+20?$(this).find(".nav-bar").addClass("fixed"):$(this).find(".nav-bar").removeClass("fixed")})}),$(document).click(function(e){$(e.target).closest(".main-nav").length||$(".main-nav").hasClass("search-open")&&$(".main-nav").removeClass("search-open"),$(e.target).is("[data-toggle='signup-modal']")||$(e.target).closest(".modal").length||$(".modal").hasClass("modal-open")&&$(".modal").removeClass("modal-open"),$(e.target).closest(".to-edge").length||$(".to-edge").parents(".events").hasClass("drawer-open")&&($(".to-edge").parents(".events").removeClass("drawer-open"),resizeToEdge())}),$(".hero-slider").slick({arrows:!1,autoplay:!0,autoplaySpeed:4e3,centerMode:!0,dots:!1,draggable:!1,easing:"easeInOutExpo",fade:!0,infinite:!0,initialSlide:startSlideIndex,pauseOnHover:!1,slide:".slide",slidesToShow:1,speed:1e3})}),$(function(){$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);if(e=e.length?e:$("[name="+this.hash.slice(1)+"]"),e.length)return $("html,body").animate({scrollTop:e.offset().top-$(".division-nav .nav-bar").height()+1},500),!1}})});