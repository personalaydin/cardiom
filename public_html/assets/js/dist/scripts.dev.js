"use strict";

require("@babel/polyfill");

require("jquery");

require("bootstrap");

require("./include/auto-scroll-element-with-hash");

require("./include/scroll-to");

require("./include/container-offset");

require("./include/set-container-offset");

require("./include/calculate-viewport-height");

require("./include/form-validation-and-handle");

require("./include/full-height");

require("./include/magnific-popup");

require("./include/slick");

require("./include/shrink-header");

require("./include/megamenu");

require("./include/lightgallery");

require("./include/hamburger-menu");

require("./include/tab-menu");

require("./include/cookies-script");

require("./include/faq");

require("./include/cre-animate");

require("./include/uikit.js");

require("./include/uikit-icons.js");

//slider
//slider
function toggleIcon(e) {
  $(e.target).prev('.panel-heading').find(".more-less").toggleClass('glyphicon-plus glyphicon-minus');
}

$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collaps', toggleIcon);
$(function () {
  $('.scroll').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top - 140
    }, 500, 'linear');
  });
});
AOS.init({
  duration: 1200
});
$("#information_text").change(function () {
  if (this.checked) {
    $('#submit_contact_form_button').prop('disabled', false);
    $('#submit_contact_form_button').removeClass('button-light--disabled');
    $('#submit_contact_form_button').addClass('button-light--fill');
  }

  if (!this.checked) {
    $('#submit_contact_form_button').prop('disabled', true);
    $('#submit_contact_form_button').removeClass('button-light--fill');
    $('#submit_contact_form_button').addClass('button-light--disabled');
  }
});
$(document).ready(function () {
  var $lightbox = $('#lightbox');
  $('[data-target="#lightbox"]').on('click', function (event) {
    var $img = $(this).find('img'),
        src = $img.attr('src'),
        alt = $img.attr('alt'),
        css = {
      'maxWidth': $(window).width() - 100,
      'maxHeight': $(window).height() - 100
    };
    $lightbox.find('.close').addClass('hidden');
    $lightbox.find('img').attr('src', src);
    $lightbox.find('img').attr('alt', alt);
    $lightbox.find('img').css(css);
  });
  $lightbox.on('shown.bs.modal', function (e) {
    var $img = $lightbox.find('img');
    $lightbox.find('.modal-dialog').css({
      'width': $img.width()
    });
    $lightbox.find('.close').removeClass('hidden');
  });
  var pathname = window.location.pathname;
  var langStyleElements = document.getElementsByClassName("lang-style");

  for (var i = 0; i < langStyleElements.length; i++) {
    var lsElem = langStyleElements[i];
    var innerLsElem = $(lsElem).attr('href');

    if (pathname.includes(innerLsElem.toLowerCase())) {
      $(lsElem).addClass('lang_style_focused');
    } else {
      $(lsElem).removeClass('lang_style_focused');
    }
  }
});