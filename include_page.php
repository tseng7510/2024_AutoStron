<div class="btn-box">
    <ul class="pagination">
		<li><a href="faq.php" class="controls prev" title="上一頁"><i class="ic-angle-left"></i>上一頁</a></li>
		<li><a href="faq.php"> 1</a></li>
		<li><a href="faq.php"> 2</a></li>
		<li class="active"><a href="faq.php"> 3</a></li>
		<li><a href="faq.php"> 4</a></li>
		<li><a href="faq.php"> 5</a></li>
		<li><a href="faq.php" class="controls next" title="下一頁"><i class="ic-angle-right"></i>下一頁</a></li>
	</ul>
	<div class="page-info">
		<label for="page_s"></label>		
		<select class="form-control" name="page_s" id="page_s" onchange="changePage();">
			<option value="faq.php" selected=""> 第 1 頁 </option>
			<option value="faq.php"> 第 2 頁 </option>
			<option value="faq.php"> 第 3 頁 </option>
			<option value="faq.php"> 第 4 頁 </option>
			<option value="faq.php"> 第 5 頁 </option>
		</select>
	</div>
</div>
<script type="text/javascript">
    var showtype;
    $('.btn-box a').on('click',function(){
        showtype = location.hash;
        var href1 = $(this).attr('href').toString().split("#");
        var href = href1[0];
        $(this).attr('href',href+showtype);
    })
    function changePage() {
        showtype = location.hash;
        var page = $('#page_s :selected').val();
        location.href =  page + '' + showtype;//'?pg=' +
    }
</script>