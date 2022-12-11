<?php
function proAjax(){
	global $db;
	$res = array('code'=>100, 'msg'=>'Fail', 'result'=>array() );

	// wr_id check

	if($_POST['option'] == 'show_qr'){

		$db->table( 'g5_write_300' )
		->where('wr_id','=',$_POST['wr_id'])
		->update( array( 'qr_show' => 'yes'  ) )
		->run();
			
		$res['code']=0;
		$res['msg']='Success';
	}
	else if($_POST['option'] == 'edit_nfc'){
		$db->table( 'g5_write_300' )
		->where('wr_id','=',$_POST['wr_id'])
		->update( array( 'nfc_id' => $_POST['nid'] ) )
		->run();
			
		$res['code']=0;
		$res['msg']='Success';
	}
	else if($_POST['option'] == 'add_list'){
		$table_name = 'g5_write_300';
		$showItemCnt = 10;
		$allItemCnt = 0;
		$currentCnt = $_POST['c_page'];
		$where = " 1 ";

		$limitStart = ($currentCnt-1)*$showItemCnt;

		$limitStr = $limitStart.','.$showItemCnt;

		//$datas = dataValuesArr($table_name, $np_f, $where." order by regtime desc limit ".$limitStr);
		$datas = $db->table($table_name)->select( "*" )->order( 'wr_datetime' , 'desc' )->limit($limitStart,$showItemCnt)->run();
		if(!isset($datas[0])){
			$datas = array();
		}

		for($i=0;$i<count($datas);$i++){
			$check = $db->table('g5_board_file')->select( "*" )->where('bo_table','=',300)->where('wr_id','=',$datas[$i]['wr_id'])->limit(1)->run();
			$datas[$i]['show_img']='/theme/knca/plugin/websiting/imageSpacer.php?w=100&amp;h=100';
			if(isset($check[0])){
				$datas[$i]['show_img']="/data/file/300/".$check[0]['bf_file'];
			}
		}

		//$allItemCnt = dataValue($table_name, "count(*)", $where."  ");
		$allItemCnt = $db->table($table_name)->select( "count(*)" )->run();
		if(isset($allItemCnt[0])){
			$allItemCnt = $allItemCnt[0][0];
		}
		else{
			$allItemCnt=0;
		}

		$endCheckCnt = ceil($allItemCnt/$showItemCnt);
		$endCheck = 'add';

		if($endCheckCnt <= $currentCnt){
			$endCheck = 'end';
		}

		$res['code']=0;
		$res['datas']=$datas;
		$res['check']=$endCheck;
		$res['msg']='Success';
	}

	return json_encode($res);
}
if( isset($_POST['type']) ){
	if($_POST['type'] == 'ajax'){
		echo proAjax();
		exit;
	}
	
}
//exit;
$datas = $db->table('g5_write_300')->select( "*" )->order( 'wr_datetime' , 'desc' )->limit(10)->run();

for($i=0;$i<count($datas);$i++){
	$check = $db->table('g5_board_file')->select( "*" )->where('bo_table','=',300)->where('wr_id','=',$datas[$i]['wr_id'])->limit(1)->run();
	$datas[$i]['show_img']='/theme/knca/plugin/websiting/imageSpacer.php?w=100&amp;h=100';
	if(isset($check[0])){
		$datas[$i]['show_img']="/data/file/300/".$check[0]['bf_file'];
	}
}
//print_r($datas); 
//bf_file
?>
