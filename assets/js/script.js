
$(document).ready(function () {
  // MATERIALIZE INIT
  $('.parallax').parallax();
  $('.carousel').carousel({
    numVisible: 3,
    dist: -5,
    shift: 30
  });

  // SLIDER INIT
  setInterval(autoplay, 4500);
  setInterval(autoplayBlog, 6500);
  setInterval(autoplayDepo, 6500);
  setInterval(autoplayParceiros, 3000);

  ///////////////////////////////////// SIDENAV

  $menuLeft = $('.pushmenu-left');
  $nav_list = $('#sidebartoggle');

  $nav_list.click(function () {
    $(this).toggleClass('active');
    $('.pushmenu-push').toggleClass('pushmenu-push-toright');
    $menuLeft.toggleClass('pushmenu-open');

    if ($(this).hasClass('active')) {
      $('#sidebartoggle').html('<i class="material-icons">close</i>');
    } else {

      $('#sidebartoggle').html('<i class="material-icons">menu</i>');
    }
  });

  $(".pushmenu > a").click(function () {
    $nav_list.toggleClass('active');
    $('.pushmenu-push').toggleClass('pushmenu-push-toright');
    $menuLeft.toggleClass('pushmenu-open');

    if ($(this).hasClass('active')) {
      $('#sidebartoggle').html('<i class="material-icons">close</i>');
    } else {

      $('#sidebartoggle').html('<i class="material-icons">menu</i>');
    }

  })




})


///////////////////////////////////// CAROUSEL MARCAS
// $('#prev').on('click', function () {
//   var last = $('.logo').last().css({ opacity: '0', width: '0px' });
//   last.prependTo('.showrooms');
//   last.animate({ opacity: '1', width: '108px' });
// });
// $('#next').on('click', function () {
//   var first = $('.logo').first();
//   first.animate({ opacity: '0', width: '0px' }, function () {
//     first.appendTo('.showrooms').css({ opacity: '1', width: '108px' });
//   });
// });

function autoplayParceiros() {

  var first = $('.logo').first();
  first.animate({ opacity: '0', width: '0px' }, function () {
    first.appendTo('.showrooms').css({ opacity: '1', width: '108px' });
  });
}






//////////////////////////// SLIDER BLOG CONTROLS E AUTOINIT
// move next carousel
$('.carousel_right').click(function (e) {
  e.preventDefault();
  e.stopPropagation();
  $('#carouselBlog').carousel('next');
});

// move prev carousel
$('.carousel_left').click(function (e) {
  e.preventDefault();
  e.stopPropagation();
  $('#carouselBlog').carousel('prev');
});

function autoplayBlog() {
  $('#carouselBlog').carousel('next');
}




//////////////////////////// SLIDER DESTAQUES CONTROLS E AUTOINIT

// start carrousel
$('#carouselDestaque').carousel({
  fullWidth: true,
  indicators: false,
  interval: 600
});
// move next carousel
$('.moveNextCarousel').click(function (e) {
  e.preventDefault();
  e.stopPropagation();
  $('#carouselDestaque').carousel('next');
});

// move prev carousel
$('.movePrevCarousel').click(function (e) {
  e.preventDefault();
  e.stopPropagation();
  $('#carouselDestaque').carousel('prev');
});

function autoplay() {
  $('#carouselDestaque').carousel('next');
}



//////////////////////////// SLIDER DEPOIMENTOS AUTOINIT

// start carrousel
$('#carouselDepo').carousel(
  {
    dist: 0,
    padding: 0,
    fullWidth: false,
    indicators: true,
    duration: 100,
  }
);
function autoplayDepo() {
  $('#carouselDepo').carousel('next');
}