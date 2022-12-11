<?php
// https://kornft.org/customPage/proof_call.php?wr_id=82&mb_id=knca
	$para = $_GET;

function post($url, $fields){
    $post_field_string = http_build_query($fields, '', '&');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_field_string);
    curl_setopt($ch, CURLOPT_POST, true);
    $response = curl_exec($ch);
    curl_close ($ch);
    return $response;
}

$wr_r = post('https://uni.webminwon.com/servlet/WMUTIL', array(
	"COMMAND"=>"reqEnc.do",
	"KEY"=>"99441763328",
	"DATA"=>$para['wr_id'],
));

$mb_r = post('https://uni.webminwon.com/servlet/WMUTIL', array(
	"COMMAND"=>"reqEnc.do",
	"KEY"=>"99441763328",
	"DATA"=>$para['mb_id'],
));

$r = array("wr_id"=>$wr_r,"mb_id"=>$mb_r);


?>

<!doctype html>
<html lang="ko">
  <head>
  <meta charset="utf-8">
    <title>KNCA Loading</title>
    <style>
      * {
        font-size: 16px;
        font-family: Consolas, sans-serif;
      }
    </style>
  </head>
  <body>
	
	<div style="position: fixed;width: 100%;height: 100%;display: flex;">
		<div style=" margin: auto;z-index: 100;">

		<img src="./l512.gif" style=" width: 64px;height: 64px;">
		<p>Loading</p>

		</div>
	</div>

	<form method="post" id="form" action="https://uni.webminwon.com/servlet/WMSSO">
		<input type="hidden" name="COMMAND" value="SSON">
		<input type="hidden" name="GIWANNO" value="K7600Z7600E7600C7600V7590Z7670">
		<input type="hidden" name="MB_ID" value="<?=$r['mb_id']?>">
		<input type="hidden" name="WR_ID" value="<?=$r['wr_id']?>">
    </form>

	<script>
		var form = document.getElementById("form");
		form.submit();
	</script>
  </body>
</html>