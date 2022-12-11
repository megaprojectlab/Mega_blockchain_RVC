
<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 ?>

<?php //서명존재
if(!$_POST['wr_10']) {  alert("신청자 서명이 없거나 올바르지 않은 상태로 접수되었습니다.");   } ?>

<?php
//멀티업로드 부분추가 //////
// 업로드된 파일이 존재하면
if($_POST['uploader_count'] > 0) {
    sql_query(" UPDATE {$g5['board_file_table']} SET wr_id = '{$wr_id}' WHERE bo_table = '{$bo_table}' AND wr_id = '{$fileuid}' ", TRUE);

    // 게시물에 파일수 업데이트
    sql_query(" UPDATE {$write_table} SET wr_file = (SELECT COUNT(*) FROM {$g5['board_file_table']} WHERE bo_table = '{$bo_table}' AND wr_id = '{$wr_id}') WHERE wr_id = '{$wr_id}' ", TRUE);
}
?>

<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

include_once $_SERVER['DOCUMENT_ROOT']."/customPage/libDB.php";

$set_datas=array();
for($i=11;$i<97;$i++){
	if(isset($_POST['wr_'.$i])){
		if(trim($_POST['wr_'.$i]) != ''){
			$set_datas['wr_'.$i] = $_POST['wr_'.$i];
		}
	}
}


update($write_table, $set_datas, "wr_id='".$wr_id."' ");


if($write_table == 'g5_write_300'){
    if($w != 'u') {
	owner_update(array(
		"owner_num"=>$wr_id,
		"show_name"=>$wr_20,
		"email"=>$wr_22,
		"dateOf"=>$wr_21,
		"phone"=>$wr_23,
		"home_address"=>$wr_24,
		"wallet_address"=>$wr_25,
		"sign_img"=>$wr_10,
	));

	owner_update(array(
		"owner_num"=>$wr_id,
		"show_name"=>$wr_31,
		"email"=>$wr_33,
		"dateOf"=>$wr_32,
		"phone"=>$wr_34,
		"home_address"=>$wr_35,
		"wallet_address"=>$wr_36,
	), "copyright");

	if($wr_50 == '권리제한 있음'){
		owner_update(array(
			"owner_num"=>$wr_id,
			"wr_50"=>$wr_50,
			"wr_51"=>$wr_51,
			"wr_52"=>$wr_52,
			"wr_53"=>$wr_53,
			"wr_54"=>$wr_54,
			"wr_55"=>$wr_55,
			"wr_56"=>$wr_56,
			"wr_57"=>$wr_57,
			"wr_58"=>$wr_58,
			"wr_59"=>$wr_59,
			"wr_60"=>$wr_60,
			"wr_61"=>$wr_61,
			"wr_62"=>$wr_62,
		), "newItem1");
	
	}
  }
}

?>

<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
$sql = " update $write_table
            set wr_link3 = '$wr_link3',
                 wr_link4 = '$wr_link4',
                 wr_link5 = '$wr_link5'
          where wr_id = '$wr_id' ";
sql_query($sql);
?>


<?php
//2014-06-18 WEBsiting.co.kr
alert("정상적으로 접수되었습니다.","./board.php?bo_table={$bo_table}&wr_id={$wr_id}");
?>
