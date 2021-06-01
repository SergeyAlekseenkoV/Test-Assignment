$(document).ready(function () {
  $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');


    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
      $('.dropdown-submenu .show').removeClass("show");
    });


    return false;
  });


  $('[data-toggle="tooltip"]').tooltip();

  // button scrollTo-top
 
  $(window).scroll(function () {

    if ($(window).scrollTop() > 300) {

      $('.scrollup').addClass('d-block');

    } else {

      $('.scrollup').removeClass('d-block');
    }
  });

  $('.scrollup').click(function () {

    $("html, body").animate({ scrollTop: 0 }, 800);
    return false;
  });
});

// show gallery in news-description
$('#showPhotos').click(function(){
  $('#gallery').toggleClass('d-flex');
});

// document.getElementById('showPhotos').onclick = function() {
//   document.getElementById('gallery').classList.add('d-flex');
// }
// hide gallery in news-description
document.getElementById('hidePhotos').onclick = function() {
  document.getElementById('gallery').classList.remove('d-flex');
}