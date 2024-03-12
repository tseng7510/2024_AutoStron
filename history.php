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

  <link rel="stylesheet" href="css/history.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
  <div class="wrapper wrapper-content">
    <?php include('include_header.php') ?>
    <div class="banner">
      <div class="container">
        <div class="box">
          <div class="text">
            <h1 class="banner-title">HISTORY</h1>
          </div>
        </div>
      </div>
    </div>
    <section id="road-map" class="sect sect-timeline">
      <div class="timeline__sticky">
        <div class="container">

          <div class="timeLine">
            <div class="swiper" data-swiper="reviews">
              <div class="swiper-wrapper">
                <div class="swiper-slide slide--reviews-numb">
                  <div class="year">2013</div>
                </div>
                <div class="swiper-slide slide--reviews-numb">
                  <div class="year">2012</div>
                </div>
                <div class="swiper-slide slide--reviews-numb">
                  <div class="year">2011</div>
                </div>
              </div>
            </div>
          </div>

          <div class="timeline__lines-wrap">
            <div class="lines lines-timeline">
              <div class="lines-inside timeline1"></div>
              <div class="lines-inside timeline2"></div>
            </div>
          </div>


          <div data-swiper="reviews2" class="swiper swiper--reviews">
            <div class="swiper-wrapper">
              <div class="swiper-slide slide--reviews">
                <div class="layout-grid grid timeline2">
                  <div class="timeline_col pic">
                    <img src="images/history/ic.png" alt="">
                  </div>
                  <div class="timeline_col text-box">
                    <div class="text">
                      2013 Researched and developed: PB-ES600-275 pneumatic power chucks and MR250 Non through-hole compact rotary hydraulic cylinders.
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide slide--reviews">
                <div class="layout-grid grid timeline2">
                  <div class="timeline_col pic">
                    <img src="images/history/ic.png" alt="">
                  </div>
                  <div class="timeline_col text-box">
                    <div class="text">
                      2012 Researched and developed: PB-ES600-275 pneumatic power chucks and MR250 Non through-hole compact rotary hydraulic cylinders.
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide slide--reviews">
                <div class="layout-grid grid timeline2">
                  <div class="timeline_col pic">
                    <img src="images/history/ic.png" alt="">
                  </div>
                  <div class="timeline_col text-box">
                    <div class="text">
                      2011 Researched and developed: PB-ES600-275 pneumatic power chucks and MR250 Non through-hole compact rotary hydraulic cylinders.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
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
            <a itemprop="item" href="faq.php">
              <span itemprop="name">Support</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="faq.php">
              <span itemprop="name">History</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ol>
      </div>
    </div>
    <?php include('include_footer.php') ?>
  </div>
  <?php include('include_body_bottom.php') ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script>
    $(function() {
      var swiper = new Swiper("[data-swiper=reviews]", {
        slidesPerView: 1,
        speed: 1000,
        spaceBetween: 30,
        allowTouchMove: true,
        breakpoints: {
          1001: {
            spaceBetween: 200,
            allowTouchMove: false,
          },
        }
      });
      var swiper2 = new Swiper('[data-swiper=reviews2]', {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 800,
        direction: "vertical",
        allowTouchMove: true,
        breakpoints: {
          1001: {
            allowTouchMove: false,
          },
        }
      });
      swiper2.slideTo(2, 0);

      $(window).on("load resize", function() {
        if (window.innerWidth <= 1000) {
          swiper.slideTo(0, 0);
          swiper2.slideTo(0, 0);
          swiper.controller.control = swiper2;
          swiper2.controller.control = swiper;
        } else {
          swiper.controller.control = null;
          swiper2.controller.control = null;
        }
      })

      $(window).scroll(function() {
        if (window.innerWidth >= 1000) {
          let offset = $(".sect-timeline")[0].getBoundingClientRect();
          if (offset.top < 0 && offset.bottom - window.innerHeight > 0) {
            let perc = Math.round(100 * Math.abs(offset.top) / (offset.height - $(window).height()));

            if (perc > 10 && perc < 30) {
              swiper.slideTo(0, 1000);
              swiper2.slideTo(2, 1000);
            } else if (perc > 30 && perc < 55) {
              swiper.slideTo(1, 1000);
              swiper2.slideTo(1, 1000);

            } else if (perc > 70) {
              swiper.slideTo(2, 1000);
              swiper2.slideTo(0, 1000);

            }
          }
        }
      });
    });
  </script>

</body>

</html>