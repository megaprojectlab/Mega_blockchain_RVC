<?php
	//echo "homeControl.php<br>";
	function proAjax($post){
		$res = array('code'=>100, 'msg'=>'None', 'result'=>array() );

		if($post['option'] == 'state_change'){
			$data=array();
			$data['wr_6']=$post['wr_6'];
			update('g5_write_300',$data,"wr_id='".sqlFilter($post['wr_id'])."' ");

			$res['code']=0;
			$res['msg']='success';
		}
		else if($post['option'] == 'right_change'){
			$bo_table = 300;
			$upload_path = $_SERVER['DOCUMENT_ROOT']."/data/file/".$bo_table.'/';

			foreach($_FILES as $key => $value) { 
				$filename = basename($_FILES[$key]['name']);
				$ext = array_pop(explode(".", strtolower($filename)));

				$md5_filename = md5(time().$ext);
				$md5_filename .= '.'.$ext;

				$ext_list = array(
					"png", 
					"jpg", 
					"jpeg",
					"gif",
					"txt",
				);
				if(!in_array($ext, $ext_list)) {
					$res['code']=100;
					$res['msg']='The image extensions are PNG, JPEG and GIF only.';
					return json_encode($res);
				}

				if($_FILES[$key]['size'] > 3000000){
					$res['code']=100;
					$res['msg']='The size of the image must not exceed 3MB.';
					return json_encode($res);
				}
			}

			foreach($_FILES as $key => $value) { 
				$filename = basename($_FILES[$key]['name']);
				$ext = array_pop(explode(".", strtolower($filename)));

				$md5_filename = md5(time().$ext);
				$md5_filename .= '.'.$ext;

				$uploadfile = $upload_path . $md5_filename;

				if (!move_uploaded_file($_FILES[$key]['tmp_name'], $uploadfile)) {
					$res['code']=100;
					$res['msg']='File Upload Fail';
					return json_encode($res);
				}

				$bf_no = 0;

				$check = select("g5_board_file","bf_no","wr_id='".sqlFilter($post['wr_id'])."' and bo_table='".sqlFilter($bo_table)."' ORDER BY bf_no DESC LIMIT 1 ");
				if(isset($check[0])){
					$bf_no=$check[0]['bf_no']+1;
				}

				insert("g5_board_file",array(
					"bo_table"=>$bo_table,
					"wr_id"=>$post['wr_id'],
					"bf_no"=>$bf_no,
					"bf_source"=>$filename,
					"bf_file"=>$md5_filename,
					"bf_download"=>0,
					"bf_content"=>'',
					"bf_fileurl"=>'',
					"bf_thumburl"=>'',
					"bf_storage"=>'',
					"bf_filesize"=>$_FILES[$key]['size'],
					"bf_width"=>0,
					"bf_height"=>0,
					"bf_type"=>0,
					"bf_datetime"=>date("Y-m-d H:i:s",time())
				));
			}

			$data=array();
			$data['wr_50']='권리제한 있음';
			$data['wr_51']=$post['wr_51'];
			$data['wr_52']=$post['wr_52'];
			$data['wr_53']=$post['wr_53'];
			$data['wr_54']=$post['wr_54'];
			$data['wr_55']=$post['wr_55'];
			$data['wr_56']=$post['wr_56'];
			$data['wr_57']=$post['wr_57'];
			$data['wr_58']=$post['wr_58'];
			$data['wr_59']=$post['wr_59'];
			$data['wr_60']=$post['wr_60'];
			$data['wr_61']=$post['wr_61'];
			update('g5_write_300',$data,"wr_id='".sqlFilter($post['wr_id'])."' ");

			$res['code']=0;
			$res['msg']='success';

		}
		else if($post['option'] == 'paper_change'){

			$data=array();
			$data['wr_71']=$post['wr_71'];
			$data['wr_72']=$post['wr_72'];
			$data['wr_73']=$post['wr_73'];
			$data['wr_74']=$post['wr_74'];
			$data['wr_75']=$post['wr_75'];
			update('g5_write_300',$data,"wr_id='".sqlFilter($post['wr_id'])."' ");

			$res['code']=0;
			$res['msg']='success';

		}
		else if($post['option'] == 'silsa_change'){
			$bo_table = 300;
			$upload_path = $_SERVER['DOCUMENT_ROOT']."/data/file/".$bo_table.'/';

			foreach($_FILES as $key => $value) { 
				$filename = basename($_FILES[$key]['name']);
				$ext = array_pop(explode(".", strtolower($filename)));

				$md5_filename = md5(time().$ext);
				$md5_filename .= '.'.$ext;

				$ext_list = array(
					"png", 
					"jpg", 
					"jpeg",
					"gif",
					"txt",
				);
				if(!in_array($ext, $ext_list)) {
					$res['code']=100;
					$res['msg']='The image extensions are PNG, JPEG and GIF only.';
					return json_encode($res);
				}

				if($_FILES[$key]['size'] > 3000000){
					$res['code']=100;
					$res['msg']='The size of the image must not exceed 3MB.';
					return json_encode($res);
				}
			}

			foreach($_FILES as $key => $value) { 
				$filename = basename($_FILES[$key]['name']);
				$ext = array_pop(explode(".", strtolower($filename)));

				$md5_filename = md5(time().$ext);
				$md5_filename .= '.'.$ext;

				$uploadfile = $upload_path . $md5_filename;

				if (!move_uploaded_file($_FILES[$key]['tmp_name'], $uploadfile)) {
					$res['code']=100;
					$res['msg']='File Upload Fail';
					return json_encode($res);
				}

				$bf_no = 0;

				$check = select("g5_board_file","bf_no","wr_id='".sqlFilter($post['wr_id'])."' and bo_table='".sqlFilter($bo_table)."' ORDER BY bf_no DESC LIMIT 1 ");
				if(isset($check[0])){
					$bf_no=$check[0]['bf_no']+1;
				}

				insert("g5_board_file",array(
					"bo_table"=>$bo_table,
					"wr_id"=>$post['wr_id'],
					"bf_no"=>$bf_no,
					"bf_source"=>$filename,
					"bf_file"=>$md5_filename,
					"bf_download"=>0,
					"bf_content"=>'',
					"bf_fileurl"=>'',
					"bf_thumburl"=>'',
					"bf_storage"=>'',
					"bf_filesize"=>$_FILES[$key]['size'],
					"bf_width"=>0,
					"bf_height"=>0,
					"bf_type"=>0,
					"bf_datetime"=>date("Y-m-d H:i:s",time())
				));
			}

			$data=array();
			$data['wr_87']=$post['wr_87'];
			$data['wr_88']=$post['wr_88'];
			$data['wr_89']=$post['wr_89'];
			$data['wr_90']=$post['wr_90'];
			$data['wr_91']=$post['wr_91'];
			$data['wr_92']=$post['wr_92'];

			if(trim($post['wr_9']) != ''){
				$data['wr_9']=$post['wr_9'];
			}

			update('g5_write_300',$data,"wr_id='".sqlFilter($post['wr_id'])."' ");

			$res['code']=0;
			$res['msg']='success';
		}

		return json_encode($res);
	}

	if( isset($_POST['type']) ){
		if($_POST['type'] == 'ajax'){
			echo proAjax($_POST);
			exit;
		}
		
	}

	$wr_id = $_GET['wr_id'];
	$view = select("g5_write_300","*","wr_id='".sqlFilter($wr_id)."' ");

	if( isset($view[0]) ){
		$view = $view[0];
	}
	else{
		echo "select fail";
	}

	$e1_sel = array('selected','','','','');
	$e2_sel = array('selected','','','','');
	$e2_2_sel = array('selected','','','','');

	// checked
	$e3_1_radio_sel = array('','');
	$e3_2_radio_sel = array('','');
	$e3_3_radio_sel = array('','');

	
	if( trim($view['wr_6']) != ''){
		if($view['wr_6'] == '결제대기중'){
			$e1_sel = array('','selected','','','');
		}
		else if($view['wr_6'] == '서류심사중'){
			$e1_sel = array('','','selected','','');
		}
		else if($view['wr_6'] == '실사검증중'){
			$e1_sel = array('','','','selected','');
		}
		else if($view['wr_6'] == '등기완료'){
			$e1_sel = array('','','','','selected');
		}
	}

	if( trim($view['wr_51']) != ''){
		if($view['wr_51'] == '근저당설정'){
			$e2_sel = array('','selected','','','');
		}
		else if($view['wr_51'] == '압류설정'){
			$e2_sel = array('','','selected','','');
		}
		else if($view['wr_51'] == '경매진행'){
			$e2_sel = array('','','','selected','');
		}
		else if($view['wr_51'] == '기타제한'){
			$e2_sel = array('','','','','selected');
		}
	}

	if( trim($view['wr_60']) != ''){
		if($view['wr_60'] == '근저당설정 계약서'){
			$e2_2_sel = array('','selected','','','');
		}
		else if($view['wr_60'] == '압류설정 계약서'){
			$e2_2_sel = array('','','selected','','');
		}
		else if($view['wr_60'] == '경매진행 확인서'){
			$e2_2_sel = array('','','','selected','');
		}
		else if($view['wr_60'] == '기타 권리제한 서류'){
			$e2_2_sel = array('','','','','selected');
		}
	}

	if( trim($view['wr_71']) != ''){
		if($view['wr_71'] == '확인함'){
			$e3_1_radio_sel = array('checked','');
		}
		else if($view['wr_71'] == '아니요'){
			$e3_1_radio_sel = array('','checked');
		}
	}

	if( trim($view['wr_72']) != ''){
		if($view['wr_72'] == '확인함'){
			$e3_2_radio_sel = array('checked','');
		}
		else if($view['wr_72'] == '아니요'){
			$e3_2_radio_sel = array('','checked');
		}
	}

	if( trim($view['wr_73']) != ''){
		if($view['wr_73'] == '확인함'){
			$e3_3_radio_sel = array('checked','');
		}
		else if($view['wr_73'] == '아니요'){
			$e3_3_radio_sel = array('','checked');
		}
	}

	//print_r($view);

	//$_SERVER['DOCUMENT_ROOT']."/data/file/".$bo_table.'/'e18707d639985b5586473e8ebffe1498.png
?>