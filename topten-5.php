<?php require_once "./utility.php";?>
<!doctype html>
<html lang="zh-TW"  class="easy-sidebar-active">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

<title>2016台中禮好 台中市十大伴手禮</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>



</head>

<body>




<div class="td_repeat1">
<div class="moblie_logo"><img src="images/mobile_top_logo.png"  alt=""/></div>
<div class="go_index_btn"><a href="index.php">回首頁</a></div>
</div>

<div class="mobile_nav">

<div class="mnav_btn">
<div class="dropdown">
  <?php require_once './sign_dropbtn.php'; ?>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</div>



<div class="mnav_title">歷屆得獎介紹</div>
<div class="clear"></div>

</div>

<div class="main">
<div class="main_left">
  <?php $page_name='topten'; ?>
  <?php require_once './sign_main_left.php'; ?>
</div>





<div class="main_right">

<div class="r_ch">
歷屆得獎介紹





</div>
<div class="mr_white">
<div class="news_box_in">

<div class="p4_choose"><a href="topten.php">第7屆</a> | <a href="topten-2.php">第6屆</a> | <a href="topten-3.php">第5屆</a>  | <a href="topten-4.php">第4屆</a> | 第3屆 | <a href="topten-6.php">第2屆</a> | <a href="topten-7.php">第1屆</a> </div> 
<div class="p4_title">2011年 伴手禮首獎廠商</div>
<h4 align="center">【首獎廠商】</h4>
<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
  <tr style="color:#D97861">
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C"><b>店家名稱</b></td>
    <td width="50%"><b>產品名稱</b></td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C"  class="shop_url"><a href="http://chinghefeng.com.tw/html/about/about.aspx" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>佳旭企業股份有限公司</a></td>
    <td style="color:#4C4C4C">大甲乾麵</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C"  class="shop_url"><a href="http://www.laijia.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>萊嘉股份有限公司</a></td>
    <td style="color:#4C4C4C">陳年高粱酒</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C"  class="shop_url"><a href="http://www.paochuan.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>寶泉食品股份有限公司</a></td>
    <td style="color:#4C4C4C">露之菓</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C"  class="shop_url"><a href="http://www.yjs.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>裕珍馨食品股份有限公司</a></td>
    <td style="color:#4C4C4C">道卡斯Q餅</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C"  class="shop_url"><a href="http://www.sugar.com.tw/tw" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>糖村麵包店</a></td>
    <td style="color:#4C4C4C">法式太妃糖</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C"  class="shop_url"><a href="http://www.specialtreasure.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>寶才食品有限公司</a></td>
    <td style="color:#4C4C4C">鳳梨酥</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C"  class="shop_url"><a href="http://www.xlcookie.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>小林煎餅股份有限公司</a></td>
    <td style="color:#4C4C4C">彩繪煎餅</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C"  class="shop_url">意椅食品貿易有限公司</td>
    <td style="color:#4C4C4C">鱈魚海苔脆片</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C"  class="shop_url"><a href="http://www.ta-ming.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>大茗茶業有限公司</a></td>
    <td style="color:#4C4C4C">梨山茶</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C"  class="shop_url"><a href="http://www.mylemon.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>彩色寧波國際有限公司</a></td>
    <td style="color:#4C4C4C">杏鮑菇泡菜</td> 
  </tr>

 
</table>
<br/>
<br/>

<div class="p4_choose"><a href="topten.php">第7屆</a> | <a href="topten-2.php">第6屆</a> | <a href="topten-3.php">第5屆</a>  | <a href="topten-4.php">第4屆</a> | 第3屆 | <a href="topten-6.php">第2屆</a> | <a href="topten-7.php">第1屆</a> </div> 

<div align="center" style="margin:20px 0 0 0;"><a href="#" class="simple-back-to-top"><img src="images/gotop_btn.png"  alt=""/></a></div>
</div>
</div>
</div>
<div class="clear">v</div>
<div class="footer_text">
<div class="footer_text_mid">
<div class="footer_text_l">指導單位:台中市政府 <img src="images/tc_logo.png"  alt=""/></div>
<div class="footer_text_l">主辦單位: <img src="images/img_r2_c2.png"  alt=""/></div>
<div class="footer_text_l">承辦單位: <img src="images/cht_logo.png"  alt=""/></div>
<div class="clear"></div>
</div>
</div>
<div class="td_repeat3"><img src="images/footer_bg.png"  alt=""/></div>
</div>


<div class="footer_left"><img src="images/footer-left.png"  alt=""/></div>
<div class="footer_right"><img src="images/footer-right.png"  alt=""/></div>


<script type="text/javascript">
	$('body').prepend('<a href="#" class="back-to-top">Top</a>');
	var amountScrolled = 300;

$(window).scroll(function() {
	if ( $(window).scrollTop() > amountScrolled ) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
});

$('.mr_white').scroll(function() {
	if ( $('.mr_white').scrollTop() > amountScrolled ) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
});

$('a.back-to-top, a.simple-back-to-top').click(function() {
	$('html, body ,.mr_white').animate({
		scrollTop: 0
	}, 700);
	return false;
});
</script>

</body>
</html>
