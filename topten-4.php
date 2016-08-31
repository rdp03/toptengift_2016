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

<div class="p4_choose"><a href="topten.php">第7屆</a> | <a href="topten-2.php">第6屆</a> | <a href="topten-3.php">第5屆</a>  | 第4屆| <a href="topten-5.php">第3屆</a> | <a href="topten-6.php">第2屆</a> | <a href="topten-7.php">第1屆</a> </div> 
<div class="p4_title">2012年 伴手禮首獎廠商</div>
<h4 align="center">【首獎廠商】</h4>
<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
  <tr style="color:#D97861">
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C"><b>店家名稱</b></td>
    <td width="50%"><b>產品名稱</b></td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://meifang.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>美方芋仔冰城</a></td>
    <td style="color:#4C4C4C">美方芋仔冰</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="https://www.facebook.com/haun.lo.pai/" target="_blank"><img src="images/fb-vector-logo.png"  alt=""/>歡樂派食品有限公司</a></td>
    <td style="color:#4C4C4C">養生黑糖麻糬</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://www.cardanwo.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>卡但屋食品有限公司</a></td>
    <td style="color:#4C4C4C">米鳳梨酥</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://www.mylemon.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>彩色寧波國際有限公司</a></td>
    <td style="color:#4C4C4C">翠玉筍黃金泡菜</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="https://www.facebook.com/little.hope.cake" target="_blank"><img src="images/fb-vector-logo.png"  alt=""/>小小希望坊有限公司</a></td>
    <td style="color:#4C4C4C">臺灣八寶</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://www.yjs.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>裕珍馨食品股份有限公司</a></td>
    <td style="color:#4C4C4C">綠豆椪</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://www.myfood.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>桂花田烘焙美食有限公司</a></td>
    <td style="color:#4C4C4C">晶沙藏金</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://www.herbfood.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>薌園生技股份有限公司</a></td>
    <td style="color:#4C4C4C">愛米稻爆</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://www.wan-wen.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>丸文食品</a></td>
    <td style="color:#4C4C4C">低脂旗魚鬆</td> 
  </tr>
  <tr>
   <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://www.gcake.com.tw/title3/page.php" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>咕咕霍夫有限公司</a></td>
    <td style="color:#4C4C4C">香橙雪兔</td> 
  </tr>

 
</table>
<br/><br/>
<h4 align="center">【新人賞】</h4>
<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
  <tr style="color:#D97861">
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C"><b>店家名稱</b></td>
    <td width="50%"><b>產品名稱</b></td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://www.cake99.com/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>采棠肴鮮餅舖</a></td>
    <td style="color:#4C4C4C">土鳳梨酥</td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://huang-pin.com/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>皇品名茶茶葉有限公司</a></td>
    <td style="color:#4C4C4C">皇品台灣首選</td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://www.mulletroe.com.tw/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>橙果水產行</a></td>
    <td style="color:#4C4C4C">頂級烏魚子醬</td> 
  </tr>
</table>

<h4 align="center">【文創人氣獎】</h4>
<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
  <tr style="color:#D97861">
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C"><b>店家名稱</b></td>
    <td width="50%"><b>產品名稱</b></td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://www.tanzih-orchid.com/about.html" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>潭子蘭園有限公司</a></td>
    <td style="color:#4C4C4C">360°球型禮蘭</td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="http://taobamboo.weebly.com/" target="_blank"><img src="images/web-vector-logo.png"  alt=""/>葫蘆墩葫蘆工作室</a></td>
    <td style="color:#4C4C4C">彩繪幸葫</td> 
  </tr>
  <tr>
    <td width="50%" style="text-align: right; border-right:1px solid #F7B52C; color:#1F938C" class="shop_url"><a href="https://www.facebook.com/%E5%A4%AA%E5%B9%B3%E5%B8%82%E6%B7%B1%E5%BA%A6%E6%97%85%E9%81%8A%E6%9C%8D%E5%8B%99%E4%B8%AD%E5%BF%83-114872518562991/" target="_blank"><img src="images/fb-vector-logo.png"  alt=""/>太平市深度旅遊服務中心</a></td>
    <td style="color:#4C4C4C">藍染手提包</td> 
  </tr>
</table>

<br/><br/>
<div class="p4_choose"><a href="topten.php">第7屆</a> | <a href="topten-2.php">第6屆</a> | <a href="topten-3.php">第5屆</a>  | 第4屆| <a href="topten-5.php">第3屆</a> | <a href="topten-6.php">第2屆</a> | <a href="topten-7.php">第1屆</a> </div> 

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
