$(document).ready(function() {
  resizeToEdge();
  startSlideIndex = Math.floor(Math.random() * $(".hero-slider .slide").length);
  
  $(".hero-slider .slide").each(function() {
    var background = "" + $(this).attr("data-bg-mask") +
                     ", url('wp-content/themes/launch/img/hero-slider/" + $(this).attr("data-bg-img") + "')";
    $(this).css({
      "background": background,
      "background-position": "50% 50%",
      "background-repeat": "no-repeat",
      "background-size": "cover"
    });
    $(this).find("h1").after("<p>" + $(this).parent().attr("data-description") + "</p>");
  });

  $("[data-toggle='search']").on("click", function() {
    $(this).parents(".main-nav").toggleClass("search-open");
    if ($(this).parents(".main-nav").hasClass("search-open"))
      $(this).siblings("form").find("[type='search']").val("");
      $(this).siblings("form").find("[type='search']").focus();
  });

  $("[data-toggle='signup-modal']").on("click", function() {
    var email = $(this).prev("[type='email']").val();
    $(this).prev("[type='email']").val("");
    $(".modal").each(function() {
      $(this).toggleClass("modal-open");
      $(this).find("[type='email']").val(email);
      $(this).find("[name='FNAME']").focus();
    });
  });

  $("[data-toggle='events-drawer']").on("click", function() {
    $(this).parents(".events").toggleClass("drawer-open");
    if ($(this).parents(".events").hasClass("drawer-open"))
      resizeOpenToEdge();
    else
      resizeToEdge();
  });

  $(window).resize(function() {
    $(".events").each(function() {
      if ($(this).hasClass("drawer-open"))
        resizeOpenToEdge();
      else
        resizeToEdge();
    });
  });

  $(window).bind("scroll", function() {
    $('.main-nav').each(function() {
      if ($(window).scrollTop() > ($(this).offset().top + 20)) {
        $(this).find('.nav-bar').addClass("fixed");
      }
      else {
        $(this).find('.nav-bar').removeClass("fixed");
      }
    });
  });

  $(document).click(function(event) {
    if(!$(event.target).closest(".main-nav").length)
      if($(".main-nav").hasClass("search-open"))
        $(".main-nav").removeClass("search-open");

    if(!$(event.target).is("[data-toggle='signup-modal']"))
      if(!$(event.target).closest(".modal").length)
        if($(".modal").hasClass("modal-open"))
          $(".modal").removeClass("modal-open");

    if(!$(event.target).closest(".to-edge").length)
      if($(".to-edge").parents(".events").hasClass("drawer-open")) {
        $(".to-edge").parents(".events").removeClass("drawer-open");
        resizeToEdge();
      }
  });

  $('.hero-slider').slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 4500,
    centerMode: true,
    dots: false,
    draggable: false,
    easing: 'easeInOutExpo',
    fade: true,
    infinite: true,
    initialSlide: startSlideIndex,
    pauseOnHover: false,
    slide: ".slide",
    slidesToShow: 1,
    speed: 1000
  });
});

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - $(".division-nav .nav-bar").height() + 1
        }, 500);
        return false;
      }
    }
  });
});

function resizeToEdge() {
  $(".to-edge").width(($("body").innerWidth() / 2) - 80);
}
function resizeOpenToEdge() {
  var maxWidth = $(".drawer-open").find($(".event")).length * 225;
  if ((maxWidth + 80) > $("body").innerWidth()) {
    while ((maxWidth + 80) > $("body").innerWidth())
      maxWidth -= 225;
    $(".drawer-open .to-edge").css("width", maxWidth + 80);
  }
  else {
    $(".drawer-open .to-edge").css("width", maxWidth + 80);
  }
}