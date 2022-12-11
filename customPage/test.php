<?php

	include_once $_SERVER['DOCUMENT_ROOT']."/customPage/libDB.php";

	$search = select("g5_member", "*", "mb_id='admin' limit 1");

	$sample = 'U2FsdGVkX18CeWRKMAsnz7pzR8YFAns1k7ZIw0lFR32g8Y/U/WVcMSU7ULGTmtcwalh9sGqhSBsLqYhWE1p3S5kOK/80/yCnzDpdQYWlwpzC2cNO9oBII+dM4PnB1I19';

	if( isset($search[0]) ){
		$sample = $search[0]['wallet_address_pk'];
	}

	$sample = 'U2FsdGVkX18DJHG7wWxn5hJYUrWl/Xn0HChVP7ZzkDT/Qz9uYSFatjKgoX58kaS4EhjZWEp+UC//8gcSjCXxSiIyW4cF6JO+E+6GlmxXzl99UGmpIKEIyaLWUYaPuvCd';

	$config = array(
        "server"=>"bsc_main",
        "contract"=>"0x0A5704E05aD078842635d241eB35d35081A6bB95",
        "gas"=>"0xA9817C8001",
        "func"=>"searchPK",
		"data"=>urlencode($sample),
    );

    $json = file_get_contents( "https://artixnft.com/proc/contractApi.html?a={$config['server']}&b={$config['contract']}&c={$config['gas']}&d={$config['func']}&e={$config['data']}" );
    $obj = json_decode($json, true);
	print_r($obj);

/*
$datas = select("g5_write_300","*","wr_id='".sqlFilter($wr_id)."' ");
$conn= mysqli_connect("localhost","yconpayc_croe","lidya2016$","yconpayc_knca");
mysqli_set_charset($conn, 'utf8');

if (!function_exists('mysqli_fetch_all')) {
	function mysqli_fetch_all(mysqli_result $result) {
		$data = [];
		while ($data[] = $result->fetch_assoc()) {}
		return $data;
	}
}

$sql = "select * from g5_write_300_owner where owner_num=".$_POST['wr_id']." and option_type='".$update_type."' and state=1 limit 1";
$sql = "select rowid, owner_num, option_type, show_name, regtime from g5_write_300_owner";
$result = mysqli_query($conn, $sql);

$result = mysqli_fetch_all($result, MYSQLI_ASSOC);

for($i=0;$i<count($result);$i++ ){
	if( isset($result[$i]['owner_num']) ){
		$datas = $result[$i];
		$hashValue = $datas['owner_num']."|".$datas['option_type']."|".$datas['show_name']."|".$datas['regtime']."|";
		$hashValue = hash("sha256", $hashValue);

		$sql = "update g5_write_300_owner set owhash='".$hashValue."' where rowid='".$datas['rowid']."' ";

		mysqli_query($conn, $sql);
	}
}

$config = array(
	"server"=>"bsc_test",
	"contract"=>"0x0A5704E05aD078842635d241eB35d35081A6bB95",
	"gas"=>"0xA9817C8001",
	"func"=>"addArti",
	"to"=>"0x0Cb4C3d8E1E613F2BB4c4e1622edEd1D8d237DB7",
	"title"=>"kncaItem"
);

$contract = $config['contract'];

echo "<a href='https://testnet.bscscan.com/address/{$contract}' target='_blank'>https://testnet.bscscan.com/address/{$contract}</a>";
echo "<br>";

$json = file_get_contents("https://artixnft.com/proc/contractApi.html?a={$config['server']}&b={$config['contract']}&c={$config['gas']}&d={$config['func']}&e={$config['to']}&f={$config['title']}");
$obj = json_decode($json, true);
print_r($obj);

*/

?>