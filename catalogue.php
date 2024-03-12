<!DOCTYPE html>
<html lang="zh-Hant" class="no-js">
<head>
    <meta charset="UTF-8" />
    <link rel="alternate" hreflang="x-default" href="index.php" />
    <link rel="alternate" hreflang="zh" href="index.php" />
    <link rel="alternate" hreflang="zh-TW" href="index.php" />
                
    <meta name="copyright" content="Auto Strong" />
    <title>Auto Strong</title>
    <link rel="stylesheet" href="js/slick/slick/slick.css">
    <?php include('include_head.php')?>
    <link rel="stylesheet" href="css/catalogue.css">
</head>
<body>
    <div class="wrapper wrapper-content">
        <?php include('include_header.php')?>
        <div class="banner">
            <div class="container">
                <div class="box">
                    <div class="text wow fadeInLeft" data-wow-delay="0s">
                        <h1 class="banner-title">CATALOGUE</h1>
                        <h2 class="banner-sub-title">QUICKLY LEARN ABOUT OUR PRODUCT INFORMATION</h2>
                    </div>
                </div>
            </div>
        </div>
       <section class="sect sect1">
            <button type="button" class="slick-arrow prev">Previous</button>
            <button type="button" class="slick-arrow next">Next</button>
            <div class="container">
                <ul class="catalogues-list list-v">
                    <?php for($i=0 ; $i<8 ;$i++){?>
                    <li class="item">
                       <div class="box">
                            <div class="pic">
                                <img src="images/catalogue/pic<?php echo $i%3+1?>.jpg" alt="">
                            </div>
                            <h2 class="name">English Version</h2>
                            <a href="#" class="cover" title="English Version" alt="English Version" target="_blank" download>English Version</a>
                        </div>
                    </li>
                    <?php }?>
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
                        <a itemprop="item" href="news.php">
                        <span itemprop="name">Media</span></a>
                        <meta itemprop="position" content="2">
                    </li>
                     <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="catalogue.php">
                        <span itemprop="name">Catalogue</span></a>
                        <meta itemprop="position" content="3">
                    </li>
                </ol>
            </div>
        </div>
        <?php include('include_footer.php')?>
    </div>
    <?php include('include_body_bottom.php')?>
    <script src="js/slick/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.catalogues-list').slick({
            dots: false,
            arrows: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            responsive: [
                {
                  breakpoint: 960,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                  }
                },
                {
                  breakpoint: 767,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                  }
                },
                {
                  breakpoint: 480,

                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                   }
            },
        ]
    });
        });
    </script>
  
</body>
</html>