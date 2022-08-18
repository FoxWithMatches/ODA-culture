$(function() {

/* Products https://kenwheeler.github.io/slick/ */

let slider = $("#slickProducts");

slider.slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    arrows: false,
    dots: true
  });

/* Header */

let header = $("#header");
let intro = $("#intro");
let introH;
let scrollPos = $(window).scrollTop();

checkScroll(scrollPos, introH);

$(window).on("scroll load resize", function() {
  introH = intro.innerHeight();
  scrollPos = $(this).scrollTop();

  checkScroll(scrollPos, introH);
  
});

function checkScroll(scrollPos, introH) {
  if(scrollPos > introH) {
    header.addClass("fixed");
  } else {
    header.removeClass("fixed");
  }
}

$("[data-scroll]").on("click", function(event) {
  event.preventDefault();

  let elementID = $(this).data('scroll');
  let elementOffset = $(elementID).offset().top;
  nav.removeClass("show");

  console.log(elementID)

  $("html, body").animate({
    scrollTop: elementOffset
  }, 700)
});

/* navToggle */

let nav = $("#nav");
let navToggle = $("#navToggle");

navToggle.on("click", function(event) {
  event.preventDefault();

  nav.toggleClass("show");

});


});


                  