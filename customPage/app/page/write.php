<?php

if(!in_array($_SESSION['app_code'], admin_list() )){
	exit;
}

?>

		<div class="content" style="display: flex;flex-direction: column;margin: 10px 0px;">

			<div style="margin-bottom:20px;"></div>

			<div class="card card-style custombg shadow-bg shadow-bg-l" style="margin: 30px 30px;margin-top: 0px;height: 175px;">
				<div class="content">
					<h1 class="mb-1 color-white">Write</h1>
					<p class="opacity-80" style="color: #655E7B;">
						About NFC
					</p>
					<div style="display: flex; height: 80px;">

						<i class="fas fa-edit" style="margin-top: auto;margin-left: auto;color: #655E7B;font-size: 50px;"></i>

					</div>
				</div>
			</div>

			
			<div class="card card-style custombg" style="margin: 30px 30px;margin-top: 0px;">
				<div class="content lists">

					<? for($i=0;$i<count($datas);$i++): ?>

					<div class="d-flex pb-4 k_items" num="<?=$datas[$i]['wr_id']?>">
						<div class="align-self-center">
							<img src="<?=$datas[$i]['show_img']?>" class="rounded-sm" width="50">
						</div>
						<div class="align-self-center ps-3">
							<h5 class="mb-n1 color-white txt_line"><?=$datas[$i]['wr_subject']?></h5>
							<p class="font-600 opacity-40 mb-0" style="color: #655E7B;"><?=$datas[$i]['wr_datetime']?></p>
						</div>
						<div class="align-self-center ms-auto">
							<i class="fa fa-chevron-right font-2- pe-1" style="color : #A79CCB;"></i>
						</div>
					</div>
					<? endfor; ?>



					
				</div> 
				
				<a href="#" id="add_list" class="close-menu notch-clear  btn btn-full btn-m rounded-s font-900 me-3 ms-3 mt-2 mb-3" style="background-color: #8A8AD3;">Load more</a>
			</div>


			<div style="margin-bottom:50px;"></div>

        </div>
        
<script>
let common_loading_tag = `
<div class="col-12" style="display: flex;">
	<div class="spinner-border" role="status" style="color: #fff;  margin: auto;"></div>
</div>
`;

$('#add_list').on('click', function(e){
	$('#add_list').html(common_loading_tag);
	add_list();
});

let k_num;

$(document).on('click','.k_items',function(){
	let index = $('.k_items').index(this);
	k_num = $('.k_items').eq(index).attr('num');
	menu2("sel_w", "show", 100);
});

$(document).on('click','#cre_qr_btn',function(){
	// if(isRun){
    //     return false;
    // }
    // isRun = true;

	

	const formData = new FormData();
    formData.append("type", "ajax" );
    formData.append("option", 'show_qr' );
    formData.append("wr_id", k_num );

    $.ajax({
        type: 'post',
        url: "<?=$_SERVER['REQUEST_URI']?>",
        processData: false,
        contentType: false,
        data: formData,
        dataType: "json",
        success: function(data)	{
            // isRun = false;

            if(data.code=="0") {
				$('#cre_qr_img').attr('src', 'https://chart.googleapis.com/chart?chs=200x200&chld=M|0&cht=qr&chl=https://kornft.org/300/'+k_num);
				menu2("sel_w", "", 100);
				menu2("cre_qr_result", "show", 100);

                // Swal.fire({text: data.msg, icon: 'success', confirmButtonText: 'OK'})
                // .then((result) => {
                //     if (result.isConfirmed || result.isDismissed){
                //         location.reload();             
                //     }
                // });
                
            } else {
                Swal.fire({text: data.msg, icon: 'error', confirmButtonText: 'OK'});
            }
        }
    });

});

//$(document).on('click','#cre_nfc_btn',function(){});

$(document).on('click','#nfc_w_start1',function(){
	<? if(mobile_check() == "PC"): ?>
		menu2("cre_nfc_msg1", "", 100);
		menu2("cre_nfc_msg2", "show", 100);
		return;
	<? endif; ?>

	callApp('nfc_write', { value : 'KNCA NFC' });
});

$(document).on('click','#nfc_w_start2',function(){
<? if(mobile_check() == "PC"): ?>
		menu2("cre_nfc_msg2", "", 100);
				Swal.fire({text: 'NFC 등록 성공', icon: 'success', confirmButtonText: 'OK'});
		return;
	<? endif; ?>

	
	// nfc read res
	callApp('nfc_read_id');
	
});

function resApp(datas){
	try {
        datas = JSON.parse(datas);

		if(datas.type == "nfc_write"){
			menu2("cre_nfc_msg1", "", 100);
			menu2("cre_nfc_msg2", "show", 100);
		}
		else if(datas.type == "nfc_read_id"){
			if(datas.result.length == 0){
				Swal.fire({text: 'NFC 정보불러오는데 실패했습니다', icon: 'error', confirmButtonText: 'OK'});
				console.log('Not NFC read id');
				return;
			}
			else{
				edit_nfc_id(datas.result[0]);
			}
		}
    } catch (e) {
		console.log('resApp', e);
        return;
    }
}

function edit_nfc_id(nid){

	// if(isRun){
    //     return false;
    // }
    // isRun = true;

	const formData = new FormData();
    formData.append("type", "ajax" );
    formData.append("option", 'edit_nfc' );
    formData.append("wr_id", k_num );
	formData.append("nid", nid );

    $.ajax({
        type: 'post',
        url: "<?=$_SERVER['REQUEST_URI']?>",
        processData: false,
        contentType: false,
        data: formData,
        dataType: "json",
        success: function(data)	{
            // isRun = false;

            if(data.code=="0") {
				menu2("cre_nfc_msg2", "", 100);
				Swal.fire({text: 'NFC 등록 성공', icon: 'success', confirmButtonText: 'OK'});

                // Swal.fire({text: data.msg, icon: 'success', confirmButtonText: 'OK'})
                // .then((result) => {
                //     if (result.isConfirmed || result.isDismissed){
                //         location.reload();             
                //     }
                // });
                
            } else {
                Swal.fire({text: data.msg, icon: 'error', confirmButtonText: 'OK'});
            }
        }
    });

}

let c_page = 1;
function add_list(){
	c_page++;

	// if(isRun){
    //     return false;
    // }
    // isRun = true;

	const formData = new FormData();
    formData.append("type", "ajax" );
    formData.append("option", 'add_list' );
    formData.append("c_page", c_page );

    $.ajax({
        type: 'post',
        url: "<?=$_SERVER['REQUEST_URI']?>",
        processData: false,
        contentType: false,
        data: formData,
        dataType: "json",
        success: function(data)	{
            // isRun = false;
			$('#add_list').html('Load more');

            if(data.code=="0") {
				let datas = data.datas;

				for(var i=0;i<datas.length;i++){
					$('.lists').append( tag_list(datas[i]) );
                }

				if(data.check == 'end'){
					$("#add_list").hide();
                }
                else if(data.check == 'add'){
					$("#add_list").show();
                }
                
            } else {
                //Swal.fire({text: data.msg, icon: 'error', confirmButtonText: 'OK'});
            }
        }
    });

}

function tag_list(data){
	return `
					<div class="d-flex pb-4 k_items" num="${data.wr_id}">
						<div class="align-self-center">
							<img src="${data.show_img}" class="rounded-sm" width="50">
						</div>
						<div class="align-self-center ps-3">
							<h5 class="mb-n1 color-white txt_line">${data.wr_subject}</h5>
							<p class="font-600 opacity-40 mb-0" style="color: #655E7B;">${data.wr_datetime}</p>
						</div>
						<div class="align-self-center ms-auto">
							<i class="fa fa-chevron-right font-2- pe-1" style="color : #A79CCB;"></i>
						</div>
					</div>	
	`;
}

</script>