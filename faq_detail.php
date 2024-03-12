<!DOCTYPE html>
<html lang="zh-Hant" class="no-js">
<head>
    <meta charset="UTF-8" />
    <link rel="alternate" hreflang="x-default" href="index.php" />
    <link rel="alternate" hreflang="zh" href="index.php" />
    <link rel="alternate" hreflang="zh-TW" href="index.php" />
                
    <meta name="copyright" content="Auto Strong" />
    <title>Auto Strong</title>
    <?php include('include_head.php')?>
    <link rel="stylesheet" href="css/solutions.css">
    <link rel="stylesheet" href="css/faq.css">
</head>
<body>
    <div class="wrapper wrapper-content detail-content">
        <?php include('include_header.php')?>
        <div class="banner">
            <div class="container">
                <div class="box">
                    <div class="text wow fadeInLeft" data-wow-delay="0s">
                        <h1 class="detail-title">Rred brand for customers in the replacemen</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="sect sect-detail">
            <div class="container">
                <div class="detail-box">
                    <div class="text-box">
                        <div class="text">
                           “2023 Taipei international Machine tool show”, you are cordially invited to visit our booth of AutoStong, it will be our honor to have your presence in this event. Let’s meet you there! 　<br><br>

                            <iframe src="https://www.youtube.com/embed/NlAsAuBtmps?si=oHQsYF6sD5LDpZil" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                     
                    </div>
                </div>
            </div>
        </section>
        <section class="sect sect-detail2">
            <div class="container">
                <h3 class="sub-title">RELATED PRODUCTS</h2>
                <ul class="solutions-list list-h">
                    <?php for($i=0 ; $i<6 ;$i++){?>
                    <li class="item">
                       <div class="box">
                            <div class="bg">
                                <h3 class="title">F52</h2>
                                <h2 class="name">Shiogaiseiki Vietnam Co.,Ltd.</h2>
                                <div class="pic">
                                    <img src="images/solutions/pic1.png" alt="">
                                </div>
                                <span class="tag">Learn more  >></span>
                                
                            </div>
                            <div class="description">High speed and light weight type strong finger chuck for aluminum wheel</div>
                            
                            <a href="products_detail.php" class="cover" title="Shiogaiseiki Vietnam Co.,Ltd." alt="Shiogaiseiki Vietnam Co.,Ltd.">Shiogaiseiki Vietnam Co.,Ltd.</a>
                        </div>
                    </li>
                    <?php }?>
                    <div class="btn-box">
                        <a href="javascript:history.back(-1);" class="btn back">BACK TO LIST</a>
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
                        <span itemprop="name">FAQ</span></a>
                        <meta itemprop="position" content="3">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="faq_list.php">
                        <span itemprop="name">Chuck FAQ and Installation</span></a>
                        <meta itemprop="position" content="4">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="faq_detail.php">
                        <span itemprop="name">Rred brand for customers in the replacemen</span></a>
                        <meta itemprop="position" content="5">
                    </li>


                </ol>
            </div>
        </div>
        <?php include('include_footer.php')?>
    </div>
    <?php include('include_body_bottom.php')?>
</body>
</html>