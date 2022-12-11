<div class="container-fluid px-4">

<div style="margin-bottom : 20px"></div>


<div class="card">
  <div class="card-header">
    현재상태 입력
  </div>
  <div class="card-body">

  
	<h5 class="card-title">*현재상태 입력 : 접수완료➜결제대기중➜서류심사중➜실사검증중➜등기완료</h5>

	<select class="form-select" id="eVal1_1" aria-label="Default select example">
	  <option value="" <?=$e1_sel[0]?> >select</option>
	  <option value="결제대기중" <?=$e1_sel[1]?> >*결제대기중</option>
	  <option value="서류심사중" <?=$e1_sel[2]?> >*서류심사중</option>
	  <option value="실사검증중" <?=$e1_sel[3]?> >*실사검증중</option>
	  <option value="등기완료" <?=$e1_sel[4]?> >*등기완료</option>
	</select>
	<div style="margin-bottom : 20px"></div>

	<button type="button" class="btn btn-success editBtn " num="1">Edit</button>


  </div>
</div>
<div style="margin-bottom : 20px"></div>



<div class="card">
  <div class="card-header">
    권리제한 기록하기 
  </div>
  <div class="card-body">

  
	<h5 class="card-title">권리제한 내용</h5>

	<?php // wr_51?>
	<select class="form-select" id="eVal2_1" aria-label="Default select example">
	  <option value="" <?=$e2_sel[0]?> >등기원인</option>
	  <option value="근저당설정" <?=$e2_sel[1]?> >*근저당설정</option>
	  <option value="압류설정" <?=$e2_sel[2]?> >*압류설정</option>
	  <option value="경매진행" <?=$e2_sel[3]?> >*경매진행</option>
	  <option value="기타제한" <?=$e2_sel[4]?> >*기타제한</option>
	</select>
	<div style="margin-bottom : 20px"></div>

	
	<b style="margin-left:20px;">설정일</b>
	<input type="text" id="get_wr_52" value="<?=$view['wr_52']?>" class="form-control" placeholder="설정일(2021-10-24 )">
	<div style="margin-bottom : 20px"></div>

	<b style="margin-left:20px;">채권최고액</b>
	<input type="text" id="get_wr_53" value="<?=$view['wr_53']?>" class="form-control" placeholder="채권최고액">
	<div style="margin-bottom : 40px"></div>


	<h5 class="card-title">권리제한 내용</h5>

	<b style="margin-left:20px;">채권자 성명</b>
	<input type="text" id="get_wr_54" value="<?=$view['wr_54']?>" class="form-control" placeholder="채권자 성명">
	<div style="margin-bottom : 20px"></div>

	<b style="margin-left:20px;">채권자 코드</b>
	<input type="text" id="get_wr_55" value="<?=$view['wr_55']?>" class="form-control" placeholder="채권자 코드">
	<div style="margin-bottom : 20px"></div>

	<b style="margin-left:20px;">채권자정보(주소,메일등)</b>
	<input type="text" id="get_wr_56" value="<?=$view['wr_56']?>" class="form-control" placeholder="채권자정보(주소,메일등)">
	<div style="margin-bottom : 40px"></div>

	<h5 class="card-title">채무자 정보</h5>

	<b style="margin-left:20px;">채무자 성명</b>
	<input type="text" id="get_wr_57" value="<?=$view['wr_57']?>" class="form-control" placeholder="채무자 성명">
	<div style="margin-bottom : 20px"></div>

	<b style="margin-left:20px;">채무자 코드</b>
	<input type="text" id="get_wr_58" value="<?=$view['wr_58']?>" class="form-control" placeholder="채무자 코드">
	<div style="margin-bottom : 20px"></div>

	<b style="margin-left:20px;">채무자정보(주소,메일등)</b>
	<input type="text" id="get_wr_59" value="<?=$view['wr_59']?>" class="form-control" placeholder="채무자정보(주소,메일등)">
	<div style="margin-bottom : 40px"></div>

	<h5 class="card-title">권리제한 설정서류 종류</h5>

	<?php // wr_60 ?>
	<select class="form-select" id="eVal2_2" aria-label="Default select example">
	  <option value="" <?=$e2_2_sel[0]?> >권리제한 입증서류</option>
	  <option value="근저당설정 계약서" <?=$e2_2_sel[1]?> >*근저당설정 계약서</option>
	  <option value="압류설정 계약서" <?=$e2_2_sel[2]?> >*압류설정 계약서</option>
	  <option value="경매진행 확인서" <?=$e2_2_sel[3]?> >*경매진행 확인서</option>
	  <option value="기타 권리제한 서류" <?=$e2_2_sel[4]?> >*기타 권리제한 서류</option>
	</select>
	<div style="margin-bottom : 40px"></div>

	<h5 class="card-title">권리제한 증빙서류 제출(필수)</h5>

	<input multiple="multiple" id="bf_file_21" type="file" name="bf_file[]"  title="권리제한 증빙파일첨부 :  용량  이하만 업로드 가능" class="frm_file">
	<div style="margin-bottom : 20px"></div>

	<h5 class="card-title">기타 설정사항</h5>

	<textarea class="form-control col-sm-5" id="get_wr_61" rows="5"><?=$view['wr_61']?></textarea>
	<div style="margin-bottom : 20px"></div>

	<button type="button" class="btn btn-success editBtn" num="2">Edit</button>


  </div>
</div>
<div style="margin-bottom : 20px"></div>


<div class="card">
  <div class="card-header">
    서류검증 기록하기
  </div>
  <div class="card-body">
    <h5 class="card-title">01.서류검증 확인일 (완료시에만 체크하세요)</h5>

	<input type="text" id="get_wr_75" value="<?=$view['wr_75']?>" class="form-control" placeholder="서류검증 확인일(2021-10-24 )">
	<?php if( trim($view['wr_75']) != '' ): ?>
    <p class="card-text">서류 검증완료</p>
	<?php endif; ?>
	<div style="margin-bottom : 20px"></div>

	<h5 class="card-title">02.신청자 KYC(신분증,실명) 확인하였나요?</h5>

	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="확인함" <?=$e3_1_radio_sel[0]?> >
	  <label class="form-check-label" for="inlineRadio1">확인함</label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="아니요" <?=$e3_1_radio_sel[1]?> >
	  <label class="form-check-label" for="inlineRadio2">아니요</label>
	</div>
	<div style="margin-bottom : 20px"></div>

	<h5 class="card-title">03.등기물건 확인서(보증서)확인하였나요?</h5>

	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio3" value="확인함" <?=$e3_2_radio_sel[0]?> >
	  <label class="form-check-label" for="inlineRadio3">확인함</label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio4" value="아니요" <?=$e3_2_radio_sel[1]?> >
	  <label class="form-check-label" for="inlineRadio4">아니요</label>
	</div>
	<div style="margin-bottom : 20px"></div>


	<h5 class="card-title">04.저작권 확인서(보증서)확인하였나요?</h5>

	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio5" value="확인함" <?=$e3_3_radio_sel[0]?> >
	  <label class="form-check-label" for="inlineRadio5">확인함</label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio6" value="아니요" <?=$e3_3_radio_sel[1]?> >
	  <label class="form-check-label" for="inlineRadio6">아니요</label>
	</div>
	<div style="margin-bottom : 20px"></div>

	<h5 class="card-title">05.서류검증을 위해 제출된 관련첨부 내역은?</h5>

	<b style="margin-left:20px;">등록아이템 유형</b>
	<input type="text" id="get_wr_74" value="<?=$view['wr_74']?>" class="form-control" placeholder="등록아이템 유형">
	<div style="margin-bottom : 20px"></div>

	<button type="button" class="btn btn-success editBtn" num="3">Edit</button>


  </div>
</div>
<div style="margin-bottom : 20px"></div>




<div class="card">
  <div class="card-header">
    실사검증 기록하기
  </div>
  <div class="card-body">

  <?php // wr_87  ?>
  <h5 class="card-title">01.등기완료 하기(완료시에만 체크하세요)</h5>

  
	<input type="text" id="get_wr_87" value="<?=$view['wr_87']?>" class="form-control" placeholder="등기완료 확인일(2021-10-24 )">
	<?php if( trim($view['wr_87']) != '' ): ?>
    <p class="card-text">검증완료</p>
	<?php endif; ?>
	<div style="margin-bottom : 20px"></div>


  <h5 class="card-title">02.타 전문기관 의뢰시 (기관명)</h5>
  
  <input type="text" id="get_wr_88" value="<?=$view['wr_88']?>" class="form-control" placeholder="전문기관명(제3기관의뢰시)">
  <div style="margin-bottom : 20px"></div>

  <h5 class="card-title">03.실사검증 내역기록</h5>

  <textarea class="form-control col-sm-5" id="get_wr_89" rows="5">
  <?php if( trim($view['wr_89']) != '' ): ?>
  <?=$view['wr_89']?>
  <?php else: ?>
  01.등기 아이템의 실체여부 :
  02.소유권여부 : 
  03.저작권여부 : 
  04.신청자 실명확인 : 
  05.작품(아이템확인) 보관여부 : 
  06.아이템의 특성(제작기법: 제작년도: 크기: 에디션: 재질: 특이사항:)
  07.블록체인 정보와 동일성여부 확인:
  08.기타사항  
  <?php endif; ?>
  </textarea>
  <div style="margin-bottom : 20px"></div>


  <h5 class="card-title">04.검증위원(분과위원) 성명</h5>

  <input type="text" id="get_wr_90" value="<?=$view['wr_90']?>" class="form-control" placeholder="검증위원(분과위원) 성명">
  <div style="margin-bottom : 20px"></div>


  <h5 class="card-title">*검증자 서명확인</h5>

<div>
  <canvas id="signature-pad" class="signature-pad" width="283" height="80" style="border: 1px solid;"></canvas>
  <text id="sign_msg"></text>
  <button id="save_sign">Save</button>
  <button id="clear_sign">Clear</button>
</div>

  <?php if( trim($view['wr_9']) != '' ): ?>
  <img src="<?=$view['wr_9']?>">
  <?php endif; ?>

<div style="margin-bottom : 20px"></div>

<h5 class="card-title">05.검증 소견</h5>

<textarea class="form-control col-sm-5" id="get_ta_value1" rows="5"><?=$view['wr_91']?></textarea>
<div style="margin-bottom : 20px"></div>

<h5 class="card-title">06.기타 의견</h5>

<textarea class="form-control col-sm-5" id="get_ta_value2" rows="5"><?=$view['wr_92']?></textarea>
<div style="margin-bottom : 20px"></div>


<h5 class="card-title">실사검증 관련 자료 및 사진</h5>
<input multiple="multiple"  id="bf_file_41" type="file" name="bf_file41[]" class="frm_file">
<div style="margin-bottom : 20px"></div>





	<button type="button" class="btn btn-success editBtn" num="4">Edit</button>






  </div>
</div>
<div style="margin-bottom : 100px"></div>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
<script>

var canvas = document.getElementById('signature-pad');
var sign_data = '';

// Adjust canvas coordinate space taking into account pixel ratio,
// to make it look crisp on mobile devices.
// This also causes canvas to be cleared.
function resizeCanvas() {
    // When zoomed out to less than 100%, for some very strange reason,
    // some browsers report devicePixelRatio as less than 1
    // and only part of the canvas is cleared then.
    var ratio =  Math.max(window.devicePixelRatio || 1, 1);
    canvas.width = canvas.offsetWidth * ratio;
    canvas.height = canvas.offsetHeight * ratio;
    canvas.getContext("2d").scale(ratio, ratio);
}

window.onresize = resizeCanvas;
resizeCanvas();

var signaturePad = new SignaturePad(canvas, {
  backgroundColor: 'rgb(255, 255, 255)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
});

$('#save_sign').on('click', function(e){
	if (signaturePad.isEmpty()) {
    return alert("Please provide a signature first.");
  }

  $('#sign_msg').text('저장되었습니다.');
  
  sign_data = signaturePad.toDataURL('image/png');
});

$('#clear_sign').on('click', function(e){
	signaturePad.clear();
});

$('.editBtn').on('click', function(e){
	var index = $('.editBtn').index(this);
    var num = $('.editBtn').eq(index).attr('num');


	call_edit(num);
});

function call_edit(num){
	let option = '';

	const formData = new FormData();

	if(num == 1){
		option = 'state_change';
		formData.append("type", "ajax" );
		formData.append("option", option );
		formData.append("wr_id", <?=$wr_id?> );
		formData.append("wr_6", $("#eVal1_1 option:selected").val() );
	}
	else if(num == 2){
		option = 'right_change';
		formData.append("type", "ajax" );
		formData.append("option", option );
		formData.append("wr_id", <?=$wr_id?> );

		formData.append("wr_51", $("#eVal2_1 option:selected").val() );

		for(var i=0;i<8;i++){
			var wrNum = 51+(i+1);
			formData.append("wr_"+wrNum, $("#get_wr_"+wrNum).val() );
		}

		formData.append("wr_60", $("#eVal2_2 option:selected").val() );

		for(var i=0;i<$('#bf_file_21')[0].files.length;i++){
			formData.append("file"+i, $('#bf_file_21')[0].files[i] );
		}
		formData.append("wr_61", $("#get_wr_61").val() );
	}
	else if(num == 3){
		option = 'paper_change';
		formData.append("type", "ajax" );
		formData.append("option", option );
		formData.append("wr_id", <?=$wr_id?> );

		formData.append("wr_75", $("#get_wr_75").val() );

		formData.append("wr_71", $("input[name='inlineRadioOptions']:checked").val() );

		formData.append("wr_72", $("input[name='inlineRadioOptions2']:checked").val() );

		formData.append("wr_73", $("input[name='inlineRadioOptions3']:checked").val() );

		formData.append("wr_74", $("#get_wr_74").val() );
	}
	else if(num == 4){
		option = 'silsa_change';
		formData.append("type", "ajax" );
		formData.append("option", option );
		formData.append("wr_id", <?=$wr_id?> );

		formData.append("wr_87", $("#get_wr_87").val() );
		formData.append("wr_88", $("#get_wr_88").val() );
		formData.append("wr_89", $("#get_wr_89").val() );
		formData.append("wr_90", $("#get_wr_90").val() );

		formData.append("wr_91", $("#get_ta_value1").val() );
		formData.append("wr_92", $("#get_ta_value2").val() );

		for(var i=0;i<$('#bf_file_41')[0].files.length;i++){
			formData.append("file"+i, $('#bf_file_41')[0].files[i] );
		}

		if( sign_data.trim().length != 0 ){
			formData.append("wr_9", sign_data );
		}
	}

					$.ajax({
						type: 'post',
						url: "<?=$_SERVER['REQUEST_URI']?>",
						processData: false,
						contentType: false,
						data: formData,
						dataType: "json",
						success: function(data)	{
                            isRun = false;
							if(data.code=="0") {
								alert(data.msg);
								location.reload();
                                
							} else {
								alert(data.msg);
							}
						}
					});	


<?php /* formData.append("file", $('#file_upload')[0].files[0] ); */?>
}
</script>


</div>
                    