<?
    header('Content-Type: application/json; charset=UTF-8');

	include_once $_SERVER['DOCUMENT_ROOT']."/customPage/libDB.php";

    if( count($_GET) == 0 ){
        exit;
    }

$d = "해당소유권의 NFT
1. 주소지 :  강원도 양평군 양수리 청년호수 123일원 1001호  (#1번째)
2.GPS 위치 : 112.457N  27513.124S
3.대지면적: 151.23㎡
4. 연면적 : 301.4㎡ (용적률: 286%)
5. 건물형태 : 목조,철골조 시설, 팬션시설
6. 방2칸, 거실, 부엌, 화장실, 바베큐장";

    $base = array(
        'id' => $_GET['t'], 
        'description'=>"description", 
        'external_url'=>'https://kornft.org',
        "image"=>"https://kornft.org/theme/knca/img/logo.png",
        "name"=>"KNCA NFT #".$_GET['t']
    );

	if($_GET['t'] == 1){
		$base["image"] = "https://kornft.org/data/file/300/2109411217_G5PsQN7Y_9f2bfcdbc05f1f6707f879310963b1c5ce423393.jpg";
		$base["name"] = "[검증등기]고급팬션 100가구 한정 NFT 특별분할상품 [#1]";
		$base["description"] = $d;
		$base["external_url"] = 'https://kornft.org/bbs/board.php?bo_table=300&wr_id=138';
	}
	else if($_GET['t'] == 2){
		$base["image"] = "https://kornft.org/data/file/300/2109411217_Syu3faeF_3ea218d8f93fb50e7a6afc4985b4a6f238739e89.jpg";
		$base["name"] = "[검증등기]고급팬션 100가구 한정 NFT 특별분할상품 [#2]";
		$base["description"] = $d;
		$base["external_url"] = 'https://kornft.org/bbs/board.php?bo_table=300&wr_id=138';
	}
	else if($_GET['t'] == 3){
		$base["image"] = "https://kornft.org/data/file/300/2109411217_zdZ372Cq_65c64f7097600131662896588d57a83eabdb3c6f.jpg";
		$base["name"] = "[검증등기]고급팬션 100가구 한정 NFT 특별분할상품 [#3]";
		$base["description"] = $d;
		$base["external_url"] = 'https://kornft.org/bbs/board.php?bo_table=300&wr_id=138';
	}
	else if($_GET['t'] == 4){
		$base["image"] = "https://kornft.org/data/file/300/2109411217_9RMn80Sv_9ae5041b04f1baf420b33d7ffd8826e104a13e0b.jpg";
		$base["name"] = "[검증등기]고급팬션 100가구 한정 NFT 특별분할상품 [#4]";
		$base["description"] = $d;
		$base["external_url"] = 'https://kornft.org/bbs/board.php?bo_table=300&wr_id=138';
	}



	$admin_set_tids = array(
		16,17,18,19,20,
	);
	
	if(in_array($_GET['t'], $admin_set_tids)) {
		$_GET['t'] = 15;
	}

	if(in_array($_GET['t'], array(21) )){
		$_GET['t'] = 11;
	}

	// 21,22,23,24
	if(in_array($_GET['t'], array(22,23) )){
		// 15 14 13 12 11
		$_GET['t'] = 12;
	}

	if(in_array($_GET['t'], array(24) )){
		$_GET['t'] = 13;
	}

	$check = select("g5_write_300", "*", "wr_40=".sqlFilter($_GET['t'])." limit 1");
	if(isset($check[0])){
		$base["external_url"] = 'https://kornft.org/bbs/board.php?bo_table=300&wr_id='.$check[0]['wr_id'];
		$base["name"] = $check[0]['wr_subject'].' #'.$_GET['t'];
		$base["description"] = $check[0]['wr_content'];

		$search_img = select("g5_board_file", "*", "wr_id=".$check[0]['wr_id']." limit 1");
		if(isset($search_img[0])){
			$base["image"] = "https://kornft.org/data/file/".$search_img[0]['bo_table']."/".$search_img[0]['bf_file'];
		}
		
	}

    $r = json_encode($base, JSON_PRETTY_PRINT);

    $r = str_replace('\\/', '/', $r);

    echo $r;
	exit;
?>