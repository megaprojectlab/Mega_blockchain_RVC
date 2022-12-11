<style>
.regFormFrame{
	width:100%;
	height:auto;
	overflow:hidden;
	box-sizing:border-box;
	padding:30px;
	position:relative;
	background:#fff;
}

.regFormFrame h2{
	display:block;
	font-size:20px;
	line-height:40px;
}

.regFormFrame p{
	display:block;
	font-size:15px;
	line-height:20px;
}

.regFormFrame .regFormList{
	width:100%;
	height:auto;
	overflow:hidden;
	margin-top:20px;
	box-sizing:border-box;
	padding:20px 0px;
	border-top:1px solid #ccc;
	border-bottom:1px solid #ccc;
}

.regFormFrame .regFormList ul{
	
}

.regFormFrame .regFormList ul li{
	display:inline-block;
	width:100%;
	height:auto;
	overflow:hidden;
	min-height:40px;
	position:relative;
	box-sizing:border-box;
	padding-left:120px;
	margin:5px 0px;
	font-size:14px;
	line-height:40px;
}

.regFormFrame .regFormList ul li span{
	display:block;
	width:100px;
	height:40px;
	line-height:40px;
	position:absolute;
	left:0px;
	top:0px;
	font-size:14px;
	font-weight:bold;
	box-sizing:border-box;
	padding-left:10px;
}

.regFormFrame .regFormList ul li span.focus{
	border-bottom:1px solid #ff0000;
	color:#ff0000;
}

.regFormFrame .regFormList ul li span.req:before{
	content:"*";
	color:#ff0000;
	position:absolute;
	left:0px;
	top:0px;
}

.regFormFrame .regFormList ul li input[type="text"]{
	display:inline-block;
	width:100%;
	max-width:200px;
	height:40px;
	border:1px solid #ccc;
	box-sizing:border-box;
	padding:0 10px;
}

.regFormFrame .regFormList ul li input[type="text"].tel{
	display:inline-block;
	width:20%;
	max-width:100px;
}

.regFormFrame .regFormList ul li input[type="text"].email{
	display:inline-block;
	width:25%;
	max-width:150px;
}

.regFormFrame .regFormList ul li select{
	display:inline-block;
	width:auto;
	height:40px;
	border:1px solid #ccc;
	box-sizing:border-box;
	padding:0 0px 0 5px;
}

.regFormFrame .regFormList ul li textarea{
	display:inline-block;
	width:100%;
	height:100px;
	border:1px solid #ccc;
	box-sizing:border-box;
	padding:10px;
}

.regFormFrame .regFormAgree{
	width:100%;
	height:auto;
	overflow:hidden;
	padding:20px 0px;
	text-align:center;
	font-size:15px;
	font-weight:bold;
}

.regFormFrame .regFormBtn{
	width:100%;
	height:auto;
	overflow:hidden;
	padding:20px 0px;
	text-align:center;
	font-size:15px;
}

.regFormFrame .regFormPrivacy{
	width:80%;
	height:300px;
	position:absolute;
	top:50%;
	left:50%;
	margin-top:-150px;
	margin-left:-40%;
	background:#fff;
	box-sizing:border-box;
	padding:20px;
	border:1px solid #ccc;
	-webkit-box-shadow:-1px 1px 23px 0px rgba(0,0,0,0.48);
	-moz-box-shadow:-1px 1px 23px 0px rgba(0,0,0,0.48);
	box-shadow:-1px 1px 23px 0px rgba(0,0,0,0.48);
	display:none;
}

.regFormFrame .regFormPrivacy h2{
	display:block;
	width:100%;
	line-height:40px;
	position:relative;
	padding-bottom:10px;
}

.regFormFrame .regFormPrivacy h2 button{
	font-size:13px;
	position:absolute;
	right:0px;
	top:0px;
}

.regFormFrame .regFormPrivacy .regFormPrivacyCont{
	width:100%;
	height:210px;
	overflow:auto;
	overflow-y:auto;
	overflow-x:hidden;
	box-sizing:border-box;
	padding:20px;
	font-size:13px;
}
</style>
<?php
include_once('./_common.php');
include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');

	$sql = " SELECT * FROM {$g5['write_prefix']}{$getFrom} WHERE wr_id = {$formNum}";
	$result = sql_query($sql);
	while ($regForm = sql_fetch_array($result))
    {	
		$j = 0;
		for($i=1; $i<9; $i++){
			if($regForm['wr_'.$i]){
				$formContent[$j] = $regForm['wr_'.$i];
				$j++;
			}	
		}
?>

		<form method="post" action="<?=G5_HTTP_BBS_URL?>/write_update.php" name="regSetForm" onsubmit="return submitForm(this)">
			<input type="hidden" name="itemCnt" value='<?=$j?>'>
			<input type="hidden" name="token" value='<?php echo get_write_token($regForm['wr_9']); ?>'>
			<input type="hidden" name="bo_table" value="<?=$regForm['wr_9']?>">
			<input type="hidden" name="ca_name" value="<?=$regForm['wr_10']?>">
			<input type="hidden" name="wr_name" value="관리자">
			<input type="hidden" name="wr_subject" value="<?=$regForm['wr_subject']?>">
			<input type="hidden" name="wr_content" value="<?=$regForm['wr_link1']?>">
			<div class="regFormFrame">
				<h2><?=$regForm['wr_subject']?></h2>
				<p><?=$regForm['wr_link1']?></p>
				<div class="regFormList">
					<ul>
					<?
						
						for($k=0;$k<count($formContent);$k++){
							
							$formList=explode('|',$formContent[$k]);	
							
		
							echo '<li class="wr_'.($k+1).' '.$formList[1].'">';
							echo '<input type="hidden" id="wr_'.($k+1).'" name="wr_'.($k+1).'" value="">';
							
							
							if($formList[3] == 'yes'){
								echo '<span class="req">';
							}else{
								echo '<span>';
							}
							echo $formList[0].'</span>';
							

							if($formList[1]=='text'){
								echo '<input type="text" placeholder="'.$formList[2].'" >';
							}

							if($formList[1]=='select'){
								echo '<select >';
								echo '<option value="">선택해주세요</option>';
								$formListCont = explode(',',$formList[2]);
								
								for($h=0;$h<count($formListCont);$h++){
									echo '<option value="'.$formListCont[$h].'">'.$formListCont[$h].'</option>';
								}

								echo '</select>';
							}

							if($formList[1]=='checkbox'){
								$formListCont = explode(',',$formList[2]);
								for($h=0;$h<count($formListCont);$h++){
									echo '<label><input type="checkbox" name="wr_'.($k+1).'_checkbox"  value="'.$formListCont[$h].'"> '.$formListCont[$h].' </label>';
								}
							}

							if($formList[1]=='radio'){
								$formListCont = explode(',',$formList[2]);
								for($h=0;$h<count($formListCont);$h++){
									echo '<label><input type="radio" name="wr_'.($k+1).'_radio" value="'.$formListCont[$h].'"> '.$formListCont[$h].' </label>';
								}
							}

							if($formList[1]=='tel'){
								echo '<select class="tel1">';
								$formListCont = explode(',',$formList[2]);
								
								for($h=0;$h<count($formListCont);$h++){
									echo '<option value="'.$formListCont[$h].'">'.$formListCont[$h].'</option>';
								}

								echo '</select>';
								echo '- <input type="text" placeholder="" name="" class="tel2">';
								echo '- <input type="text" placeholder="" name="" class="tel3">';
							}

							if($formList[1]=='email'){
								echo '<input type="text" placeholder="" class="email1"> @ ';
								echo '<input type="text" placeholder="" class="email2"> ';
								echo '<select onchange="selMail(this)">';
								echo '<option value="">직접입력</option>';
								$formListCont = explode(',',$formList[2]);
								for($h=0;$h<count($formListCont);$h++){
									echo '<option value="'.$formListCont[$h].'">'.$formListCont[$h].'</option>';
								}
								echo '</select>';
							}

							if($formList[1]=='textarea'){
								echo '<textarea data-max="'.$formList[2].'"></textarea>';
							}

							echo '</li>';
						}
					?>
					</ul>
				</div>
				<div class="regFormAgree">
					<label><input type="checkbox" name="iptAgree" > 개인정보 수집 및 처리방침에 동의합니다. </label>
					<button class="btn privacyView" type="button">전문보기</button>				
				</div>
				<div class="regFormBtn">
					<?echo captcha_html();?>
				</div>
				<div class="regFormBtn">
					<input type="submit" value="신청하기" class="btn_submit btn">

					<button class="btn" type="button">취소</button>				
				</div>
				<div class="regFormPrivacy">
					<h2>개인정보처리방침 <button type="button" class="btn privacyCloseBtn">닫기</button></h2>
					<div class="regFormPrivacyCont"><?=conv_content($regForm['wr_content'],'')?></div>
				</div>
			</div><!--regFormFrame-->
			
		</form>
<?
	}
?>

<script>
$(function() {
    $(".privacyView").click(function(){
		$(".regFormPrivacy").show();
	});

	$(".privacyCloseBtn").click(function(){
		$(".regFormPrivacy").hide();
	});
});

function selMail(a){
	var matlList = $(a);
	if(matlList.val()){
		matlList.parent().find('.email2').val(matlList.val());
	}else{
		matlList.parent().find('.email2').val('');
	}
}

function submitForm(frm){
	
	var cnt = parseInt(frm.itemCnt.value) + 1;
	
	for(var i='1'; i<cnt; i++){
		
		var inpVal = '';

		$(".wr_"+i+" > span").removeClass('focus');
		
		if($(".wr_"+i).hasClass('text')){
			inpVal = $(".wr_"+i+" > input[type='text']").val();
		}

		if($(".wr_"+i).hasClass('tel')){
			
			var tel = '';
			
			if($(".wr_"+i+" .tel2").val() && $(".wr_"+i+" .tel3").val()){
				tel = $(".wr_"+i+" .tel1").val()+'-'+$(".wr_"+i+" .tel2").val()+'-'+$(".wr_"+i+" .tel3").val();
			}
			inpVal = tel;
		}

		if($(".wr_"+i).hasClass('email')){
			var email = '';
			if($(".wr_"+i+" .email1").val() && $(".wr_"+i+" .email2").val()){
				email = $(".wr_"+i+" .email1").val()+'@'+$(".wr_"+i+" .email2").val();
			}
			inpVal = email;
		}

		if($(".wr_"+i).hasClass('radio')){
			var st = '';
			if($(":input:radio[name=wr_"+i+"_radio]:checked").val()){
				st = $(":input:radio[name=wr_"+i+"_radio]:checked").val();
			}
			inpVal = st;
		}

		if($(".wr_"+i).hasClass('checkbox')){
			var check = '';
			
			$("input[name=wr_"+i+"_checkbox]:checked").each(function() { 
				if(!check){
					check += $(this).val();
				}else{
					check += ','+$(this).val();
				}
			});

			inpVal = check;
		}

		if($(".wr_"+i).hasClass('select')){
			inpVal = $(".wr_"+i+" > select").val();
		}

		if($(".wr_"+i).hasClass('textarea')){
			inpVal = $(".wr_"+i+" > textarea").val();
		}

		if( $("#wr_"+i).parent().find('span').hasClass('req') && !inpVal ){
				alert($(".wr_"+i+" > span").text()+' : 필수입력항목입니다.');
				$(".wr_"+i+" > span").addClass('focus');
				return false;
		}else{
			$("#wr_"+i).val($(".wr_"+i+" > span").text()+':'+inpVal);
			console.log($("#wr_"+i).val());			
		}

	}

	if(!frm.iptAgree.checked){
		alert('개인정보 수집에 동의해주세요!');
		return false;
	 }else{
		alert('신청이 완료되었습니다!');
		return true;	
	 }

}

</script>
