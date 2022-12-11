<?php
	$update_type = "owner";
	if(isset($_POST['type'])){
		$update_type = $_POST['type'];
	}

	$in_data = array(
		"owner_num"=>$_POST['wr_id'],
		"show_name"=>$_POST['show_name'],
		"email"=>$_POST['email'],
		"dateOf"=>$_POST['dateOf'],
		"phone"=>$_POST['phone'],
		"home_address"=>$_POST['home_address'],
		"wallet_address"=>$_POST['wallet_address'],
	);

	if($update_type == "newItem1"){
		$in_data = array(
			"owner_num"=>$_POST['wr_id'],
			"wr_51"=>$_POST['wr_51'],
			"wr_52"=>$_POST['wr_52'],
			"wr_53"=>$_POST['wr_53'],
			"wr_54"=>$_POST['wr_54'],
			"wr_55"=>$_POST['wr_55'],
			"wr_56"=>$_POST['wr_56'],
			"wr_57"=>$_POST['wr_57'],
			"wr_58"=>$_POST['wr_58'],
			"wr_59"=>$_POST['wr_59'],
			"wr_60"=>$_POST['wr_60'],
			"wr_61"=>$_POST['wr_61'],
			"wr_62"=>$_POST['wr_62'],
		);
	}

	if(isset($_POST['sign_img'])){
		$in_data["sign_img"] = $_POST['sign_img'];
	}

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
	$result = mysqli_query($conn, $sql);

	$result = mysqli_fetch_all($result, MYSQLI_ASSOC);

	if( isset($result[0]) ){
		$datas = $result[0];
		foreach($in_data as $key => $value){
			if( trim($in_data[$key]) == '' ){
				$in_data[$key] = $datas[$key];
			}
		}
	}
	
	function owner_update($datas = array(), $option = "owner"){
		if(count($datas) == 0){
			return;
		}

		if(!isset($datas['sign_img'])){
			$datas['sign_img'] = "";
		}

		$regtime = date("Y-m-d H:i:s", time());

		$hashValue = $datas['owner_num']."|".$option."|".$datas['show_name']."|".$regtime."|";
		$hashValue = hash("sha256", $hashValue);
		
		$sql = "insert into g5_write_300_owner set 
		owner_num = '".$datas['owner_num']."',
		option_type = '".$option."',
		show_name = '".$datas['show_name']."',
		dateOf = '".$datas['dateOf']."',
		email = '".$datas['email']."',
		phone = '".$datas['phone']."',
		sign_img = '".$datas['sign_img']."',
		home_address = '".$datas['home_address']."',
		wallet_address = '".$datas['wallet_address']."',
		regtime='".$regtime."',
		ipcheck='".$_SERVER['REMOTE_ADDR']."',
		owhash='".$hashValue."',
		state=1
		";

		if($option == "newItem1"){
			$hashValue = $datas['owner_num']."|".$option."|".$datas['wr_54']."|".$regtime."|";
			$hashValue = hash("sha256", $hashValue);

			$sql = "insert into g5_write_300_owner set 
			owner_num = '".$datas['owner_num']."',
			option_type = '".$option."',
			wr_50 = '".$datas['wr_50']."',
			wr_51 = '".$datas['wr_51']."',
			wr_52 = '".$datas['wr_52']."',
			wr_53 = '".$datas['wr_53']."',
			wr_54 = '".$datas['wr_54']."',
			wr_55 = '".$datas['wr_55']."',
			wr_56 = '".$datas['wr_56']."',
			wr_57 = '".$datas['wr_57']."',
			wr_58 = '".$datas['wr_58']."',
			wr_59 = '".$datas['wr_59']."',
			wr_60 = '".$datas['wr_60']."',
			wr_61 = '".$datas['wr_61']."',
			wr_62 = '".$datas['wr_62']."',
			regtime='".$regtime."',
			ipcheck='".$_SERVER['REMOTE_ADDR']."',
			owhash='".$hashValue."',
			state=1
			";
		}

		return [$sql, "update g5_write_300_owner set state=2 where owner_num='".$datas['owner_num']."' and option_type='".$option."' "];
	}


	$sqls = owner_update($in_data, $update_type);


	mysqli_query($conn, $sqls[1]);

	mysqli_query($conn, $sqls[0]);

	mysqli_close($conn);


?>

<script> location.replace("<?=$_POST['redirect']?>"); </script>