//判斷是否為行動裝置
var isMobile = false;
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
	|| /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;

//判斷手機板選單出現的寬度加上.mmenu-show
function mobileMenuInit(maxwWidth) {
	$('#mobile-menu .menu li.active > ul').show();
	$(window).on('resize', function() {
		if (Modernizr.mq('(max-width: '+ maxwWidth +'px)')) {
			$('body').addClass('mmenu-show');
		} else {
			$('body').removeClass('mmenu-show');
		}
	}).resize();
	clickOtherDoSth('#member-box', function() {
		$('#member-box').removeClass('active');
	});
	clickOtherDoSth('#language-box', function() {
		$('#language-box').removeClass('active');
	});
	clickOtherDoSth('#mobile-search', function() {
		$('#mobile-search').removeClass('active');
	});
	clickOtherDoSth('#mobile-search', function() {
		$('#gocart').removeClass('active');
	});
}
//手機板選單下 body沒反應，使之不影響seo
$('a[href^=body]').attr("href", "javascript: void(0)");
$('.toggle-mmenu').click(function(event) {

	$('body').addClass('mmenu-open');
});
$('.toggle-mmenu-cover').click(function(event) {

	$('body').toggleClass('mmenu-open'); 
});
$('.toggle-mmenu-close').click(function(event) {

	$('body').toggleClass('mmenu-open'); 
});
//選單開合功能
function menuInit() {
	$(".menu li").has("ul").addClass("has-child").append('<span class="toggle-submenu"></span>');
	//,menu的li有加上.hover-on才會有hover效果
	$('.menu li.has-child.hover-on').hover(function() {
		if(!isMobile && $('.toggle-mmenu').is(':hidden')) {
			$(this).addClass('active hover');
			$(this).children('ul').stop().slideDown('fast');
		}
	},function() {
		if(!isMobile && $('.toggle-mmenu').is(':hidden')) {
			$(this).removeClass('active hover');
			$(this).children('ul').stop().slideUp('fast');
			$('.menu .full_menu ul').hide();//滿版選單 滑走隱藏
			$('.menu .full_menu li').removeClass('active hover');//滿版選單 滑走隱藏
		}
	});

	//PC版.menu有加上.dropdown-menu才有點擊展次選單
	$('.menu li.has-child > a').click(function() {
		if ($(this).parents('.menu').hasClass('dropdown-menu')) {
			if ($(this).parent().hasClass('hover-on')) {
			   if (isMobile || $('.toggle-mmenu').is(':visible')) {
					$(this).siblings('.toggle-submenu').trigger('click');
					return false;
				}
			} else {
				$(this).siblings('.toggle-submenu').trigger('click');
				return false;
			}
		} else {
			if ($('.toggle-mmenu').is(':visible')) {
				$(this).siblings('.toggle-submenu').trigger('click');
				return false;
			}
		}
	});
	$('.toggle-submenu').click(function() {
		$(this).siblings('ul').stop().slideToggle();
		$(this).parent().toggleClass('active');
		$('.menu li').not($(this).parents('li')).removeClass('active');
		$('.menu li ul').not($(this).parents('li').children('ul')).stop().slideUp();
		return false;
	});
	


	clickOtherDoSth('.site-header .menu', function() {
		$('.site-header .menu ul').stop().slideUp('fast');
		$('.menu li').removeClass('active');
	});
	
	 $('.full_menu li').hover(function() {
	 	if(!isMobile && $('.toggle-mmenu').is(':hidden')) {
		 	$(this).children('ul').css({
		 		top: $(this).parent('ul').innerHeight()- 20 +'px',
		 	});
	 	 }
	 	 else{
	 	 	$(this).children('ul').css({
		 		top: 'auto',
		 	});
	 	 }
	 });
	
}
//選單開合功能2(關閉hover)
function menuInit2() {
	$(".menu li").has("ul").addClass("has-child").append('<span class="toggle-submenu"></span>');
	$('.menu .full_menu ul').hide();
	$('.full_menu li').hover(function() {
	 	$(this).children('ul').css({
	 		top: $(this).parent('ul').innerHeight()+'px',
	 	});
	 });
	//PC版.menu有加上.dropdown-menu才有點擊展次選單
	$('.menu li.has-child > a').click(function() {
		$(this).siblings('.toggle-submenu').trigger('click');
		return false;
	});
	$('.toggle-submenu').click(function() {
		$(this).siblings('ul').stop().slideToggle();
		$(this).parent().toggleClass('active');
		$('.menu li').not($(this).parents('li')).removeClass('active');
		$('.menu >li >ul').not($(this).parents('li').children('ul')).stop().slideUp();
		return false;
	});



	clickOtherDoSth('.site-header .menu', function() {
		$('.site-header .menu ul').stop().slideUp('fast');
	});
	$('.full_menu li').hover(function() {
	 	if(!isMobile && $('.toggle-mmenu').is(':hidden')) {
		 	$(this).children('ul').css({
		 		top: $(this).parent('ul').innerHeight()- 20 +'px',
		 	});
	 	 }
	 	 else{
	 	 	$(this).children('ul').css({
		 		top: 'auto',
		 	});
	 	 }
	 });
}


function toggleBtnInit() {
	//切換目標class的按鈕
	$('.toggleBtn').on('click', function() {
		var t = $(this).attr('href');
		if ($(this).hasClass('toggle-mmenu')) {
			$('#mobile-search').removeClass('active');
			$('#member-box').removeClass('active');
			$('#language-box').removeClass('active');
		}
		if (t == '#member-box') {
			$('#mobile-search').removeClass('active');
			$('#language-box').removeClass('active');
		} else if (t == '#mobile-search') {
			$('#member-box').removeClass('active');
			$('#language-box').removeClass('active');
		} else if (t == '#language-box') {
			$('#member-box').removeClass('active');
			$('#mobile-search').removeClass('active');
		}

		if ($(this).data('toggletag')) {
			var toggleTag = $(this).data('toggletag');
		} else {
			var toggleTag = 'active';
		}

		$(t).toggleClass(toggleTag);
		return false;
	});
}

//側選單開合
function sideNavInit() {
	$(".side-nav li").has("ul").addClass("has-child");
	$(".side-nav li.active").children("ul").show();
	$(".side-nav li.active2").children("ul").show();
	$(".side-nav a").click(function(e){
		if ($(this).siblings().length > 0) {
			e.preventDefault();
			$(this).siblings("ul").slideToggle();
			$(this).parent('li').toggleClass("active");
			if($('.toggle-mmenu').is(':visible')) {
				$('.side-nav li').not($(this).parents('li')).removeClass('active');
				$('.side-nav li ul').not($(this).parents('li').children('ul')).stop().slideUp();
			}
		}
	});
}
//語言選單開合
function languageMenuInit(elem) {
	$(elem).on('click', '.btn', function() {
		$(this).siblings('ul').stop().slideToggle('fast');
		$(this).toggleClass('active');
		return false;
	});
	clickOtherDoSth(elem, function(){
		$(elem + ' ul').stop().slideUp('fast');
		$(elem).children('.btn').removeClass('active');

	});
}
//點到除了指定elem之外的東西就執行func裡面做的事情
function clickOtherDoSth(elem, callback) {
	$(document).on('click', function(e){
		if($(e.target).parents(elem).length==0){
			(callback && typeof(callback) === "function") && callback();
		}
	});
}



$(document).ready(function () {
	$('iframe[src*="youtube.com"]').each(function() {
		$(this).wrap('<div class="youtubecontent" />');
		var iframeWidth =$( this ).attr('width');
		$(this).parent('div[class="youtubecontent"]').wrap('<div class="youtubecontent_box" style="width:' + iframeWidth +';max-width:' + iframeWidth + 'px"/>');
	});
});


// 錨點
function goTo(element, speed) {
	var href = element.attr('href');
	var top = $(href).offset().top-$('.site-header').height();
	$("html,body").animate({scrollTop:top}, speed);

}

$(".bar a").click(function(e) {
	 var href = $(this).attr('href').charAt(0);
	
	if(href=='#'){	
		e.preventDefault();
		goTo($(this), 400);
	}

});

