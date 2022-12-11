<?php
/* copyright (c) websiting.co.kr */
include_once('../common.php');


include_once $_SERVER['DOCUMENT_ROOT']."/customPage/libDB.php";

if( isset($_POST['type']) ){
	if($_POST['type'] == 'ajax'){
		include_once $_SERVER['DOCUMENT_ROOT']."/pages/func_ajax.php";

		if($_POST['option'] == 'regPay'){
			echo regPay();
		}
		//echo proAjax($_POST);
		exit;
	}		
}


/* 페이지설정 코드 입력! */
	//페이지 제목 지정
	$g5['title'] = "나의 NFT 등기목록";
	
	//본 페이지에 해당되는 css가 있을 경우 아래 css 삽입 코드를 활성화 해주시기 바랍니다.
	//add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/page.css?ver='.G5_CSS_VER.'">', 0);

/* 페이지설정 코드 입력! */
include_once('../head.php');





//print_r($_SESSION);


$login_id="";
$regStates=array();
$regCnt=0;

if(isset($_SESSION['ss_mb_id'])){
	$login_id=$_SESSION['ss_mb_id'];
	$regStates = select("g5_write_300", "*", "mb_id='".sqlFilter($login_id)."' order by wr_id desc limit 1000");
	$cntCheck = select("g5_write_300", "count(*) as count", "wr_6<>'등기완료' and mb_id='".sqlFilter($login_id)."' limit 1");

	if(isset($cntCheck[0])){
		$regCnt = $cntCheck[0]['count'];
	}

	for($i=0;$i<count($regStates);$i++){
		$regStates[$i]['check1']='';
		$regStates[$i]['check2']='';
		$regStates[$i]['check3']='';
		$regStates[$i]['check4']='';
		$regStates[$i]['check5']='';

		$payType = 0;

		if($regStates[$i]['wr_12'] == '일반등기'){
			$payType = 1;
		}
		else if($regStates[$i]['wr_12'] == '확인등기'){
			$payType = 2;
		}
		else if($regStates[$i]['wr_12'] == '검증등기'){
			$payType = 3;
		}


		if( strpos($regStates[$i]['wr_6'],'결제') !== false ){
			$regStates[$i]['check1']='<span  class="text-danger fw-700">결제대기중</span> <br> <span class="btn btn-14 bg-red fw-700 payBtn" num="'.$regStates[$i]['wr_id'].'" payType="'.$payType.'" onclick="">결제하기</span>';
		}
		else if( strpos($regStates[$i]['wr_6'],'서류') !== false ){
			$regStates[$i]['check1']='<i class="fa fa-check" ></i> 결제완료';
			$regStates[$i]['check2']='<span class="btn btn-12 bg-blue fw-700">심사중</span>';
		}
		else if( strpos($regStates[$i]['wr_6'],'실사') !== false ){
			$regStates[$i]['check1']='<i class="fa fa-check" ></i> 결제완료';
			$regStates[$i]['check2']='<i class="fa fa-check" ></i> 심사완료';
			$regStates[$i]['check3']='<span class="btn btn-12 bg-red fw-700">실사중</span>';
		}
		else if($regStates[$i]['wr_6'] == '등기완료'){
			$regStates[$i]['check1']='<i class="fa fa-check" ></i> 결제완료';
			$regStates[$i]['check5']=$regStates[$i]['wr_44'];

			if($regStates[$i]['wr_12'] == '일반등기'){
				$regStates[$i]['check2']='x';
				$regStates[$i]['check3']='x';
				$regStates[$i]['check4']='<span class="btn btn-12 bg-dark">일반등기</span><br> 완료';
			}
			else if($regStates[$i]['wr_12'] == '확인등기'){
				$regStates[$i]['check2']='<i class="fa fa-check" ></i> 심사완료';
				$regStates[$i]['check3']='x';
				$regStates[$i]['check4']='<span class="btn btn-12 bg-blue">확인등기</span><br> 완료';
			}
			else if($regStates[$i]['wr_12'] == '검증등기'){
				$regStates[$i]['check2']='<i class="fa fa-check" ></i> 심사완료';
				$regStates[$i]['check3']='<i class="fa fa-check" ></i> 실사완료';
				$regStates[$i]['check4']='<span class="btn btn-12 bg-red">검증등기</span><br> 완료';
			
			}

		}


	}
}

?>




<!--02. 나의 등록현황 -->
<section class="mainContents mt50">
		<h2 class="title-20 mb20">나의 NFT 등기목록 <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=300&sfl=mb_id%2C1&stx=<?php echo $member['mb_id'] ?>" class="ml30 fs-12 rounded" > 내등기 더보기 <i class="fa fa-plus-circle" aria-hidden="true"></i></a></h2>

	<?php

	if(count($regStates) != 0){
		// 사용방법 : latest('theme/webzine', '게시판아이디', 출력라인, 글자수);
		echo latest_custom1('theme/basic_list','300', $login_id, 1000, 30);
	}
	else{
		echo '<p style="width: 100%;text-align: center;background-color: #f2f2f2;padding: 30px 10px;">진행중인 등기가 없습니다.</p>';
	}
     
    ?>
</section>

<form id="payForm" method="post">
	<input type="hidden" id="payType" name="payType" value="0">
</form>

<script>
var isRun = false;
var num;
$(document).on('click','.payBtn',function(e){
	var index = $('.payBtn').index(this);
    num = $('.payBtn').eq(index).attr('num');
	var ptype = $('.payBtn').eq(index).attr('payType');
	//payCall(num);
	goPay(ptype);
});

function goPay(ptype = 0) {
	$('#payType').val( ptype );
	var pWin = window.open("about:blank", "paywindow", "location=no, directories=no,resizable=no,status=no,toolbar=no,menubar=no, left=0, top=0, scrollbars=yes");
	var frm = document.getElementById("payForm");
	frm.action = "./lib_pay.php";
	frm.target = "paywindow";
	frm.submit();
}

window.addEventListener('message', function(e) {
	console.log(e.data);


	if(e.data != undefined){
		if(e.data.res_cd != undefined){
		
			if(e.data.res_cd == "0000"){
				payCall(num);
			}
		}
	}

	//
});


function payCall(num){
	if(isRun){
        return false;
    }
    isRun = true;

	const formData = new FormData();
    formData.append("type", "ajax" );
    formData.append("option", "regPay" );
    formData.append("wr_id", num );

    $.ajax({
        type: 'post',
        url: "<?=$_SERVER['REQUEST_URI']?>",
        processData: false,
        contentType: false,
        data: formData,
        dataType: "json",
        success: function(data)	{
            isRun = false;
            //$('#'+option+'Loading').addClass('d-none');
            if(data.code=="0") {
				alert(data.msg);
				location.reload(); 
            } else {
				alert(data.msg);
            }
        }
    });

}
</script>



<?php
include_once('../tail.php');
