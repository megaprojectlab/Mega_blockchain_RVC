<?php
	$para = $_GET;
	print_r($para);
?>

<!doctype html>
<html lang="ko">
  <head>
  <meta charset="utf-8">
    <title>HTML</title>
    <style>
      * {
        font-size: 16px;
        font-family: Consolas, sans-serif;
      }
    </style>
  </head>
  <body>

	<?php if($para['t'] == "newItem1"): ?>
	<form method="post" action="update_owner.php">
		<input type="hidden" name="wr_id" value="<?=$para['n']?>">
		<?php if(isset($para['t'])): ?>
		<input type="hidden" name="type" value="<?=$para['t']?>">
		<?php endif; ?>
		<input type="hidden" name="redirect" value="https://kornft.org/300">

      <input type="text" name="wr_51" placeholder="wr_51" value="근저당설정"></label></p>
	  <input type="text" name="wr_52" placeholder="wr_52" value="2022-02-01"></label></p>
	  <input type="text" name="wr_53" placeholder="wr_53" value="12345678"></label></p>
	  <input type="text" name="wr_54" placeholder="wr_54" value="TAM"></label></p>
	  <input type="text" name="wr_55" placeholder="wr_55" value="0xdfklsajfas"></label></p>
	  <input type="text" name="wr_56" placeholder="wr_56" value="2서울시 서대문구 홍재동 1234"></label></p>
	  <input type="text" name="wr_57" placeholder="wr_57" value="홍길동3"></label></p>
	  <input type="text" name="wr_58" placeholder="wr_58" value="0x12789234hsdkfjher8fd"></label></p>
	  <input type="text" name="wr_59" placeholder="wr_59" value="1제주도 삼도1동 제주마라호텔 123"></label></p>
	  <input type="text" name="wr_60" placeholder="wr_60" value="근저당설정 계약서"></label></p>
	  <input type="text" name="wr_61" placeholder="wr_61" value="근저당 설정을 제출하여 확인을 완료함(22.02.15)"></label></p>
	  <input type="text" name="wr_62" placeholder="wr_62" value="2022-12-01"></label></p>
	  

      <p><input type="submit" value="Submit"></p>
    </form>
	<?php else: ?>
    <form method="post" action="update_owner.php">
		<input type="hidden" name="wr_id" value="<?=$para['n']?>">
		<?php if(isset($para['t'])): ?>
		<input type="hidden" name="type" value="<?=$para['t']?>">
		<?php endif; ?>
		<input type="hidden" name="redirect" value="https://kornft.org/300">
      <input type="text" name="show_name" placeholder="이름"></label></p>
      <input type="text" name="email" placeholder="이메일"></label></p>
	  <input type="text" name="dateOf" placeholder="생년월일"></label></p>
	  <input type="text" name="phone" placeholder="폰번호"></label></p>
	  <input type="text" name="home_address" placeholder="집주소"></label></p>
	  <input type="text" name="wallet_address" placeholder="지갑주소"></label></p>
	  <?php if(!isset($para['t'])): ?>
	  서명 이미지 : <input type="text" name="sign_img" placeholder="서명 이미지" value="data:image/png;base64,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"></label></p>
	  <?php endif; ?>

      <p><input type="submit" value="Submit"></p>
    </form>
	<?php endif; ?>
  </body>
</html>