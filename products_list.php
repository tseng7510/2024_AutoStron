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
  <link rel="stylesheet" href="css/products_list.css">
</head>

<body>
  <div class="wrapper wrapper-content">
    <?php include('include_header.php') ?>
    <div class="banner">
      <div class="container">
        <div class="box">
          <div class="text wow fadeInLeft" data-wow-delay="0s">
            <h3 class="banner-title">PRODUCTS</h3>
            <h1 class="banner-sub-title">Special Purpose Power Chucks</h1>
          </div>
          <div class="form-group">
            <label class="control-label">Products Category</label>
            <select name="" id="" class="form-control">
              <option value="">Special Purpose Power Chucks</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <section class="sect sect1">
      <div class="container">
        <div class="text-box wow fadeInUp" data-wow-delay="0s">
          <div class="tag">PATENT PRODUCT: <span class="point">XP687268</span></div>
          <h2 class="sub-title">FCD600 Ductile Iron</h2>
          <div class="text">
            High Hardness, Hard to deform, High tensile strength
          </div>
          <a href="products_list2.php" class="btn btn1">Learn more >></a>
          <div class="pic">
            <img src="images/products/imgs1.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="sect sect2">
      <div class="container">
        <ul class="solutions-list list-h">
          <?php for ($i = 0; $i < 6; $i++) { ?>
            <li class="item wow fadeIn" data-wow-delay="<?php echo $i % 6 / 10 + 0.1 ?>s">
              <div class="box">
                <div class="bg">
                  <h2 class="title">F52</h2>
                  <h3 class="name">High speed and light weight type strong finger chuck for aluminum wheel</h3>
                  <div class="no">PATENT PRODUCT: <span class="point">XP687268</span></div>
                  <div class="pic">
                    <img src="images/solutions/pic1.png" alt="">
                  </div>
                  <span class="tag">Learn more >></span>
                </div>
                <a href="products_list2.php" class="cover" title="Shiogaiseiki Vietnam Co.,Ltd." alt="Shiogaiseiki Vietnam Co.,Ltd.">Shiogaiseiki Vietnam Co.,Ltd.</a>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
    </section>
    <section class="sect sect3">
      <div class="container">
        <div class="text wow fadeInLeft" data-wow-delay="0s">
          The AUTO STRONG scroll chuck is widely used and own more than 50% of the domestic market share. scroll chuck is mainly used for fixing workpieces also it is usually composed of mechanical parts, such as threads, bearings, gears, etc. Scroll chuck doesn’t require the external power only need manual operation to clamp and release. The mainly used is to install on the CNC computer lathes, traditional lathes, grinding machines, milling machines, vertical lathes, and the fourth axis.
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
            <a itemprop="item" href="products.php">
              <span itemprop="name">Products</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="products_list.php">
              <span itemprop="name">Special Purpose Power Chucks</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ol>
      </div>
    </div>
    <?php include('include_footer.php') ?>
  </div>
  <?php include('include_body_bottom.php') ?>

</body>

</html>