<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
//設定ファイル読み込み
require_once "conf.php";

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>新規エリア登録｜Admin Tool</title>
<meta name="description" content="管理画面ツール　新規エリア登録">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/animate.min.css">
	
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

</head>

<body>
	<div id="top_fade">
		<div class="drawer drawer--left">
			<?php include ('php/header.php'); ?>
			<div id="page_base">
				<h2>新規エリア登録</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="area_check.php" method="post" id="form">
							<p>
								<label><span>都道府県（<font color="#FF0000">必須</font>）</span>
									<select name="toshi_area" required>
    <option value="1" selected>群馬エリア</option>
    <option value="2">栃木エリア</option>       
    <option value="3">埼玉エリア</option>
    <option value="4">長野エリア</option>
    <option value="5">富山エリア</option>
    <option value="6">新潟エリア</option>
		<option value="7">石川エリア</option>   
		<option value="8">東京エリア</option> 
		<option value="9">山梨エリア</option>
		<option value="10">神奈川エリア</option> 
		<option value="11">熊本エリア</option> 
		<option value="12">千葉エリア</option> 
		<option value="13">愛知エリア</option> 
    </select>
								</label>
							</p>							
							<p>
								<label><span>都市名（<font color="#FF0000">必須</font>）</span><input type="text" name="toshi_name" class="txtfiled" placeholder="店舗名" required></label>
							</p>																				
							
							<div class="under_button_area_2">
								<button type="submit" class="formbtn_2">登録する</button>
							</div>
						</form>
					</div>
				</div>
			</div>		
			<?php include ('php/footer.php'); ?>
		</div>
	</div><!--drawer drawer--left-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
</script>
<!--サイド　プラグイン-->
<script>
$(function() {
var topBtn = $('#page-top');	
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
</body>

</html>