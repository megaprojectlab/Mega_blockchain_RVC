
<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 ?>

<?php $bo_table"300"; ?>
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
$sql = " update $write_table
            set wr_11 = '$wr_11',
                 wr_12 = '$wr_12',
                 wr_13 = '$wr_13',
                 wr_14 = '$wr_14',
                 wr_15 = '$wr_15',
                 wr_16 = '$wr_16',
                 wr_17 = '$wr_17',
                 wr_18 = '$wr_18',
                 wr_19 = '$wr_19',
                 wr_20 = '$wr_20',
                 wr_21 = '$wr_21',
                 wr_22 = '$wr_22',
                 wr_23 = '$wr_23',
                 wr_24 = '$wr_24',
                 wr_25 = '$wr_25',
                 wr_26 = '$wr_26',
                 wr_27 = '$wr_27',
                 wr_28 = '$wr_28',
                 wr_29 = '$wr_29',
                 wr_30 = '$wr_30',   
                 wr_31 = '$wr_31',
                 wr_32 = '$wr_32',
                 wr_33 = '$wr_33',
                 wr_34 = '$wr_34',
                 wr_35 = '$wr_35',
                 wr_36 = '$wr_36',
                 wr_37 = '$wr_37',
                 wr_38 = '$wr_38',
                 wr_39 = '$wr_39',
                 wr_40 = '$wr_40',
                 wr_41 = '$wr_41',
                 wr_42 = '$wr_42',
                 wr_43 = '$wr_43',
                 wr_44 = '$wr_44',
                 wr_45 = '$wr_45',
                 wr_46 = '$wr_46',
                 wr_47 = '$wr_47',
                 wr_48 = '$wr_48',
                 wr_49 = '$wr_49',
                 wr_50 = '$wr_50',
                 wr_51 = '$wr_51',
                 wr_52 = '$wr_52',
                 wr_53 = '$wr_53',
                 wr_54 = '$wr_54',
                 wr_55 = '$wr_55',
                 wr_56 = '$wr_56',
                 wr_57 = '$wr_57',
                 wr_58 = '$wr_58',
                 wr_59 = '$wr_59',
                 wr_60 = '$wr_60',
                 wr_61 = '$wr_61',
                 wr_62 = '$wr_62',
                 wr_63 = '$wr_63',
                 wr_64 = '$wr_64',
                 wr_65 = '$wr_65',
                 wr_66 = '$wr_66',
                 wr_67 = '$wr_67',
                 wr_68 = '$wr_68',
                 wr_69 = '$wr_69',
                 wr_70 = '$wr_70',
                 wr_71 = '$wr_71',
                 wr_72 = '$wr_72',
                 wr_73 = '$wr_73',
                 wr_74 = '$wr_74',
                 wr_75 = '$wr_75',
                 wr_76 = '$wr_76',
                 wr_77 = '$wr_77',
                 wr_78 = '$wr_78',
                 wr_79 = '$wr_79',
                 wr_80 = '$wr_80',
                 wr_81 = '$wr_81',
                 wr_82 = '$wr_82',
                 wr_83 = '$wr_83',
                 wr_84 = '$wr_84',
                 wr_85 = '$wr_85',
                 wr_86 = '$wr_86',
                 wr_87 = '$wr_87',
                 wr_88 = '$wr_88',
                 wr_89 = '$wr_89',
                 wr_90 = '$wr_90',
                 wr_91 = '$wr_91',
                 wr_92 = '$wr_92',
                 wr_93 = '$wr_93',
                 wr_94 = '$wr_94',
                 wr_95 = '$wr_95',
                 wr_96 = '$wr_96'

          where wr_id = '$wr_id' ";

sql_query($sql);

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
