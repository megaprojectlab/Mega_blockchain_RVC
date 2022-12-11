<?php

if (!function_exists('mysqli_fetch_all')) {
	function mysqli_fetch_all(mysqli_result $result) {
		$data = [];
		while ($data[] = $result->fetch_assoc()) {
		}

		return $data;
	}
}

function mysqli_fetch_all2(mysqli_result $result) {
	$data = [];
	while ($data[] = $result->fetch_assoc()) {
	}

	$unNum = 999999999999;

	for($i=0;$i<count($data);$i++){
		if( !isset($data[$i]) ){
			$unNum = $i;
		}
	}

	if($unNum != 999999999999 ){
		unset($data[$unNum]);
	}

	return $data;
}

function getConn(){
	$conn= mysqli_connect("localhost","yconpayc_croe","lidya2016$","yconpayc_knca");
	mysqli_set_charset($conn, 'utf8');
	return $conn;
}

function select($setTable,$selField,$where){
	$conn = getConn();
	$sql="select ".$selField." from ".$setTable." where ".$where;
	//echo $sql;
	$result = mysqli_query($conn, $sql);
	$result = mysqli_fetch_all2($result, MYSQLI_ASSOC);
	mysqli_close($conn);
	return $result;
}

function select2($setTable,$selField,$where){
	$conn = getConn();
	$sql="select ".$selField." from ".$setTable." where ".$where;
	$result = mysqli_query($conn, $sql);
	$result = mysqli_fetch_all2($result, MYSQLI_ASSOC);
	mysqli_close($conn);
	return $result;
}

function insert($setTable,$data){
	$conn = getConn();
	$sql="insert into ".$setTable." set ";
	$i=0;
	foreach($data as $key=>$val) {
		if($key=="ipcheck") {
			$val=$_SERVER['REMOTE_ADDR'];
		}

		if( count($data) == ($i+1) ){
			$sql.=$key."='".sqlFilter($val)."' ";
		}
		else{
			$sql.=$key."='".sqlFilter($val)."', ";
		}
		
		$i++;
	}

	//echo $sql;
	$rs=mysqli_query($conn,$sql);
	mysqli_close($conn);
}

function update($setTable,$data,$where){
	$conn = getConn();
	$sql="update ".$setTable." set ";
	$i=0;
	foreach($data as $key=>$val) {
		if($key=="ipcheck") {
			$val=$_SERVER['REMOTE_ADDR'];
		}

		if( count($data) == ($i+1) ){
			$sql.=$key."='".sqlFilter($val)."' ";
		}
		else{
			$sql.=$key."='".sqlFilter($val)."', ";
		}
		$i++;
	}
	$sql.=" where ".$where;
	$rs=mysqli_query($conn,$sql);
	mysqli_close($conn);
}

function sqlFilter($value){
	$conn = getConn();
	return mysqli_real_escape_string($conn, $value);
}

function get_file_thumbnail2($wr_id, $num){
	$file_path = "";
	$check = select("g5_board_file", "bf_no, bf_file, bo_table", "wr_id='".$wr_id."' and bf_no='".$num."' ");
	if( !isset($check[0]) ){
		return $file_path;
	}

	$file_path = "https://kornft.org/data/file/{$check[0]['bo_table']}/{$check[0]['bf_file']}";
	return $file_path;
}


?>