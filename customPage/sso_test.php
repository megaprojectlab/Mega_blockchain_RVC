<?php
// https://kornft.org/customPage/sso_test.php?wr_id=82&mb_id=knca
	$para = $_GET;
	print_r($para);

function post($url, $fields){
    $post_field_string = http_build_query($fields, '', '&');
    $ch = curl_init();                                                            // curl 초기화
    curl_setopt($ch, CURLOPT_URL, $url);                                 // url 지정하기
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);              // 요청결과를 문자열로 반환
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);               // connection timeout : 10초
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);                 // 원격 서버의 인증서가 유효한지 검사 여부
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_field_string);      // POST DATA
    curl_setopt($ch, CURLOPT_POST, true);                               // POST 전송 여부
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

echo "<br>";
print_r($r);


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

	<form method="post" action="https://uni.webminwon.com/servlet/WMSSO">
		<input type="hidden" name="COMMAND" value="SSON">
		<input type="hidden" name="GIWANNO" value="K7600Z7600E7600C7600V7590Z7670">
		<input type="hidden" name="MB_ID" value="<?=$r['mb_id']?>">
		<input type="hidden" name="WR_ID" value="<?=$r['wr_id']?>">

	  

      <p><input type="submit" value="Submit"></p>
    </form>
  </body>
</html>