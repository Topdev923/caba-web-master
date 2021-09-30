<?php
//セッションの復元
session_start();

//ログインチェック
	require_once 'login_check.php';
//設定ファイル読み込み
require_once 'conf.php';

//フォームからデータ受け取り
$info_id = $_POST['info_id'];
$info_time = $_POST['info_time'];
$info_title = $_POST['info_title'];
$info_machi = $_POST['info_machi'];
$info_shop = $_POST['info_shop'];
$info_naiyou = $_POST['info_naiyou'];
$info_text = htmlspecialchars($_POST['info_text'],ENT_QUOTES);
$info_select = $_POST['info_select'];
$info_photo = $_POST['info_photo'];
$info_blank = $_POST['info_blank'];
//データを整形
$info_text = mb_convert_kana($info_text,'KaV','utf-8');

//追加
$info_text = str_replace('\\' , '' , $info_text);
//改行コードの前に改行タグを入れる
$info_text = nl2br($info_text);
//改行コードを削除
$info_text = str_replace("\r\n" , "" , $info_text);

$info_time = date("Y-m-d,H:i:s");

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>店舗更新情報確認｜Admin Tool</title>
<meta name="description" content="管理画面ツール　店舗更新情報確認">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">

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
				<h2>店舗更新情報確認</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="information_write.php" method="post" id="form" enctype="multipart/form-data">
							<div class="hotnews_photo_area">
								<h3>画像登録</h3>
								<?php
//ファイル名の取り出し
$photo_name1 = $_FILES['info_photo']['name'];

//ファイルタイプの取り出し
$photo_type1 = $_FILES['info_photo']['type'];

//一時ファイル名の取り出し
$temp_name1 = $_FILES['info_photo']['tmp_name'];


//保存先のディレクトリ
$dir = '../client_admin/photo/';
$dir2 = 'photo/';
//拡張子
if($photo_type1=='image/jpeg'||$photo_type1=='image/pjpeg'){
	$jpeg = '.jpg';
}elseif($photo_type1=='image/gif'){
	$jpeg = '.gif';
}
//保存先のファイル名
	$upload_name1 = $dir . $info_id . '_1' . $jpeg;
	// m
	$upload_name1_m = $dir . $info_id . '_1_m' . $jpeg;

//データが全部空の時
if ($photo_name1 == $empty) {
	echo '<p>写真の登録はありません</p>';
}

/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（1枚目）//
/////////////////////////////////////////////
if (($photo_type1 == 'image/jpeg') || ($photo_type1 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name1 , $upload_name1);
	
	if ($result) {
		echo "<table class=\"border1\"><tr>\n";
		
		//アップロードの成功
		echo '<td class="w_px200"><p>■1枚目<br /><a href="' . $upload_name1 . '" target="_blank"><img src="' . $upload_name1_m. '" alt="photo1" /></a></p></td>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name1);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[写真1]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		

		//サムネイル画像の幅と高さを決める
		
			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);





		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name1);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$info_id.'_1_m.jpg')){
			unlink('./photo/'.$info_id.'_1_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name1_m , $quality)) {
				echo '<p>->サムネイル画像保存(_m)</p>';
			} else {
				echo '<p>->サムネイル画像保存失敗</p>';
			}
		} else {
			echo '<p>->サムネイル画像作成失敗</p>';
		}
		
		
		
		echo "</td>\n";
		echo "</tr></table>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
		
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name1 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}

?>
    <?php
//CSVから該当データを取り出して変数に代入
//$data = file('csv/data.csv');
//for($i=0; $i<sizeof($data); $i++) {
//	$line = explode(',' , $data[$i]);
//	
//	if($line[2] == $name2) {
//		include('parts/basic_hensu_straight.php');
//	}
//}
$data = mysqli_query($sql, "SELECT * FROM `information` WHERE info_id LIKE '$info_id'");
while($row=mysqli_fetch_assoc($data)) {
	include('parts/basic_hensu12.php');
}


if ($photo_name1 != $empty) {$info_photo = $dir2 . $info_id . '_1';}



//削除写真のデータを空に
if($delete1=='delete'){$info_photo='';}


//書込みデータを結合
//$line = array($id,$name,$name2,$age,$height,$weight,$bust,$cup,$waist,$hip,$comment,$comment2,$profinfo1,$profinfo2,$profinfo3,$profinfo4,$profinfo5,$profinfo6,$profinfo7,$profinfo8,$profinfo9,$profinfo10,$option1,$option2,$option3,$option4,$option5,$option6,$option7,$option8,$option9,$option10,$option11,$option12,$option13,$option14,$option15,$option16,$option17,$option18,$option19,$option20,$option21,$option22,$option23,$option24,$option25,$option26,$option27,$option28,$option29,$option30,$option31,$option32,$option33,$option34,$option35,$option36,$option37,$option38,$option39,$option40,$photo1,$photo2,$photo3,$photo4,$photo5,$photo6,$photo7,$photo8,$photo9,$photo10,$yotei1,$start1,$end1,$yotei2,$start2,$end2,$yotei3,$start3,$end3,$yotei4,$start4,$end4,$yotei5,$start5,$end5,$yotei6,$start6,$end6,$yobi1,$yobi2,$yobi3,$yobi4,$yobi5,$yobi6,$yobi7,$yobi8,$yobi9,$yobi10,$edittime);
//$line = implode(',' , $line);

//CSVファイルから直接読み込んだデータなので、再書込みの時に行末に[\n]は不要
#	$line = $line . "\n";

//配列入れ替え
//$data = file('csv/data.csv');
//for($i=0;$i<sizeof($data);$i++) {
//$lines = explode(',' , $data[$i]);
//if ($lines[2] == $name2) {
//	array_splice($data , $i , 1 , $line);
//	}
//}
//CSVファイルへ書き込み
//$handle = fopen('csv/data.csv' , 'w');
//flock($handle , LOCK_EX);
//foreach($data as $item)fputs($handle , $item);
//fclose($handle);
mysqli_query($sql, "UPDATE `information` SET `info_photo`='$info_photo' WHERE `info_id` LIKE '$info_id' LIMIT 1");


//写真を削除
if($delete1=='delete'){
	unlink('./photo/'.$info_id.'_1.jpg');
	unlink('./photo/'.$info_id.'_1_m.jpg');

	echo "<p>".$info_title."写真1枚目を削除しました。</p>\n";
}

?>
   
  
							</div>
							<p>
								<label>
									<span>タイトル（<font color="#FF0000">必須</font>）</span>
									<?php echo $info_title; ?><br />
								</label>
							</p>
							<p>
								<label>
									<span>内容（<font color="#FF0000">必須</font>）</span><?php echo $info_text; ?><br />
									<span style="font-size:60%; color:#FF0000;">※絵文字を使用した場合、絵文字が反映されない場合があります。</span>
								</label>
							</p>
							<input type="hidden" name="info_id" value="<?php echo $info_id; ?>" />
<input type="hidden" name="info_time" value="<?php echo $info_time; ?>" />
<input type="hidden" name="info_title" value="<?php echo $info_title; ?>" />
<input type="hidden" name="info_machi" value="<?php echo $info_machi; ?>" />
<input type="hidden" name="info_shop" value="<?php echo $info_shop; ?>" />
<input type="hidden" name="info_naiyou" value="<?php echo $info_naiyou; ?>" />
<input type="hidden" name="info_text" value="<?php echo $info_text; ?>" />
<input type="hidden" name="info_select" value="<?php echo $info_select; ?>" />
<input type="hidden" name="info_photo" value="<?php echo $info_photo; ?>" />
<input type="hidden" name="info_blank" value="<?php echo $info_blank; ?>" />
							<div class="under_button_area_2">
								<button type="submit" class="formbtn_2">登録する</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<?php include ('php/footer.php'); ?>
		</div>
	</div>

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
<script>	
function () {
    var today = new Date();
    today.setDate(today.getDate());
    var yyyy = today.getFullYear();
    var mm = ("0"+(today.getMonth()+1)).slice(-2);
    var dd = ("0"+today.getDate()).slice(-2);
    document.getElementById("today").value=yyyy+'-'+mm+'-'+dd;
}
</script>	
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
</body>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
const observer = lozad('.lozad', {
    rootMargin: '50%',
});
observer.observe();
</script>
</html>