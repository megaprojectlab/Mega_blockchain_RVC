<?php
function proAjax(){
	global $db;
	$res = array('code'=>100, 'msg'=>'Fail', 'result'=>array() );

	// wr_id check

	if($_POST['option'] == 'get_qr_data'){

		$check = explode('/', $_POST['knca_url'] );

		$wr_id = array_pop($check);

		$f = "*";

		$datas = $db->table('g5_write_300')->select( $f )->where('wr_id','=',$wr_id)->run();

		$result=array();

		if(isset($datas[0])){
			for($i=0;$i<count($datas);$i++){
				$check = $db->table('g5_board_file')->select( "*" )->where('bo_table','=',300)->where('wr_id','=',$datas[$i]['wr_id'])->limit(1)->run();
				$datas[$i]['show_img']='/theme/knca/plugin/websiting/imageSpacer.php?w=100&amp;h=100';
				if(isset($check[0])){
					$datas[$i]['show_img']="/data/file/300/".$check[0]['bf_file'];
				}
			}
			$result=$datas;
		}

		$res['result']=$result;
			
		$res['code']=0;
		$res['msg']='Success';
	}
	else if($_POST['option'] == 'get_nfc_data'){

		$f = "*";

		$datas = $db->table('g5_write_300')->select( $f )->where('nfc_id','=',$_POST['nid'])->run();

		$result=array();

		if(isset($datas[0])){
			for($i=0;$i<count($datas);$i++){
				$check = $db->table('g5_board_file')->select( "*" )->where('bo_table','=',300)->where('wr_id','=',$datas[$i]['wr_id'])->limit(1)->run();
				$datas[$i]['show_img']='/theme/knca/plugin/websiting/imageSpacer.php?w=100&amp;h=100';
				if(isset($check[0])){
					$datas[$i]['show_img']="/data/file/300/".$check[0]['bf_file'];
				}
			}
			$result=$datas;
		}

		$res['result']=$result;
			
		$res['code']=0;
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


?>