//show password bootstrap plugin

/**
 * @author zhixin wen <wenzhixin2010@gmail.com>
 * https://github.com/wenzhixin/bootstrap-show-password
 * version: 1.2.1
 */

let bootstrapVersion = 4
try {
  const rawVersion = $.fn.dropdown.Constructor.VERSION

  // Only try to parse VERSION if is is defined.
  // It is undefined in older versions of Bootstrap (tested with 3.1.1).
  if (rawVersion !== undefined) {
    bootstrapVersion = parseInt(rawVersion, 10)
  }
} catch (e) {
  // ignore
}

const Constants = {
  html: {
    inputGroups: {
      3: [
        '<span tabindex="100" class="add-on input-group-addon %s" title="%s">',
        '</span>'
      ],
      4: [
        '<div class="%s"><button tabindex="100" title="%s" class="btn btn-outline-secondary" type="button">',
        '</button></div>'
      ]
    }[bootstrapVersion]
  }
}

// TOOLS DEFINITION
// ======================

// it only does '%s', and return '' when arguments are undefined
const sprintf = function (str) {
  const args = arguments
  let flag = true
  let i = 1

  str = str.replace(/%s/g, () => {
    const arg = args[i++]

    if (typeof arg === 'undefined') {
      flag = false
      return ''
    }
    return arg
  })
  if (flag) {
    return str
  }
  return ''
}

class Password {
  constructor(element, options) {
    this.options = options
    this.$element = $(element)
    this.isShown = false

    this.init()
  }

  init() {
    let placementFuc
    let inputClass

    if (this.options.placement === 'before') {
      placementFuc = 'insertBefore'
      inputClass = 'input-group-prepend'
    } else {
      this.options.placement = 'after' // default to after
      placementFuc = 'insertAfter'
      inputClass = 'input-group-append'
    }

    // Create the text, icon and assign
    this.$element.wrap(`<div class="input-group${sprintf(' input-group-%s', this.options.size)}" />`)

    this.$text = $('<input type="text" />')[placementFuc](this.$element)
      .attr('class', this.$element.attr('class'))
      .attr('style', this.$element.attr('style'))
      .attr('placeholder', this.$element.attr('placeholder'))
      .attr('maxlength', this.$element.attr('maxlength'))
      .attr('disabled', this.$element.attr('disabled'))
      .css('display', this.$element.css('display'))
      .val(this.$element.val()).hide()

    // Copy readonly attribute if it's set
    if (this.$element.prop('readonly'))
      this.$text.prop('readonly', true)
    this.$icon = $([
      `${sprintf(Constants.html.inputGroups[0], inputClass, this.options.message)}
       <i class="icon-eye-open ${this.options.eyeClass} ${this.options.eyeClassPositionInside ? '' : this.options.eyeOpenClass}">
       ${this.options.eyeClassPositionInside ? this.options.eyeOpenClass : ''}
       </i>`,
      Constants.html.inputGroups[1]
    ].join(''))[placementFuc](this.$text).css('cursor', 'pointer')

    // events
    this.$text.off('keyup').on('keyup', $.proxy(function () {
      if (!this.isShown) return
      this.$element.val(this.$text.val()).trigger('change')
    }, this))

    this.$icon.off('click').on('click', $.proxy(function () {
      this.$text.val(this.$element.val()).trigger('change')
      this.toggle()
    }, this))
  }

  toggle(_relatedTarget) {
    this[!this.isShown ? 'show' : 'hide'](_relatedTarget)
  }

  show(_relatedTarget) {
    const e = $.Event('show.bs.password', { relatedTarget: _relatedTarget })
    this.$element.trigger(e)

    this.isShown = true
    this.$element.hide()
    this.$text.show()
    if (this.options.eyeClassPositionInside) {
      this.$icon.find('i,svg')
        .removeClass('icon-eye-open')
        .addClass('icon-eye-close')
        .html(this.options.eyeCloseClass)
    } else {
      this.$icon.find('i,svg')
        .removeClass(`icon-eye-open ${this.options.eyeOpenClass}`)
        .addClass(`icon-eye-close ${this.options.eyeCloseClass}`)
    }

    this.$text[this.options.placement](this.$element)
  }

  hide(_relatedTarget) {
    const e = $.Event('hide.bs.password', { relatedTarget: _relatedTarget })
    this.$element.trigger(e)

    this.isShown = false
    this.$element.show()
    this.$text.hide()
    if (this.options.eyeClassPositionInside) {
      this.$icon.find('i,svg')
        .removeClass('icon-eye-close')
        .addClass('icon-eye-open')
        .html(this.options.eyeOpenClass)
    } else {
      this.$icon.find('i,svg')
        .removeClass(`icon-eye-close ${this.options.eyeCloseClass}`)
        .addClass(`icon-eye-open ${this.options.eyeOpenClass}`)
    }

    this.$element[this.options.placement](this.$text)
  }

  val(value) {
    if (typeof value === 'undefined') {
      return this.$element.val()
    }
    this.$element.val(value).trigger('change')
    this.$text.val(value)

  }

  focus() {
    this.$element.focus()
  }
}

Password.DEFAULTS = {
  placement: 'after', // 'before' or 'after'
  message: 'Click here to show/hide password',
  size: undefined, // '', 'sm', 'large'
  eyeClass: 'fa', // 'glyphicon',
  eyeOpenClass: 'fa-eye', // 'glyphicon-eye-open',
  eyeCloseClass: 'fa-eye-slash', // 'glyphicon-eye-close',
  eyeClassPositionInside: false
}

// PASSWORD PLUGIN DEFINITION
// =======================

const old = $.fn.password

$.fn.password = function () {
  const option = arguments[0] // public function
  const args = arguments
  let value

  const allowedMethods = [
    'show', 'hide', 'toggle', 'val', 'focus'
  ]

  this.each(function () {
    const $this = $(this)
    let data = $this.data('bs.password')
    const options = $.extend({}, Password.DEFAULTS, $this.data(), typeof option === 'object' && option)

    if (typeof option === 'string') {
      if ($.inArray(option, allowedMethods) < 0) {
        throw new Error(`Unknown method: ${option}`)
      }
      value = data[option](args[1])
    } else {
      if (!data) {
        data = new Password($this, options)
        $this.data('bs.password', data)
      } else {
        data.init(options)
      }
    }
  })

  return value ? value : this
}

$.fn.password.Constructor = Password

// PASSWORD NO CONFLICT
// =================

$.fn.password.noConflict = function () {
  $.fn.password = old
  return this
}

$(() => {
  $('[data-toggle="password"]').password()
})

//  end show password ==========================================
/* ====== animation effects onload ======= */
window.addEventListener('DOMContentLoaded', () => {
  let leftElement = document.querySelectorAll('.leftAnimation'),
    rightElement = document.querySelectorAll('.rightAnimation'),
    fadeInElement = document.querySelectorAll('.fadeInAnimation');
  const transformPositionX = 'transform: translate(0)',
    transformFilter = 'filter: opacity(1)';

  if (window.screen.width >= 768) {
    leftElement.forEach(elem => elem.style.cssText = `${transformPositionX};${transformFilter}`);
    rightElement.forEach(elem => elem.style.cssText = `${transformPositionX};${transformFilter}`);
    fadeInElement.forEach(elem => elem.style.cssText = `${transformFilter}`);
  } else {
    leftElement.forEach(elem => elem.classList.remove('leftAnimation'));
    rightElement.forEach(elem => elem.classList.remove('rightAnimation'));
    fadeInElement.forEach(elem => elem.classList.remove('fadeInAnimation'));
  }
});

// ================================================ //

// wow js animation
//also at the window load event
// $(window).on('load', function(){
//      new WOW().init(); 
// // });
/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset;
window.addEventListener('scroll', () => {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector('#navbarUp').style.top = "0";
  } else {
    document.querySelector('#navbarUp').style.top = "-80px";
  }
  prevScrollpos = currentScrollPos;
});
// ================================================

/* modes detecting for changing favicon icon */
$(document).ready(function () {
  if (!window.matchMedia)
    return;

  var current = $('head > link[rel="icon"][media]');
  $.each(current, function (i, icon) {
    var match = window.matchMedia(icon.media);
    function swap() {
      if (match.matches) {
        current.remove();
        current = $(icon).appendTo('head');
      }
    }
    match.addEventListener('change', swap);
    swap();
  });
});

// end menu-up 
/* jquery for dropdown menues
================================================ */

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


  /* tooltips 
  ================================================ */
  $('[data-toggle="tooltip"]').tooltip({
    trigger: 'hover'
  })


  /* remove default tooltip from the bootstrap append icon  
  ================================================*/
  $but = $(".form-group .input-group-append .btn-outline-secondary");
  $but.mouseover(function (e) {
    e.preventDefault();
    $(this).removeAttr('title');
  });

  /* button scroll-to-top
  ================================================ */

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


  /* show gallery in news-description 
  ================================================*/

  $('#showPhotos').click(function () {
    $('#gallery').toggleClass('d-flex');
  });

  $('#hidePhotos').click(function () {
    $('#gallery').removeClass('d-flex');
  });
});
/* triggering links with the jquery allnews page 
================================================ */
$(document).ready(function () {
  $(".card_link").click(function () {
    window.location = $(this).find(".read_more").attr("href");
    return false;
  });

  // attension message
  // ================================================


  $("input").focus(function () {
    $("#attention").addClass("d-block");
  });

  /* select in propositions page
  ===============================================*/

  $("#propDirection").change(function () {
    //     $("#" + $(this).val()).addClass("d-block");
    if (this.value == 'anotherChoice') {
      $("#anotherChoice").show();
    } else {
      $("#anotherChoice").hide();
    }
  });

  $("#sendingForm").submit(function (event) {
    $(this).addClass("d-none");
    $("#successSent").addClass("d-flex");
    event.preventDefault();
  });
});