$(document).ready(function () {
  //手機板選單功能，數字為手機板選單要出現的寬度
  mobileMenuInit(1024);
  //上方主選單.menu的功能
  menuInit();
  //按鈕切換class功能
  toggleBtnInit();
  sideNavInit();
  languageMenuInit('.site-header .language');
  languageMenuInit('#mobile-fixed .language');
  new WOW().init();
});
$('.search-box .form-control').on('keypress', function (e) {
  if (e.which == 13) {
    location.href = `products_list.php?search=${$(this).val()}`;
  }
});

$(window)
  .on('scroll', function () {
    //捲動超過header時，body會加上 header-fixed
    if ($(this).scrollTop() > $('.site-header').height()) {
      $('body').addClass('header-fixed');
    } else {
      $('body').removeClass('header-fixed');
    }
  })
  .scroll();

(function () {
  // 搜尋功能
  $('.menuSearch .btn').on('click', function () {
    $('.menuSearch').siblings('.active').find('ul').slideToggle('fast');
    $('.menuSearch').siblings('.active').removeClass('active');
    $('.menuSearch').toggleClass('active');
    $('body').removeClass('mobileOpen');
    $(this).parent().parent().siblings('.active').find('ul').slideToggle('fast');
    $(this).parent().parent().siblings('.active').removeClass('active');
    $('.language').removeClass('active');
    $('.language ul').slideUp('fast');
  });
  $('.menuSearch .searchClose').on('click', function () {
    $('.menuSearch').removeClass('active');
  });
  $(window).on('load resize', function () {
    $('.menuSearch').removeClass('active');
  });

  // cookie
  function parseCookie() {
    var cookieObj = {};
    var cookieAry = document.cookie.split(';');
    var cookie;

    for (var i = 0, l = cookieAry.length; i < l; ++i) {
      cookie = jQuery.trim(cookieAry[i]);
      cookie = cookie.split('=');
      cookieObj[cookie[0]] = cookie[1];
    }

    return cookieObj;
  }

  function getCookieByName(name) {
    var value = parseCookie()[name];
    if (value) {
      value = decodeURIComponent(value);
    }

    return value;
  }
  getCookieByName('privacy') === undefined ? (document.cookie = 'privacy=false; max-age=2592000; path=/') : null;

  if (getCookieByName('privacy') === 'false') {
    $('.closePrivacy').on('click', function () {
      $('.header-sheet').slideUp(400, function () {
        document.cookie = 'privacy=true; max-age=2592000; path=/';
        $(this).remove();
      });
    });
  } else {
    $('.header-sheet').remove();
  }
})();
