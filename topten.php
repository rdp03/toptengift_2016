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

<div class="p4_choose">第7屆 | <a href="topten-2.php">第6屆</a> | <a href="topten-3.php">第5屆</a> | <a href="topten-4.php">第4屆</a> | <a href="topten-5.php">第3屆</a> | <a href="topten-6.php">第2屆</a> | <a href="topten-7.php">第1屆</a> </div> 
<div class="p4_title">2015年 伴手禮首獎廠商</div>
<h4 align="center">【最佳網路人氣獎】</h4>

<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
  <tr style="color:#D97861">
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C"><b>店家名稱</b></td>
    <td width="50%"><b>產品名稱</b></td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://www.rakuten.com.tw/shop/mazu/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>大甲媽祖文創館</a></td>
    <td style="color:#4C4C4C">大甲媽平安香灰衣</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://joyjoygolden.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>久久津乳酪菓子手造所</a></td>
    <td style="color:#4C4C4C">開運布丁燒</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://www.mooncheese.com.tw/mooncheese/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>月亮奇司</a></td>
    <td style="color:#4C4C4C">弦月奶酪</td> 
  </tr>
 
</table>
<br/><br/>
<h4 align="center">【評審團大獎】</h4>
<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
  <tr style="color:#D97861">
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C"><b>店家名稱</b></td>
    <td width="50%"><b>產品名稱</b></td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="https://www.facebook.com/HakkaIndigo/" target="_blank"><img src="images/fb-vector-logo.png"  alt=""/>太平藍TAIPING BLUE</a> </td>
    <td style="color:#4C4C4C">藍染餐墊組</td> 
  </tr>
</table>

<h4 align="center">【金口碑獎】</h4>
<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
  <tr style="color:#D97861">
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C"><b>店家名稱</b></td>
    <td width="50%"><b>產品名稱</b></td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C"  class="shop_url"><a href="http://wein.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>印月創意東方宴</a> </td>
    <td style="color:#4C4C4C">冰岩菓燒</td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C"  class="shop_url"><a href="http://www.mylemon.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>彩色寧菠國際有限公司-寧波風味小館</a> </td>
    <td style="color:#4C4C4C">魔法系列泡菜禮盒：翠玉筍元氣泡菜、金針菇元氣泡菜、杏鮑菇元氣泡菜、魔法元氣醬</td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C"  class="shop_url"><a href="http://www.chenyunpaochuan.com.tw/public/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>陳允寶泉食品股份有限公司</a> </td>
    <td style="color:#4C4C4C">金太陽餅(可奶素)</td> 
  </tr>
</table>

<h4 align="center">【2015台中市十大伴手禮】</h4>
<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
  <tr style="color:#D97861">
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C"><b>店家名稱</b></td>
    <td width="50%"><b>產品名稱</b></td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://27cakehouse.weebly.com/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>27 1/3 cake house</a></td>
    <td style="color:#4C4C4C">法式塔菲糖</td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://www.jk-bio-tek.com/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>元基生技企業有限公司</a></td>
    <td style="color:#4C4C4C">奈米矽皂</td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="https://www.facebook.com/HakkaIndigo/" target="_blank"><img src="images/fb-vector-logo.png"  alt=""/>太平藍TAIPING BLUE</a></td>
    <td style="color:#4C4C4C">藍染餐墊組</td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://www.babuu.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>巴部屋工房</a></td>
    <td style="color:#4C4C4C">純鮮奶脆餅</td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://www.mooncheese.com.tw/mooncheese/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>月亮奇司</a></td>
    <td style="color:#4C4C4C">弦月奶酪</td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://chingwood.com/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>沁木手作</a></td>
    <td style="color:#4C4C4C">檜木手工筆、檜木餐具組</td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="https://oisii.com.tw/main.php" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>東陽食品行</a></td>
    <td style="color:#4C4C4C">得獎私房滷味~得獎經典名粽</td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="https://www.facebook.com/%E9%87%91%E7%A3%9A%E9%A0%82%E7%B4%9A%E8%9C%82%E8%9C%9C-393582870744956/" target="_blank"><img src="images/fb-vector-logo.png"  alt=""/>金磚有限公司</a></td>
    <td style="color:#4C4C4C">金磚頂級蜂蜜-龍眼蜜</td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://ac-rg.com/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>阿秋大肥鵝股份有限公司</a></td>
    <td style="color:#4C4C4C">阿秋嚴選XO醬禮盒</td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://0425822585.tai-chung.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>菇神餐飲有限公司</a></td>
    <td style="color:#4C4C4C">菇神玄耳-初採黑木耳</td> 
  </tr>
</table>
<br/><br/>
<div class="p4_choose">第7屆 | <a href="topten-2.php">第6屆</a> | <a href="topten-3.php">第5屆</a> | <a href="topten-4.php">第4屆</a> | <a href="topten-5.php">第3屆</a> | <a href="topten-6.php">第2屆</a> | <a href="topten-7.php">第1屆</a> </div> 
<div align="center" style="margin:20px 0 0 0;"><a href="#" class="simple-back-to-top"><img src="images/gotop_btn.png"  alt=""/></a></div>
</div>
</div>
</div>
<div class="clear"></div>
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
