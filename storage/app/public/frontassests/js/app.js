// number count for stats, using jQuery animate

$('.counting').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 3000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  

});

// slider 
$('.owl-carousel').owlCarousel({
    loop:false,
    margin:45,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

//menu fixed on scroll
$(window).scroll(function () {
  var height = $(window).scrollTop();
  if (height >= 100) {
    $('header').addClass('fixed-menu');
  } else {
    $('header').removeClass('fixed-menu');
  }
});

// $(window).on('load', function () {
//   setTimeout(function () {
//     chat();
//   }, 2000);
// });
// function chat() {
//   window.__lc = window.__lc || {};
//   window.__lc.license = 9759495;
//   (function () {
//     var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
//     lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
//     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
//   })();
// }

// //Once time popup model
// $(document).ready(function () {
//   if (document.cookie.indexOf('visited=true') == -1) {
//     $('#myModal').modal('show');
//   }
//   $("#myModal .my-button").click(function () {
//     if (document.cookie.indexOf('visited=true') == -1) {
//       $('#myModal').modal('show');
//       var year = 1000 * 60 * 60 * 24 * 365;
//       var expires = new Date((new Date()).valueOf() + year);
//       document.cookie = "visited=true;expires=" + expires.toUTCString();
//     }
//   });
// });

// $(document).ready(function () {
//   $('.input-disabled-form input, .input-disabled-form textarea').on("cut copy paste", function (e) {
//     e.preventDefault();
//   });
// });
// //Wow Animation
// new WOW().init();
// /* ------------------ HEADER SMOOTH SCROLL -----------------*/
// $('nav ul li a[href*="#"]:not([href="#"]), #pricing, #services, #features').click(function () {
//   var target = $(this.hash);
//   $('html,body').stop().animate({
//     scrollTop: target.offset().top - 100
//   }, 'linear');
// });
// if (location.hash) {
//   var id = $(location.hash);
// }
// $(window).on('load', function () {
//   if (location.hash) {
//     $('html,body').animate({ scrollTop: id.offset().top - 100 }, 'linear')
//   };
// });
// // Active class
// $(".tabActive a").click(function () {
//   $(".tabActive a").removeClass("active");
//   $(this).addClass("active");
// });
// function removeQueryString(url) {
//   return url.split('?')[0]
// }
// [].forEach.call(document.querySelectorAll('.tabActive a'), function (elem) {
//   if (removeQueryString(elem.href) === removeQueryString(window.location.href)) {
//     elem.classList.add('active')
//   }
//   else {
//     elem.classList.remove('active')
//     var pageURL = window.location.href;
//     var lastURLSegment = pageURL.substr(pageURL.lastIndexOf('/') + 1);
//   }
// });
// //menu fixed on scroll
// $(window).scroll(function () {
//   var height = $(window).scrollTop();
//   if (height >= 40) {
//     $('header').addClass('fixed-menu');
//   } else {
//     $('header').removeClass('fixed-menu');
//   }
// });
// // 	Reset form data
// $(document).ready(function () {
//   if (window.history.replaceState) {
//     window.history.replaceState(null, null, window.location.href);
//   }
// });
// $(window).bind("resize", function () {
//   console.log($(this).width())
//   if ($(this).width() > 992) {
//     $(".footer-links .footer-title").removeAttr("data-bs-toggle");
//   } else {
//     $('.footer-links .footer-title').attr('data-bs-toggle', 'collapse');
//   }
// }).trigger('resize');
// /* ------------------ Scroll to top -----------------*/
// var btn = $('#button');
// $(window).scroll(function () {
//   if ($(window).scrollTop() > 300) {
//     btn.addClass('show');
//   } else {
//     btn.removeClass('show');
//   }
// });
// btn.on('click', function (e) {
//   e.preventDefault();
//   $('html, body').animate({ scrollTop: 0 }, '300');
// });
// /* ------------------ CLOSE MENU -----------------*/
// var button = document.getElementById('mobile-button');
// $('#mobile-button').on('click', toggleOnClass);
// function toggleOnClass(event) {
//   var toggleElementId = '#' + $(this).data('toggle'),
//     element = $(toggleElementId);
//   element.toggleClass('on');
// }
// // close hamburger menu after click a
// $('.navbar-nav li a').on("click", function () {
//   $('#mobile-button').click();
// });
// $(window).bind("resize", function () {
//   // console.log($(this).width())
//   if ($(this).width() >= 1199) {
//     $(".navbar-toggler").removeAttr("id");
//   } else {
//     $('.navbar-toggler').attr('id', 'mobile-button');
//   }
// }).trigger('resize');
// /* Download Terms Page Print*/
// $("body").on("click", ".print", function () {
//   printDiv('condition-block')
// });
// function printDiv(elementId) {
//   var a = document.getElementById('printing-css').value;
//   var b = document.getElementById(elementId).innerHTML;
//   window.frames["print_frame"].document.title = document.title;
//   window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
//   window.frames["print_frame"].window.focus();
//   window.frames["print_frame"].window.print();
// }
// /* Footer fixed in bottom */

// function footerAlign() {
//   $('header').css('height', 'auto');
//   var footerHeight = $('header').outerHeight();
//   $('.main-wrapper').css('padding-top', footerHeight);
//   $('header').css('height', footerHeight);
// }

// $(document).ready(function () {
//   footerAlign();
// });

// $(window).resize(function () {
//   footerAlign();
// });
