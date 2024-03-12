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
</head>
<body>
    <div class="wrapper wrapper-content">
        <?php include('include_header.php')?>
        <div class="banner">
            <div class="container">
                <div class="box">
                    <div class="text wow fadeInLeft" data-wow-delay="0s">
                        <h1 class="banner-title">SOLUTIONS</h1>
                        <h2 class="banner-sub-title">SEARCH FOR RELATED PRODUCTS YOU NEED</h2>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Find by Products</label>
                        <select name="" id="" class="form-control">
                            <option value="">Special Purpose Power Chucks</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <section class="sect sect1">
            <div class="container">
                <ul class="solutions-list list-h">
                    <?php for($i=0 ; $i<6 ;$i++){?>
                    <li class="item wow fadeIn" data-wow-delay="<?php echo $i%6/10+0.1?>s">
                       <div class="box">
                            <div class="bg">
                                <h2 class="title">F52</h2>
                                <h3 class="name">Shiogaiseiki Vietnam Co.,Ltd.</h3>
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
                        <a itemprop="item" href="solutions.php">
                        <span itemprop="name">Solutions</span></a>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
            </div>
        </div>
        <?php include('include_footer.php')?>
    </div>
    <?php include('include_body_bottom.php')?>
</body>
</html>