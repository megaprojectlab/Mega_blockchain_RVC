<?php

function kncaContract(){
	return "0xB4B3a20486AA2B79c8346A4b687708Ff27eA189E";
}


function regPay(){
	//global $db, $setSwapGole, $setPayKlay;
	$res = array('code'=>100, 'msg'=>'Fail', 'result'=>array() );
	$login_id="";

	// nft cre check

	// not login id check

	if(isset($_SESSION['ss_mb_id'])){
		$login_id=$_SESSION['ss_mb_id'];
	}

	$mem = select("g5_member", "*", "mb_id='".sqlFilter($login_id)."' limit 1");
	if(isset($mem[0])){
		$mem=$mem[0];
	}
	else{
		// fail add
		$mem=array();
	}

	if(trim($mem['wallet_address']) == ''){
		return json_encode($res);
	}

	$config = array(
        "server"=>"bsc_main",
        "contract"=>kncaContract(),
        "gas"=>"0xA9817C8001",
        "func"=>"addArti",
		"to"=>$mem['wallet_address'],
		"aname"=>"KNCA_NFT"
    );

    $json = file_get_contents( "https://artixnft.com/proc/contractApi.html?a={$config['server']}&b={$config['contract']}&c={$config['gas']}&d={$config['func']}&e={$config['to']}&f={$config['aname']}" );
    $obj = json_decode($json, true);
	//print_r($obj);


	// call err check

	/*
	['wr_40'] token id
	['wr_44'] cre date
	['wr_41'] c address
	['wr_45'] cre hash
	*/

	$reg_info = select("g5_write_300", "*", "wr_id='".sqlFilter($_POST['wr_id'])."' limit 1");
	$in_wr_6 = "등기완료";

	if(isset($reg_info[0])){
		if($reg_info[0]['wr_12'] == '확인등기' ){
			$in_wr_6 = "서류심사";
		}
		else if($reg_info[0]['wr_12'] == '검증등기'){
			$in_wr_6 = "서류심사";
		}
	}

	update("g5_write_300",array(
		"wr_40"=>$obj['result'][1],
		"wr_41"=>kncaContract(),
		"wr_44"=>date("Y-m-d H:i:s", time()),
		"wr_45"=>$obj['result'][0],
		"wr_6"=>$in_wr_6,
	),"wr_id='".sqlFilter($_POST['wr_id'])."' ");


	$res['code']=0;
    $res['msg']='Success';


	return json_encode($res);

}





?>