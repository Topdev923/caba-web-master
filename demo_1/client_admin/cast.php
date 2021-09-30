<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
	
	$shop_id = $_GET['shop_id'];

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `shop_id` = '$shop_id'");
while($row=mysqli_fetch_assoc($result)){
include('../master_admin/parts/basic_hensu.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>キャスト設定｜CLIENT Admin Tool</title>
<meta name="description" content="管理画面ツール　キャスト設定">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/iziModal.min.css">

<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->

<!--画像調整-->
<script>
$(document).ready(function () {
    var imgWidth = $(".top_cast_box_wrap").width();
    var imgheight = (imgWidth*1.0);
    $(".top_cast_box_wrap").css('height',imgheight);
});
$(window).resize(function () {  
    var imgWidth = $(".top_cast_box_wrap").width();
    var imgheight = (imgWidth*1.0);
    $(".top_cast_box_wrap").css('height',imgheight);
});
</script>
<!--画像調整-->

<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('#global'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('.drawer-hamburger'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('.header_space'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>
<!--ヘッダー　プラグイン-->

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
<!--サイド　プラグイン-->

<script>
$(function(){
   
  // 「.modal_open」をクリックしたらモーダルと黒い背景を表示する
  $('.modal_open').click(function(){
 
    // 黒い背景をbody内に追加
    $('body').append('<div class="modal_bg"></div>');
    $('.modal_bg').fadeIn();
 
    // data-targetの内容をIDにしてmodalに代入
    var modal = '#' + $(this).attr('data-target');
 
    // モーダルをウィンドウの中央に配置する
    function modalResize(){
        var w = $(window).width();
        var h = $(window).height();
 
        var x = (w - $(modal).outerWidth(true)) / 2;
        var y = (h - $(modal).outerHeight(true)) / 2;
 
        $(modal).css({'left': x + 'px','top': y + 'px'});
    }
 
    // modalResizeを実行
    modalResize();
 
    // modalをフェードインで表示
    $(modal).fadeIn();
 
    // .modal_bgか.modal_closeをクリックしたらモーダルと背景をフェードアウトさせる
    $('.modal_bg, .modal_close').off().click(function(){
        $('.modal_box').fadeOut();
        $('.modal_bg').fadeOut('slow',function(){
            $('.modal_bg').remove();
        });
    });
 
    // ウィンドウがリサイズされたらモーダルの位置を再計算する
    $(window).on('resize', function(){
        modalResize();
    });
 
    // .modal_switchを押すとモーダルを切り替える
    $('.modal_switch').click(function(){
 
      // 押された.modal_switchの親要素の.modal_boxをフェードアウトさせる
      $(this).parents('.modal_box').fadeOut();
 
      // 押された.modal_switchのdata-targetの内容をIDにしてmodalに代入
      var modal = '#' + $(this).attr('data-target');
 
      // モーダルをウィンドウの中央に配置する
      function modalResize(){
          var w = $(window).width();
          var h = $(window).height();
 
          var x = (w - $(modal).outerWidth(true)) / 2;
          var y = (h - $(modal).outerHeight(true)) / 2;
 
          $(modal).css({'left': x + 'px','top': y + 'px'});
      }
 
      // modalResizeを実行
      modalResize();
 
      $(modal).fadeIn();
 
      // ウィンドウがリサイズされたらモーダルの位置を再計算する
      $(window).on('resize', function(){
          modalResize();
      });
    });
  });
});
</script>

</head>

<body>

<div class="drawer drawer--left">

  <?php include ('php/header.php'); ?>

<div id="page_base">
  <h2>キャスト設定</h2>
  
<div class="page_base_in">
  
  <div class="page_base_box">
  <h3>キャスト登録</h3>
    <div class="todayscast_button"><a href="cast_new.php?shop_id=<?php echo $shop_id; ?>" class="btn_2">キャストを登録</a></div> 
  </div>  
  
  <div class="page_base_box_2">
  <h3>キャスト一覧</h3>
  
  <div class="cast_people">
  現在のキャスト登録数<br />
  「<?php

$result=mysqli_query($sql, "SELECT * From `data` WHERE yobi1='$shop_id' ORDER by id");
$cnt=mysqli_num_rows($result);


echo $cnt;

if ($cnt == '0') {
	echo '0';
}
?>名」
  </div>
  
  <div class="wrapper">
	  <?php
while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('parts/basic_hensu.php');
include('parts/starttime_conversion2.php');	/* 出勤開始時間を変換 */
include('parts/schetime.php');


//▽表示内容ここから

echo "<div class=\"element_cast\"><div class=\"top_cast_box\"><div class=\"top_cast_box_wrap\">\n";


	//写真を表示
				
	if($photo1 == $empty){
	echo "<img src=\"photo/nophoto_1.jpg\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"".$photo1.".jpg\" alt=\"".$name."\"/>\n";
}
echo "</div><div class=\"top_cast_box_button\">";
if($option1=='1'){
	echo '<div class="todayscast_hyouji">表示中</div>';
}elseif($option1=='2'){
	echo '<div class="todayscast_hyouji_no">非表示</div>';
}else{
	echo '<div class="todayscast_hyouji">表示中</div>';
}
	

//写真登録・編集削除画面へ
echo <<<GOLGO
<div class="top_cast_box_button_b">
            <a href="$url/prof.php?name2=$name2" class="btn_1-2" target="_blank">プロフィール確認</a>
          </div>
          <div class="clear"></div>
<div class="top_cast_box_button_a">
            <a href="cast_edit.php?name2=$name2" class="btn_1">編集</a>
          </div>
          <div class="top_cast_box_button_a">
            <a href="cast_photo.php?name2=$name2" class="btn_1">写真設定</a>
          </div>
          <div class="clear"></div>
          
          <div class="top_cast_box_button_a">
            <a data-target="modal_display_$name2" class="btn_1 modal_open">表示設定</a>
          </div>
          <div class="top_cast_box_button_a">
            <a data-target="modal_delete_$name2" class="btn_1 modal_open">削除</a>
          </div>
          <div class="clear"></div>
		  <!-- 表示モーダル1 -->
            <div id="modal_display_$name2" class="modal_box">          
              <p>
                <div class="castschedule_modal_box_title">$nameさんの表示設定</div>
                <form action="rewrite2.php" method="post">
				<input type="hidden" name="name2" value="$name2" />
				<input type="hidden" name="yobi1" value="$yobi1" />
<input type="hidden" name="operation" value="edit" />
                <table>         
                  <tr>
                    <td class="t_td7"><label><input type="radio" name="option1" value="2" /><span class="castschedule_modal_box_font">非表示</span></label></td>
                    <td class="t_td8"><label><input type="radio" name="option1" value="1" checked="checked" /><span class="castschedule_modal_box_font">表示</span></label></td>
                  </tr> 
                </table>              
                <div class="todayscast_button_2">
                  <button type="submit" class="formbtn_2">送信</button>
                </div>
                </form>
              </p>
              <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
            </div>
            <!--モーダル1-->
			<!-- 削除モーダル1 -->
            <div id="modal_delete_$name2" class="modal_box">          
              <p>
                <div class="castschedule_modal_box_title">$nameさんを削除</div>
                <div class="cast_sakujyo">本当に削除しますか？</div>
                <div class="todayscast_button"><a href="rewrite3.php?name2=$name2" class="btn_2">削除する</a></div>
              </p>
              <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
            </div>
            <!--モーダル1-->
GOLGO;
	
	
	
//△表示内容ここまで
echo "</div><div class=\"top_cast_box_name\">".$name."</div></div><!--top_cast_box--></div><!--element_1 end-->\n";

}
?>       
                                    
  </div><!--wrapper-->

    
  </div><!--page_base_box-->

</div><!--base-->

</div>

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

</body>

</html>