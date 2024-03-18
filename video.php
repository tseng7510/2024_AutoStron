<!DOCTYPE html>
<html lang="zh-Hant" class="no-js">

<head>
  <meta charset="UTF-8" />
  <link rel="alternate" hreflang="x-default" href="index.php" />
  <link rel="alternate" hreflang="zh" href="index.php" />
  <link rel="alternate" hreflang="zh-TW" href="index.php" />

  <meta name="copyright" content="Auto Strong" />
  <title>Auto Strong</title>
  <?php include('include_head.php') ?>
  <script src="js/jquery.min.js"></script>

  <link rel="stylesheet" href="js/slick/slick/slick.css">
  <link rel="stylesheet" href="js/fancyBox/source/jquery.fancybox.css">
  <link rel="stylesheet" href="css/video.css">
</head>

<body>
  <div class="wrapper wrapper-content">
    <?php include('include_header.php') ?>
    <div class="banner">
      <iframe class="inline-video" src="https://www.youtube.com/embed/MzCfCNB98u4?mute=1&autoplay=1&playlist=MzCfCNB98u4&controls=0&modestbranding=1&playsinline=1&rel=0&loop=1" allowfullscreen></iframe>

      <div class="container">
        <div class="text">
          <div class="text_box">
            <h1 class="banner-title">VIDEO</h1>
            <h2 class="banner-sub-title">CHOOSE THE BEST MATERIAL FOR YOUR PRODUCTS</h2>
          </div>
          <a href="https://www.youtube.com/watch?v=xQ1YGzERv38" class="btn btn-play fancybox-media">PLAY NOW</a>
        </div>
      </div>
    </div>
    <section class="sect sect1">
      <div class="video-box">
        <?php for ($i = 0; $i < 6; $i++) { ?>
          <div class="item">
            <div class="box">
              <img src="images/video/pic<?php echo $i % 3 + 1 ?>.jpg" alt="">
              <a href="https://www.youtube.com/watch?v=xQ1YGzERv38" class="cover fancybox-media" data-fancybox-group="thumb" data-thumbnail="images/video/pic<?php echo $i % 3 + 1 ?>.jpg">Forming ring precision raw claw-Chinese</a>
            </div>
          </div>
        <?php } ?>
      </div>

    </section>

    <div class="breadcrumb-box">
      <div class="container">
        <ol class="breadcrumb list-inline" itemscope="" itemtype="https://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="index.php">
              <span itemprop="name">Home</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="news.php">
              <span itemprop="name">Media</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="video.php">
              <span itemprop="name">Video</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ol>
      </div>
    </div>
    <?php include('include_footer.php') ?>
  </div>
  <?php include('include_body_bottom.php') ?>
  <script src="js/slick/slick/slick.min.js"></script>
  <script src="js/fancyBox/source/jquery.fancybox.js"></script>
  <script type="text/javascript" src="js/fancyBox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

  <script>
    $(document).ready(function() {
      const width = ($(window).innerWidth() >= 1280) ? 1280 : $(window).innerWidth()
      const height = width * 0.5625
      $('.fancybox-media')
        .fancybox({
          margin: 50,
          padding: 0,
          width: width,
          height: height,
          maxWidth: '100%',
          maxHeight: '100%',
          openEffect: 'none',
          closeEffect: 'none',
          prevEffect: 'none',
          nextEffect: 'none',
          openEffect: 'none',
          autoSize: false,
          closeBtn: false,
          afterShow: function() {
            fancyParent = $(".fancybox-wrap").parents(); // normally html and body
            fancyParent.append('<a title="Close" class="fancybox-item fancybox-close" href="javascript:parent.jQuery.fancybox.close();"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.12,10l4.07-4.06a1.5,1.5,0,1,0-2.11-2.12L10,7.88,5.94,3.81A1.5,1.5,0,1,0,3.82,5.93L7.88,10,3.81,14.06a1.5,1.5,0,0,0,0,2.12,1.51,1.51,0,0,0,2.13,0L10,12.12l4.06,4.07a1.45,1.45,0,0,0,1.06.44,1.5,1.5,0,0,0,1.06-2.56Z"></path></svg></a>');

          },
          arrows: false,
          overlay: {
            css: {
              'background': '#ffffff'
            }
          },
          helpers: {
            media: {},
            buttons: {},
            overlay: {
              closeClick: false
            },
            // thumbs : {
            //     width  : 60,
            //     height : 34,
            //      source : function (current) {
            //         return $(current.element).data('thumbnail');
            //     },
            // }
          }
        });
      $('.video-box').slick({
        dots: false,
        arrows: false,
        slidesToShow: 3.6,
        slidesToScroll: 4,
        centerMode: true,
        // infinite: false,
        autoplay: true,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
        ]
      });
    });
  </script>
</body>

</html>