<?php

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

if($_GET['code'] != '7CBc657E203Ea9b84b1142DAf21b928482Eb3EAF'){
	echo json_encode(array('code' => '100', 'msg'=>'fail', ));
	exit;
}

$config = array(
	"key"=>"52txqa7mt1c5jxtai2krjkc41oowhpur",
	"user_id"=>"yjsong",
	"sender"=>'15221492',
	"receiver"=>$_GET['phone'],
	"msg"=>$_GET['msg'],
);

$r1 = post('https://apis.aligo.in/send/', $config);

//$r = array("datas"=>$r1);

echo json_encode(array('code' => '0', 'msg'=>'success', 'result'=>$r1 ));
?>