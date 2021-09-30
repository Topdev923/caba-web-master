<?php

//設定ファイル読み込み
require_once 'php/conf.php';

require_once 'php/parts/function.php';

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>キャバクラ「きゃばWEB」2</title>
<meta name="description" content="キャバクラ「きゃばWEB」2の公式ホームページです。">
<meta name="keywords" content="キャバクラ">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/vegas.min.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">	
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
	
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">	
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:600&display=swap" rel="stylesheet">
	
<link rel="canonical" href="">
<meta name="format-detection" content="telephone=no">

<style>
.top_background {
	width: 100%;
	height: 0;
	padding-top: calc(800 / 2000 * 100%); /* calc(画像高さ ÷ 画像横幅 × 100%) */
	background: url("img/slide1.jpg") center center / cover no-repeat;
}
@media screen and (max-width: 768px) {
.top_background {
	width: 100%;
	height: 0;
	padding-top: calc(1200 / 800 * 100%); /* calc(画像高さ ÷ 画像横幅 × 100%) */
	background: url("img/slide1-s.jpg") center center / cover no-repeat;
}	
}
</style>	
</head>

<body>	
	<div id="page_fade">
		<div class="drawer drawer--right">
			<div class="header_space">
				<div class="header_space_img"><h1><a href="index.php" title=""><img src="img/logo.svg" alt=""></a></h1></div>
			</div>	
			<header role="banner">
				<button type="button" class="drawer-toggle drawer-hamburger">
					<span class="sr-only"></span>
					<span class="drawer-hamburger-icon"></span>
				</button>
				<nav class="drawer-nav" role="navigation">
					<ul class="drawer-menu">
						<li class="drawer-dropdown_top">
							<a class="drawer-brand" href="hotnews.php" title="ニュース">News</a>
						</li>
						<li>
							<a class="drawer-brand" href="cast.php" title="キャスト">Cast</a>
						</li>
						<li>
							<a class="drawer-brand" href="event.php" title="イベントカレンダー">Calendar</a>
						</li>						
						<li>
							<a class="drawer-brand" href="shopphoto.php" title="店内写真">Shop Photo</a>
						</li>
						<li>
							<a class="drawer-brand" href="system.php" title="料金システム">System</a>
						</li>
						<li>
							<a class="drawer-brand" href="coupon.php" title="クーポン">Coupon</a>
						</li>						
						<li>
							<a class="drawer-brand" href="recruit.php" title="キャスト求人情報">Cast Recruit</a>
						</li>
						<li>
							<a class="drawer-brand" href="recruit.php" title="スタッフ求人情報">Staff Recruit</a>
						</li>						
						<li>
							<div class="wrapper_side_top">
								<div class="element_side_1">
									<a class="btn_sidemenu" href="tel:080-7798-4702" title="電話"><img src="img/tel_side.svg" alt="TEL"></a>
								</div>
								<div class="element_side_1">
									<a class="btn_sidemenu" href="https://goo.gl/maps/384pKjLk4tLUQVEq7" target="_blank" title="アクセス"><img src="img/map_side.svg" alt="アクセス"></a>
								</div>
								<div class="clear"></div>
							</div>
						</li>						
						<li>
							<div class="wrapper_side_sns">
								<div class="element_sns"><a href="https://www.instagram.com/" target="_blank" title="Instagram"><img src="img/instagram.svg" alt="Instagram" /></a></div>
								<div class="element_sns"><a href="https://www.tiktok.com/" target="_blank" title="TikTok"><img src="img/tiktok.svg" alt="TikTok" /></a></div>								
								<div class="element_sns"><a href="https://twitter.com/" target="_blank" title="Twitter"><img src="img/twitter.svg" alt="Twitter" /></a></div>
								<div class="element_sns"><a href="" target="_blank" title="You Tube"><img src="img/youtube.svg" alt="You Tube" /></a></div>
							</div>
						</li>
					</ul>
				</nav>
			</header>			
			<div class="header_space_sp"></div>		
	
			<div class="top_slideshow_bg">
				<div class="top_slideshow_box">
					<img src="img/logo_top.svg" alt="">
					<div class="top_button_area_slide"><a href="recruit.php" class="btn_slidebg" title="求人情報">求人情報はこちら</a></div>
				</div>
			</div>
				
			<div class="top_news_bg">
				<div class="top_contents_in">
					<h2>NEWS<br /><span style="font-size: 50%;">最新ニュース</span></h2>
					
					<div class="slide-wrap slide-scroll">                    
						<div class="slide-box">
							<a href="hotnews.php#1" title="">
								<div class="photo_thumbs"><img src="img/top1.jpg" alt=""></div>
								<h3>ホームページ開設しました！</h3>
							</a>
						</div>
						<div class="slide-box">
							<a href="hotnews.php#2" title="">
								<div class="photo_thumbs"><img src="img/top2.jpg" alt=""></div>
								<h3>グランドオープン！</h3>
							</a>
						</div>
						<div class="slide-box">
							<a href="hotnews.php#3" title="">
								<div class="photo_thumbs"><img src="img/top3.jpg" alt=""></div>
								<h3>オープニングキャスト大募集中です！</h3>
							</a>
						</div>						
						<div class="slide-box">
							<a href="hotnews.php#4" title="">
								<div class="photo_thumbs"><img src="img/top5.jpg" alt=""></div>
								<h3>働くママも安心して働けます！</h3>
							</a>
						</div>
					</div>					
					<div class="top_button_area"><a href="hotnews.php" class="btn_under" title="ニュース一覧">more</a></div>
				</div>
			</div>

			<div class="top_schedule_bg">
				<div class="top_contents_in">
					<h2>TODAYs CAST<br /><span style="font-size: 50%;">本日のキャスト出勤情報</span></h2>
					<div class="wrapper_slide">
						<?php
$result=mysqli_query($sql, "SELECT * From `data` WHERE `yobi1` = '$shop_id' AND `option1` = '1' ORDER by id");
$cnt=mysqli_num_rows($result);


while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu.php');


//出勤データの有効・無効
$getdays=getDays($tdy_8dig,$yobi7);

//本日の出勤
	//▽表示内容ここから
	if($getdays<1){
		if($yobi9==$edi){
			
			if ($yotei1 == '3' || $yotei1 == '1') {
			
	
			echo "<div class=\"element_cast\"><div class=\"top_schedule_box\">
        <a href=\"prof.php?name2=".$name2."\"><div class=\"top_schedule_box_in\"><div class=\"photo_thumbs\">";
			
			
			//写真を表示
			
	//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"\" data-src=\"https://www.caba-web.com/demo_1/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}

echo " </div>";
				
				if($option3 == $empty){
	echo "";
}else{
	echo "<div class=\"fa_insta\"><img src=\"\" data-src=\"img/cast_instagram.svg\" class=\"lozad\"></div>\n";
}
				if($option5 == $empty){
	echo "";
}else{
	echo "<div class=\"fa_youtube\"><img src=\"\" data-src=\"img/cast_youtube.svg\" class=\"lozad\"></div>\n";
}
			
			echo " <p>".$name."</p>";

			echo "</div></a></div></div>\n";
			}
			}
	}else{
		if ($yotei1 == '3' || $yotei1 == '1') {
			//列の加算
			$col++;
			
			//先頭ならばTRタグ開始
			if($col==1){echo "";}
			
			echo "<div class=\"element_cast\"><div class=\"top_schedule_box\">
        <a href=\"prof.php?name2=".$name2."\"><div class=\"top_schedule_box_in\"><div class=\"photo_thumbs\">";
			
			
			//写真を表示
			
	//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"\" data-src=\"https://www.caba-web.com/demo_1/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}

echo " </div>";
				
				if($option3 == $empty){
	echo "";
}else{
	echo "<div class=\"fa_insta\"><img src=\"\" data-src=\"img/cast_instagram.svg\" class=\"lozad\"></div>\n";
}
				if($option5 == $empty){
	echo "";
}else{
	echo "<div class=\"fa_youtube\"><img src=\"\" data-src=\"img/cast_youtube.svg\" class=\"lozad\"></div>\n";
}
			
			echo " <p>".$name."</p>";

			echo "</div></a></div></div>\n";
			//4列目ならTRタグ終了　列位置を0に戻す
			if($col==7){
				echo "";
				$col=0;
			}
		}
	}
	//△表示内容ここまで

}

$result=mysqli_query($sql, "SELECT * From `taiken` WHERE `shop_no` = '$shop_id' AND `taiken_limit` = '$tdy'");
$cnt=mysqli_num_rows($result);

while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu5.php');
}
		$count = 0;
		$tcol = 1;

while ($count < $taiken_num){
  echo "<div class=\"element_2\">
        <div class=\"top_schedule_box\"><div class=\"top_cast_box_wrap\"><img src=\"img/nophoto.jpg\" alt=\"体験".$tcol."\" />\n";
		echo "<p>体験入店".$tcol."</p></div></div></div>\n";
	$count++;
  $tcol++;
}

?>
						
											
					</div>
								
					<div class="top_button_area"><a href="cast.php" class="btn_under" title="キャスト一覧">cast list</a></div>
				</div>
			</div>			
	
			<div class="top_instagram_bg">
				<div class="top_contents_in">
				<h2>INSTAGRAM<br /><span style="font-size: 50%;">インスタグラム</span></h2>
					<div id="list">
							<?php

$result=mysqli_query($sql, "SELECT * From `rss_information` ORDER by pub DESC LIMIT 50");

$cnt=mysqli_num_rows($result);
	  
while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('php/parts/rss_info.php');

//▽表示内容ここから

echo "<div class=\"li\">
						<a href=\"javascript:void(0);\" onclick=\"modalopen(this)\" id=\"".$id."\"   title=\"".$area_hyouki." ".$gyoushu_hyouki."「".$s_name."」".$name."\">
							<div class=\"top_instagram_list_box\">
								<div class=\"top_instagram_list_box_in\">";

					echo "<div class=\"photo_thumbs\">";  
				
	
	if(strpos($img_url, 'mp4') !== false){
					echo "<video autoplay loop muted src=\"".$img_url."\" playsinline ></div><div class=\"fa\"><img src=\"\" data-src=\"img/play.svg\" class=\"lozad\" ></div>";
				}else{
					echo "<img src=\"\" data-src=\"".$img_url."\" class=\"lozad\" ></div>";
				}
	
	echo	"</div><div class=\"top_instagram_list_box_name\">".$name."</div></div>
						</a>
					</div>";
	
	
}
				
?>

						</div>
					<div class="top_instagram_powered"><a href="https://www.nightgram.com/gunma/maebashi/" target="_blank" title="前橋 キャバクラ情報サイト「ナイトグラム」">powered by NIGHTGRAM</a></div>
				</div>
			</div>

			<div class="top_youtube_bg">
				<div class="top_contents_in">
					<h2>You Tube<br /><span style="font-size: 50%;">ユーチューブ</span></h2>
					<div id="list_2">
						<?php

$result=mysqli_query($sql, "SELECT * From `rss_information2` ORDER by pub DESC LIMIT 50");

$cnt=mysqli_num_rows($result);
		  
while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('php/parts/rss_info_yt.php');
	
//▽表示内容ここから

echo "<div class=\"li\">
						<a href=\"javascript:void(0);\" onclick=\"modalopenyoutube(this)\" id=\"y".$id."\"   title=\"".$area_hyouki." ".$gyoushu_hyouki."「".$s_name."」".$name."\">
							<div class=\"top_youtube_list_box\">
								<div class=\"top_youtube_list_box_in\">";

					echo "<div class=\"youtube_thumbs\"><img src=\"\" data-src=\"".$img_url."\" class=\"lozad\" alt=\"".$name."のYou Tube\"  ></div>";  
				
					echo "<div class=\"fa_2\"><img src=\"\" data-src=\"img/play_2.svg\" class=\"lozad\"></div>";
				
	
	echo	"</div><div class=\"top_youtube_list_box_name\">".$name."</div></div>
						</a>
					</div>";

	
}
				
?>
						
													
					</div>
					<div class="top_instagram_powered"><a href="https://www.nightgram.com/gunma/maebashi/" target="_blank" title="前橋 キャバクラ情報サイト「ナイトグラム」">powered by NIGHTGRAM</a></div>
				</div>
			</div>				

			<div class="top_shopphoto_bg">
				<div class="top_contents_in">
					<h2>SHOP PHOTO<br /><span style="font-size: 50%;">店内写真</span></h2>
					<div class="wrapper">
						<div class="element_topphoto">
							<a href="img/floor-1.jpg" data-fancybox="top_group" data-caption="">
								<div class="shopphoto_thumbs"><img src="img/floor-1.jpg" alt=""></div>
							</a>
						</div>
						<div class="element_topphoto">
							<a href="img/floor-2.jpg" data-fancybox="top_group" data-caption="">
								<div class="shopphoto_thumbs"><img src="img/floor-2.jpg" alt=""></div>
							</a>
						</div>
						<div class="element_topphoto">
							<a href="img/floor-3.jpg" data-fancybox="top_group" data-caption="">
								<div class="shopphoto_thumbs"><img src="img/floor-3.jpg" alt=""></div>
							</a>
						</div>
						<div class="element_topphoto">
							<a href="img/floor-4.jpg" data-fancybox="top_group" data-caption="">
								<div class="shopphoto_thumbs"><img src="img/floor-4.jpg" alt=""></div>
							</a>
						</div>							
					</div>					
					<div class="top_button_area"><a href="shopphoto.php" class="btn_under" title="店内写真一覧">more</a></div>
				</div>
			</div>				
			
			<div id="footer">
				<div id="page_top"><a href="#"></a></div>
				<div class="top_access_box">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12849.814913949918!2d139.09406233124253!3d36.374008656030576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ef212bc414d3f%3A0x56e8db5759c8c4a8!2z44CSMzc5LTIxNTQg576k6aas55yM5YmN5qmL5biC5aSp5bed5aSn5bO255S6!5e0!3m2!1sja!2sjp!4v1537530347789" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>				
				<div class="top_contents_in">
					<div class="wrapper_footer">
						<div class="element_footer">
							<div style="text-align: center; padding-bottom: 5px;">
								<img src="" data-src="img/logo_top.svg" class="lozad" alt="" />
							</div>
						</div>
						<div class="element_footer">
							<div class="wrapper_footer_2">
								<div class="element_footer_a">
									群馬県前橋市天川大島町00-0 ビル1F<br />
								</div>								
								<div class="element_footer_b">
									TEL<br />
									OPEN<br />
									CLOSED
								</div>
								<div class="element_footer_c">
									<a href="tel:080-7798-4702">080-7798-4702</a><br />
									19:30～LAST<br />
									日曜日
								</div>	
							</div>
						</div>
					</div>			
				</div>
			</div>
			<div id="footer_2">
				<ul class="inline-block footer_img_1">
					<li><a href="https://www.instagram.com/" target="_blank" title="Instagram"><img src="" data-src="img/instagram.svg" class="lozad" alt="Instagram" /></a></li>
					<li><a href="https://www.tiktok.com/" target="_blank" title="TikTok"><img src="" data-src="img/tiktok.svg" class="lozad" alt="TikTok" /></a></li>
					<li><a href="https://twitter.com/" target="_blank" title="Twitter"><img src="" data-src="img/twitter.svg" class="lozad" alt="Twitter" /></a></li> 
					<li><a href="" target="_blank" title="You Tube"><img src="" data-src="img/youtube.svg" class="lozad" alt="You Tube" /></a></li>
				</ul>
				<p>© 2021 CABAWEB.</p>
			</div>		
	
		</div>
	</div>	
<!-- ここからモーダルウィンドウの表示内容 -->
<div id="modal-content">
<div id="modal-wrap">
<?php

  $result=mysqli_query($sql, "SELECT * From `rss_information` ORDER by pub DESC LIMIT 50");
        
    $cnt=mysqli_num_rows($result);
    while($row=mysqli_fetch_assoc($result)){
      //include('parts/basic_hensu.php');
      include('php/parts/rss_info.php');
		
		$result2=mysqli_query($sql, "SELECT * From `data`  WHERE name2='".$name2."' ORDER by name2");
		
		while($row=mysqli_fetch_assoc($result2)){
      //include('parts/basic_hensu.php');
      include('php/parts/basic_hensu.php');

    echo "<div class=\"instagrambase_topspace\" id=\"m".$id."\"></div>
          <div class=\"instagrambase_boxin\">
            <div class=\"wrapper\">
              <div class=\"element_instagram_1\">
                <a href=\"prof.php?name2=".$name2."\">
				<div class=\"instagrambase_box_a\">
                <div class=\"image_maru\">";
      
      if ($photo1 == '') {
      echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\">";
    }else{
          echo "<img src=\"\" data-src=\"https://www.caba-web.com/demo_1/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"".$name."\">";
    }
            echo "</div>
              </div>
            <div class=\"instagrambase_box_b\">";
      
        echo "<div class=\"instagrambase_name\">".$name."</div> 
            </div><div class=\"clear\"></div>	
				</a>
			</div>"; 
      echo "<div class=\"element_instagram_2\">
				<div class=\"instagrambase_box_c\">";
      
          //出勤データの有効・無効
    $getdays=getDays($tdy_8dig,$yobi7);
    //本日の出勤
      //▽表示内容ここから
      if($getdays<1){
        if($yobi9==$edi){
        if ($yotei1 == '3' || $yotei1 == '1') {
          $sche1 = "img/today_icon.svg";
        }else{
          $sche1 = "img/today_icon_off.svg";
        }
        }else{
          $sche1 = "img/today_icon_off.svg";
        }
      }else{
        if($yotei1 == '3' || $yotei1 == '1') {
          $sche1 = "img/today_icon.svg";
        }else{
          $sche1 = "img/today_icon_off.svg";
        }
      }
      echo "<img src=\"\" data-src=\"".$sche1."\" class=\"lozad\" alt=\"出勤アイコン\">";
      
      if ($option2 == '') {
          echo "<img src=\"\" data-src=\"img/cast_instagram_off.svg\" class=\"lozad\" alt=\"INSTAGRAMアイコン\">";
        }else{
        echo "<a href=\"".$option2."\" target=\"_blank\"><img src=\"\" data-src=\"img/cast_instagram_on.svg\" class=\"lozad\" alt=\"INSTAGRAMアイコン\"></a>";
      }
      
          echo "</div>
				<div class=\"clear\"></div>				
			</div>
		</div>";

    echo "<div class=\"instagrambase_naiyou\">";  
      if(strpos($img_url, 'mp4') !== false){
              echo "<video src=\"\" data-src=\"".$img_url."\" class=\"lozad\" width=\"100%\" loop muted playsinline autoplay controls></video>";
            }else{
              echo "<img src=\"\" data-src=\"".$img_url."\" class=\"lozad\" width=\"100%\">";
            }
    echo	"<div class=\"cp_box\">
            <input id=\"cp".$id." \" type=\"checkbox\">
            <label for=\"cp".$id." \"></label>
            <div class=\"cp_container\">";  
        echo	"<p>".$discription."</p>";
      echo	"</div>
            </div>                    
          </div></div>";   
		}
      
    }
?>
	<div class="insta-last"></div>
	<a id="modal-btn-close">
		<div class="modal-btn-close"><p>× 閉じる</p></div>
	</a>	
</div>
</div>
<!-- ここまでモーダルウィンドウの表示内容 -->
	
	<!-- ここまでモーダルウィンドウの表示内容 -->
<div id="modal-content-youtube">
<div id="modal-wrap-youtube">
<?php

$result=mysqli_query($sql, "SELECT * From `rss_information2` ORDER by pub DESC LIMIT 50");
        
    $cnt=mysqli_num_rows($result);
    while($row=mysqli_fetch_assoc($result)){
      //include('parts/basic_hensu.php');
      include('php/parts/rss_info_yt.php');
		
		$result2=mysqli_query($sql, "SELECT * From `data`  WHERE name2='".$name2."' ORDER by name2");
		
		while($row=mysqli_fetch_assoc($result2)){
      //include('parts/basic_hensu.php');
      include('php/parts/basic_hensu.php');

    echo "<div class=\"instagrambase_topspace\" id=\"yy".$id."\"></div>
          <div class=\"instagrambase_boxin\">
            <div class=\"wrapper\">
              <div class=\"element_instagram_1\">
                <a href=\"prof.php?name2=".$name2."\">
                <div class=\"instagrambase_box_a\">
                <div class=\"image_maru\">";
      
      if ($photo1 == '') {
      echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\">";
    }else{
          echo "<img src=\"\" data-src=\"https://www.caba-web.com/demo_1/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"".$name."\">";
    }
            echo "</div>
              </div>
            <div class=\"instagrambase_box_b\">";
      
        echo "<div class=\"instagrambase_name\">".$name."</div> 
            </div><div class=\"clear\"></div>	
				</a>
			</div>"; 
      echo "<div class=\"element_instagram_2\">
				<div class=\"instagrambase_box_c\">";
      
          //出勤データの有効・無効
    $getdays=getDays($tdy_8dig,$yobi7);
    //本日の出勤
      //▽表示内容ここから
      if($getdays<1){
        if($yobi9==$edi){
        if ($yotei1 == '3' || $yotei1 == '1') {
          $sche1 = "img/today_icon.svg";
        }else{
          $sche1 = "img/today_icon_off.svg";
        }
        }else{
          $sche1 = "img/today_icon_off.svg";
        }
      }else{
        if($yotei1 == '3' || $yotei1 == '1') {
          $sche1 = "img/today_icon.svg";
        }else{
          $sche1 = "img/today_icon_off.svg";
        }
      }
      echo "<img src=\"\" data-src=\"".$sche1."\" class=\"lozad\" alt=\"出勤アイコン\">";
      
      if ($option4 == '') {
          echo "<img src=\"\" data-src=\"img/cast_youtube_off.svg\" class=\"lozad\" alt=\"You Tubeアイコン\">";
        }else{
        echo "<a href=\"".$option4."\" target=\"_blank\"><img src=\"\" data-src=\"img/cast_youtube_on.svg\" class=\"lozad\" alt=\"You Tubeアイコン\"></a>";
      }
      
          echo "</div>
				<div class=\"clear\"></div>				
			</div>
		</div>";
		

     echo "<div class=\"instagrambase_naiyou\">";  
              echo " <div><div><div style=\"left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;\"><iframe src=\"\" data-src=\"".$movie_url."\" class=\"lozad\" style=\"border: 0; top: 0; left: 0; width: 100%; height: 100%; position: absolute;\" allowfullscreen scrolling=\"no\" allow=\"encrypted-media; accelerometer; gyroscope; picture-in-picture\"></iframe></div></div></div>";
    
    echo	"<div class=\"youtubebase_title\">".$discription."</div>
			  </div>
		  </div>";  
		}
    }
?>
	<div class="insta-last"></div>
	<a id="modal-btn-close-youtube">
		<div class="modal-btn-close"><p>× 閉じる</p></div>
	</a>
</div>
</div>
<!-- ここまでモーダルウィンドウの表示内容 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<script src="js/vegas.min.js"></script>		
<!-- 読み込み -->
<script src="js/jquery.fancybox.min.js"></script>
<script>
$(document).ready(function() {
	$('[data-fancybox]').fancybox({
		loop : true,
		toolbar  : false,
		smallBtn : true,
		iframe : {
			preload : false
		}
	});
});
</script>
<!--スライドショー　プラグイン-->
<script>
$(function(){
  $('.top_slideshow_bg').vegas({ //背景画像でスライドショーしたい場所の設定
    slides: [
     { src: 'img/slide1.jpg' }, //スライドする画像を配列で設定
     { src: 'img/slide2.jpg' },
     { src: 'img/slide3.jpg' },		
     { src: 'img/slide4.jpg' }	 	 	 	 
    ],
     delay: 5000, //スライドまでの時間ををミリ秒単位で設定
     timer: false, //タイマーバーの表示/非表示を切り替え
     overlay: 'img/overlays/04.png', //オーバーレイする画像の設定
     animation: 'random', //スライドのアニメーションを設定
     transition: 'flash', //スライド間のエフェクトを設定
	 shuffle: true, //シャッフル
     transitionDuration: 2000 //エフェクト時間をミリ秒単位で設定
  });
});
</script>
<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
</script>
<script>
if (window.matchMedia('(max-width: 767px)').matches) {
$(function(){
	
	//分割したい個数を入力
	var division = 9;
	
	//要素の数を数える
	var divlength = $('#list .li').length;
	//分割数で割る
	dlsizePerResult = divlength / division;
	//分割数 刻みで後ろにmorelinkを追加する
	for(i=1;i<=dlsizePerResult;i++){
		$('#list .li').eq(division*i-1)
                .after('<span class="morelink link'+i+'">more</span>');
	}
	//最初のli（分割数）と、morelinkを残して他を非表示
	$('#list .li,.morelink').hide();
	for(j=0;j<division;j++){
		$('#list .li').eq(j).show();
	}
	$('.morelink.link1').show();
	
	//morelinkにクリック時の動作
	$('.morelink').click(function(){
		//何個目のmorelinkがクリックされたかをカウント
		index = $(this).index('.morelink');
		//(クリックされたindex +2) * 分割数 = 表示数
		for(k=0;k<(index+2)*division;k++){
			$('#list .li').eq(k).fadeIn();
		}
		
		//一旦全てのmorelink削除
		$('.morelink').hide();
		//次のmorelink(index+1)を表示
		$('.morelink').eq(index+1).show();
	
	});
	
});
   } else if (window.matchMedia('(min-width:768px)').matches) {
$(function(){
	
	//分割したい個数を入力
	var division = 10;
	
	//要素の数を数える
	var divlength = $('#list .li').length;
	//分割数で割る
	dlsizePerResult = divlength / division;
	//分割数 刻みで後ろにmorelinkを追加する
	for(i=1;i<=dlsizePerResult;i++){
		$('#list .li').eq(division*i-1)
                .after('<span class="morelink link'+i+'">more</span>');
	}
	//最初のli（分割数）と、morelinkを残して他を非表示
	$('#list .li,.morelink').hide();
	for(j=0;j<division;j++){
		$('#list .li').eq(j).show();
	}
	$('.morelink.link1').show();
	
	//morelinkにクリック時の動作
	$('.morelink').click(function(){
		//何個目のmorelinkがクリックされたかをカウント
		index = $(this).index('.morelink');
		//(クリックされたindex +2) * 分割数 = 表示数
		for(k=0;k<(index+2)*division;k++){
			$('#list .li').eq(k).fadeIn();
		}
		
		//一旦全てのmorelink削除
		$('.morelink').hide();
		//次のmorelink(index+1)を表示
		$('.morelink').eq(index+1).show();
	
	});
	
});
   }
if (window.matchMedia('(max-width: 767px)').matches) {
$(function(){
	
	//分割したい個数を入力
	var division = 4;
	
	//要素の数を数える
	var divlength = $('#list_2 .li').length;
	//分割数で割る
	dlsizePerResult = divlength / division;
	//分割数 刻みで後ろにmorelinkを追加する
	for(i=1;i<=dlsizePerResult;i++){
		$('#list_2 .li').eq(division*i-1)
                .after('<span class="morelink_2 link'+i+'">more</span>');
	}
	//最初のli（分割数）と、morelinkを残して他を非表示
	$('#list_2 .li,.morelink_2').hide();
	for(j=0;j<division;j++){
		$('#list_2 .li').eq(j).show();
	}
	$('.morelink_2.link1').show();
	
	//morelinkにクリック時の動作
	$('.morelink_2').click(function(){
		//何個目のmorelinkがクリックされたかをカウント
		index = $(this).index('.morelink_2');
		//(クリックされたindex +2) * 分割数 = 表示数
		for(k=0;k<(index+2)*division;k++){
			$('#list_2 .li').eq(k).fadeIn();
		}
		
		//一旦全てのmorelink削除
		$('.morelink_2').hide();
		//次のmorelink(index+1)を表示
		$('.morelink_2').eq(index+1).show();
	
	});
	
});
   } else if (window.matchMedia('(min-width:768px)').matches) {
$(function(){
	
	//分割したい個数を入力
	var division = 4;
	
	//要素の数を数える
	var divlength = $('#list_2 .li').length;
	//分割数で割る
	dlsizePerResult = divlength / division;
	//分割数 刻みで後ろにmorelinkを追加する
	for(i=1;i<=dlsizePerResult;i++){
		$('#list_2 .li').eq(division*i-1)
                .after('<span class="morelink_2 link'+i+'">more</span>');
	}
	//最初のli（分割数）と、morelinkを残して他を非表示
	$('#list_2 .li,.morelink_2').hide();
	for(j=0;j<division;j++){
		$('#list_2 .li').eq(j).show();
	}
	$('.morelink_2.link1').show();
	
	//morelinkにクリック時の動作
	$('.morelink_2').click(function(){
		//何個目のmorelinkがクリックされたかをカウント
		index = $(this).index('.morelink_2');
		//(クリックされたindex +2) * 分割数 = 表示数
		for(k=0;k<(index+2)*division;k++){
			$('#list_2 .li').eq(k).fadeIn();
		}
		
		//一旦全てのmorelink削除
		$('.morelink_2').hide();
		//次のmorelink(index+1)を表示
		$('.morelink_2').eq(index+1).show();
	
	});
	
});
   }	
window.onload = switchByWidth;
window.onresize = switchByWidth;
</script>	
<!--サイド　プラグイン-->
<script>
$(function() {
var topBtn = $('#page_top');	
topBtn.hide();
//スクロールが100に達したらボタン表示
$(window).scroll(function () {
　if ($(this).scrollTop() > 100) {
　　topBtn.fadeIn();}
 　　　else { topBtn.fadeOut();
	}
	});
//スクロールしてトップ
    topBtn.click(function () {
	$('body,html').animate({
	scrollTop: 0}, 500);
		return false;
    });
});
</script>
	<script>
//グローバル変数
var sX_syncerModal = 0 ;
var sY_syncerModal = 0 ;

//センタリングを実行する関数
function centeringModalSyncer(){
  //画面(ウィンドウ)の幅、高さを取得
  var w = $(window).width();
  var h = $(window).height();
  //コンテンツ(#modal-content)の幅、高さを取得
  var cw = $("#modal-content").outerWidth();
  var ch = $("#modal-content").outerHeight();
  //センタリングを実行する
  $("#modal-content").css({"left": ((w - cw)/2) + "px","top": ((h - ch)/2) + "px"})
}

//モーダルウィンドウを出現させるクリックイベント
var modalopen = function (value) {
	//キーボード操作などにより、オーバーレイが多重起動するのを防止する
	$( this ).blur() ;	//ボタンからフォーカスを外す
	if( $( "#modal-overlay" )[0] ) return false ;		//新しくモーダルウィンドウを起動しない (防止策1)
	//オーバーレイを出現させる
  posi = $(window).scrollTop();
  $("#page_fade").addClass('modal-body').css({top: -posi});
	$( "body" ).append( '<div id="modal-overlay"></div>' ) ;
	$( "#modal-overlay" ).fadeIn( "slow" ) ;
	//コンテンツをセンタリングする
	centeringModalSyncer() ;
	//コンテンツをフェードインする
	$( "#modal-content" ).fadeIn( "slow" ) ;
	//[#modal-overlay]、または[#modal-close]をクリックしたら…
	$( "#modal-overlay,#modal-close" ).unbind().click( function(){
		//[#modal-content]と[#modal-overlay]をフェードアウトした後に…
		$( "#modal-content,#modal-overlay" ).fadeOut( "slow" , function(){
			//[#modal-overlay]を削除する
			$('#modal-overlay').remove() ;
		} ) ;
    $("#page_fade").removeClass("modal-body");
    $(window).scrollTop(posi);
  }) ;
  $.when(
  $(`#modal-wrap`).scrollTop(0))
  .then($("#modal-wrap").scrollTop($(`#m${value.id}`).offset().top)
  );
}

//グローバル変数
var nowModalSyncer = null ;		//現在開かれているモーダルコンテンツ
var modalClassSyncer = "modal-syncer" ;		//モーダルを開くリンクに付けるクラス名
//モーダルのリンクを取得する
var modals = document.getElementsByClassName( modalClassSyncer ) ;
//モーダルウィンドウを出現させるクリックイベント
for(var i=0,l=modals.length; l>i; i++){
	//全てのリンクにタッチイベントを設定する
	modals[i].onclick = function(){
		//ターゲットとなるコンテンツを確認
		var target = this.getAttribute( "modal-content" ) ;
		//ターゲットが存在しなければ終了
		if( typeof( target )=="undefined" || !target || target==null ){
			return false ;
		}
		//コンテンツとなる要素を取得
		nowModalSyncer = document.getElementById( target ) ;
		//ターゲットが存在しなければ終了
		if( nowModalSyncer == null ){return false ;}
		//キーボード操作などにより、オーバーレイが多重起動するのを防止する
		if( $( "#modal-overlay" )[0] ) return false ;		//新しくモーダルウィンドウを起動しない
		//オーバーレイを出現させる
		$( "body" ).append( '<div id="modal-overlay"></div>' ) ;
		$( "#modal-overlay" ).fadeIn( "fast" ) ;
		//コンテンツをセンタリングする
		centeringModalSyncer() ;
		//コンテンツをフェードインする
		$( nowModalSyncer ).fadeIn( "slow" ) ;
		//[#modal-overlay]、または[#modal-close]をクリックしたら…
		$( "#modal-overlay,#modal-close" ).unbind().click( function() {
			//[#modal-content]と[#modal-overlay]をフェードアウトした後に…
			$( "#" + target + ",#modal-overlay" ).fadeOut( "fast" , function() {
				//[#modal-overlay]を削除する
				$( '#modal-overlay' ).remove() ;
			} ) ;
			//現在のコンテンツ情報を削除
			nowModalSyncer = null ;
		} ) ;
	}
}
$("#modal-btn-close").click(function(){
		//[#modal-content]と[#modal-overlay]をフェードアウトした後に…
		$("#modal-content,#modal-overlay").fadeOut("slow",function(){
      $("#page_fade").removeClass("modal-body");
			//[#modal-overlay]を削除する
			$('#modal-overlay').remove();
      $(window).scrollTop(posi);
  });
});
//---------youtubeのモーダルイベント---------START
var modalopenyoutube = function (value) {
	//キーボード操作などにより、オーバーレイが多重起動するのを防止する
	$( this ).blur() ;	//ボタンからフォーカスを外す
	if( $( "#modal-overlay" )[0] ) return false ;		//新しくモーダルウィンドウを起動しない (防止策1)
	//オーバーレイを出現させる
  posi = $(window).scrollTop();
  $("#page_fade").addClass('modal-body').css({top: -posi});
	$( "body" ).append( '<div id="modal-overlay"></div>' ) ;
	$( "#modal-overlay" ).fadeIn( "slow" ) ;
	//コンテンツをセンタリングする
	centeringModalSyncer_youtube();
	//コンテンツをフェードインする
	$( "#modal-content-youtube" ).fadeIn( "slow" ) ;
	//[#modal-overlay]、または[#modal-close]をクリックしたら…
	$( "#modal-overlay,#modal-btn-close-youtube" ).unbind().click( function(){
		//[#modal-content-youtube]と[#modal-overlay]をフェードアウトした後に…
		$( "#modal-content-youtube,#modal-overlay" ).fadeOut( "slow" , function(){
			//[#modal-overlay]を削除する
			$('#modal-overlay').remove() ;
		} ) ;
    $("#page_fade").removeClass("modal-body");
    $(window).scrollTop(posi);
  }) ;
  $.when(
  $(`#modal-wrap-youtube`).scrollTop(0))
  .then($("#modal-wrap-youtube").scrollTop($(`#y${value.id}`).offset().top)
  );
}

//センタリングを実行する関数
function centeringModalSyncer_youtube(){
  //画面(ウィンドウ)の幅、高さを取得
  var w_youtube = $(window).width();
  var h_youtube = $(window).height();
  //コンテンツ(#modal-content)の幅、高さを取得
  var cw_youtube = $("#modal-content-youtube").outerWidth();
  var ch_youtube = $("#modal-content-youtube").outerHeight();
  //センタリングを実行する
  $("#modal-content-youtube").css({"left": ((w_youtube - cw_youtube)/2) + "px","top": ((h_youtube - ch_youtube)/2) + "px"})
}

$("#modal-btn-close-youtube").click(function(){
		//[#modal-content]と[#modal-overlay]をフェードアウトした後に…
		$("#modal-content-youtube,#modal-overlay").fadeOut("slow",function(){
      $("#page_fade").removeClass("modal-body");
			//[#modal-overlay]を削除する
			$('#modal-overlay').remove();
      $(window).scrollTop(posi);
  });
});
//---------youtubeのモーダルイベント---------END
</script>
</body>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
const observer = lozad('.lozad', {
    rootMargin: '50%',
});
observer.observe();
</script>
</html>