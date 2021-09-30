<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>新規顧客登録｜Admin Tool</title>
<meta name="description" content="管理画面ツール　新規顧客登録">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">

<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->

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
$(document).ready(function () {
  $(".file").on('change', function(){
     var fileprop = $(this).prop('files')[0],
         find_img = $(this).parent().find('img'),
         filereader = new FileReader(),
         view_box = $(this).parent('.view_box');
    
    if(find_img.length){
       find_img.nextAll().remove();
       find_img.remove();
    }
    
    var img = '<div class="img_view"><img alt="" class="img contain"><p><a href="#" class="img_del">画像を削除</a></p></div>';
    
    view_box.append(img);
    
    filereader.onload = function() {
      view_box.find('img').attr('src', filereader.result);
      img_del(view_box);
    }
    filereader.readAsDataURL(fileprop);
  });
  
  function img_del(target){
    target.find("a.img_del").on('click',function(){
      var self = $(this),
          parentBox = self.parent().parent().parent();
      if(window.confirm('画像を削除します。\nよろしいですか？')){
        setTimeout(function(){
          parentBox.find('input[type=file]').val('');
          parentBox.find('.img_view').remove();
        } , 0);            
      }
      return false;
    });
  }  
    
});
</script>

</head>

<body>

<div class="drawer drawer--left">

  <?php include ('php/header.php'); ?>

<div id="page_base">
  <h2>新規顧客登録</h2>
  
<div class="page_base_in">
  
  <div class="page_base_box_2">
    
    <div class="castnew_top">
    最後に必ず「登録」ボタンを押して下さい。<br />
    「登録」ボタンを押さないと反映されません。
    </div>
    
    <form action="" method="post" id="form">
    <p>
    <label><span>店舗 URL（<font color="#CC0000">必須</font>）</span><input type="text" name="店舗 URL" class="txtfiled" placeholder="店舗ID入力" required></label>
    </p>
    <p>
    <label><span>店舗 ID（<font color="#CC0000">必須</font>）</span><input type="text" name="店舗 ID" class="txtfiled" placeholder="店舗ID入力" required></label>
    </p>
    <p>
    <label><span>店舗 PASS（<font color="#CC0000">必須</font>）</span><input type="text" name="店舗 PASS" class="txtfiled" placeholder="店舗PASS入力" required></label>
    </p>    
    <p>
    <label><span>店舗名（<font color="#CC0000">必須</font>）</span><input type="text" name="店舗名" class="txtfiled" placeholder="店舗名入力" required></label>
    </p>
    <p>
    <label><span>代表者名（<font color="#CC0000">必須</font>）</span><input type="text" name="代表者名" class="txtfiled" placeholder="代表者名入力" required></label>
    </p>
    <p>
    <label><span>店舗住所（<font color="#CC0000">必須</font>）</span><input type="text" name="店舗住所" class="txtfiled" placeholder="店舗住所入力" required></label>
    </p>    
    <p>
    <label><span>電話番号（<font color="#CC0000">必須</font>）</span><input type="text" name="電話番号" class="txtfiled" placeholder="電話番号入力" required></label>
    </p>
    <p>
    <label><span>メールアドレス（<font color="#CC0000">必須</font>）</span><input type="text" name="メールアドレス" class="txtfiled" placeholder="メールアドレス入力" required></label>
    </p>
    <p>
    <label><span>次回契約日（<font color="#CC0000">必須</font>）</span><input type="date" name="today" id="today" required><br />
    </label>
    </p>    
    <p>
    <label><span>入金確認（<font color="#CC0000">必須</font>）</span>
    <select name="入金確認" required>
    <option value="--">--</option>
    <option value="入金済">入金済</option>
    <option value="未入金">未入金</option>       
    <option value=">請求済み">請求済み</option>       
    </select>
    </label>
    </p>
    <p>
    <label><span>契約プラン（<font color="#CC0000">必須</font>）</span>
    <select name="契約プラン" required>
    <option value="--">--</option>
    <option value="初回 1年契約">初回 1年契約</option>
    <option value="1ヶ月契約">1ヶ月契約</option>       
    <option value="1年契約">1年契約</option>
    </select>
    </label>
    </p>
    <p>
    <label><span>お支払い方法（<font color="#CC0000">必須</font>）</span>
    <select name="お支払い方法" required>
    <option value="--">--</option>
    <option value="銀行振込">銀行振込</option>
    <option value="クレジット決済">クレジット決済</option>       
    </select>
    </label>
    </p> 
           
    <div class="todayscast_button_2">
      <button type="submit" class="formbtn_2">登録する</button>
    </div>
    </form>

  </div>

</div><!--base-->

</div>

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

</body>

</html>