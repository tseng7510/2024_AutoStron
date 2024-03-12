<div class="header-sheet">
  <div class="container">
    <div class="content-text">This site uses cookies to improve your browsing experience. we'll assume you're OK to continue. If you want to read more about this, please chick <a target="_blank" rel="nofollow noopener noreferrer" href="disclaimer.php">PRIVACY</a> thank you.</div>
    <button type="button" class="closePrivacy">Confirm</button>
  </div>
</div>

<header class="site-header">
  <div class="container">
    <div class="site-title">
      <a href="./" class="logo ibtn">OPT</a>
    </div>
    <div class="header-right">
      <nav class="site-nav" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
        <?php include('include_menu.php') ?>
      </nav>
      <div class="top-nav">

        <div class="menuSearch">
          <button class="btn" type="button">Search</button>
          <div class="searchOuter">
            <div class="searchBox">
              <input type="text" class="form-control" name="search" placeholder="Search">
            </div>
            <button class="searchBtn" type="submit" onclick="javascript:location.href='products_search.php'"></button>
          </div>
        </div>
        <ul class="func-menu list-inline">
          <li><a href="inquiry.php">Inquiry</a></li>
          <!-- js/main.js 輸入enter後 跳轉location.href=`products_list.php?search=${$(this).val()}`; -->
          <!-- <div class="search-box">
            <input type="text" name="" id="" class="form-control" placeholder="Search" aria-placeholder="Search">
          </div> -->
        </ul>
        <div class="language">
          <a href="javascript:void(0)" class="btn"></a>
          <?php include('include_language.php') ?>
        </div>
      </div>

    </div>

  </div>
</header>