<div id="mobile-fixed">
	<ul>
		<li class="menu-btn">
        <span class="btn toggle-mmenu toggleBtn menu-btn__inner" data-toggletag="mmenu-open">
            <b class="menu-btn--bar1"></b>
            <b class="menu-btn--bar2"></b>
        </span>
    </li>
    <li class="search-btn">
      <a href="#mobile-search" class="toggleBtn" class="btn" type="button" id="searchOpen"></a>
    </li>
    <li class="language">
      <a href="javascript:void(0)" class="btn"></a>
      <?php include('include_language.php')?>
    </li>
     <li class="inquiry-btn"><a href="inquiry.php" title="詢價車" alt="詢價車">
        <!-- 當詢價車有商品才顯示 -->
        <span class="hitem"></span>
        <!-- !當詢價車有商品才顯示 -->
    </a></li>
	</ul>
</div>
<span class="btn toggle-mmenu-cover toggleBtn" data-toggletag="mmenu-open"></span>
<div id="mobile-menu">
	<div class="language-menu">
		<span class="btn toggle-mmenu-close toggleBtn" data-toggletag="mmenu-open"><i class="ic-m-close"></i></span>
	</div>
	<div class="main-menu">
		<?php include('include_menu.php')?>
    </div>
</div>
<div id="mobile-search">
    <div class="search-box">
        <label>
            <input type="text" name="" id="" class="form-control" placeholder="SEARCH" aria-placeholder="SEARCH">
            <a href="products_list.php" class="btn search" title="SEARCH" alt="SEARCH"></a>
        </label>
    </div>
</div>
<script src="js/WOW/dist/wow.min.js"></script>
<script defer src="js/jquery.scrollTo.min.js"></script>
<script src="js/basic.js"></script>
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js"
    type="text/javascript"></script>
<script>
SmoothScroll({
  animationTime: 800, // [ms]
  stepSize: 100, // [px]
  accelerationDelta: 50,  // 50
  accelerationMax: 3,   // 3
  touchpadSupport: false,
})
</script>
