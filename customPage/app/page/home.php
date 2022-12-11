		<div class="content" style="display: flex;flex-direction: column;margin: 0px 0px;">
			<div style="margin-bottom:0px;"></div>

            <div class="d-flex" style="margin: 0px 0px;">
                <div class="align-self-center ml-auto">
                    <img src="./assets/img/knca_logo1.png" class="" style="width: 130px;height: 64px;">
                </div>
            </div>

			<div style="margin-bottom:0px;"></div>

			<div  style=" display: flex;width: 100%;padding: 0px 30px;">

				<div id="n_scan" class="" style="background-color: #8a8ad2;border-radius: 20px;height: 154px;padding: 20px 20px;display: flex; flex-direction: column;width: 100%;">
					<p class="mb-1 color-white font-18"><b>NFC Chip</b></p>
					<p class="opacity-80" style="color: #C1C1FF;">Scan the Chip</p>

					<div style="display: flex; margin-top: auto;">
						<img src="./assets/img/nfc_icon1.svg" class="" style="margin-left: auto;">
					</div>
				</div>

				<div style="width:20px;"></div>

				<div id="qr_scan" class="" style="background-color: #566892;border-radius: 20px;height: 154px;padding: 20px 20px;display: flex; flex-direction: column;width: 100%;">
					<p class="mb-1 color-white font-18"><b>QR Code</b></p>
					<p class="opacity-80" style="color: #C1C1FF;">Scan the Code</p>

					<div style="display: flex; margin-top: auto;">
						<img src="./assets/img/qr_icon1.svg" class="" style="margin-left: auto;">
					</div>
				</div>

			</div>

			<div style="margin-bottom:25px;"></div>

			<div style="margin: 0px 30px; position: relative;" data-menu="instant-1">
				<img src="./assets/img/info_bg1.png" class="w-100" style="height: 100px;" >
				<div style="position: absolute;top: 20px;left: 25px;">
					<h1 class="color-white text-center mb-0">한국 NFT 공인인증원</h1>
					<p class="opacity-80 font-11" style="color: #9D9D9D;">Read More</p>
				</div>
			</div>

			<div style="margin-bottom:25px;"></div>

			<div style="margin: 0px 30px; position: relative;" data-menu="instant-2">
				<img src="./assets/images/pictures/15.jpg" class="w-100" style="height: 100px;border-radius: 12px; opacity: 0.4;" >
				<div style="position: absolute;top: 20px;left: 25px;">
					<h1 class="color-white text-center mb-0">NFT 등기증명이란?</h1>
					<p class="opacity-80 font-11" style="color: #9D9D9D;">Read More</p>
				</div>
			</div>


<?/*
			<div style="margin: 0px 30px; position: relative;" data-menu="knca_result">
				<img src="./assets/images/pictures/15.jpg" class="w-100" style="height: 100px;border-radius: 12px; opacity: 0.4;" >
				<div style="position: absolute;top: 20px;left: 25px;">
					<h1 class="color-white text-center mb-0">NFT 등기증명이란?</h1>
					<p class="opacity-80 font-11" style="color: #9D9D9D;">Read More</p>
				</div>
			</div>
*/?>

			


			<div style="margin-bottom:300px;"></div>

        </div>
<script>    
$('#n_scan').on('click', function(e){
	callApp('nfc_read_id');
});

$('#qr_scan').on('click', function(e){
	callApp('QRscan');
});

$('#link_btn1').on('click', function(e){
	return;
	<? if(mobile_check() == "PC"): ?>
		window.open('https://kornft.org/');
	<? else: ?>
		callApp('openAppBrowser', {url : 'https://kornft.org/' });
	<? endif; ?>
});


function resApp(datas){
	try {
        datas = JSON.parse(datas);

		if(datas.type == "nfc_read_id"){
			if(datas.result.length == 0){
				console.log('Not NFC read id');
				Swal.fire({text: 'NFC 정보불러오는데 실패했습니다', icon: 'error', confirmButtonText: 'OK'});
				return;
			}
			else{
				get_knca_data(datas.result[0]);
			}
		}
		else if(datas.type == "QRscan"){
			get_knca_data(datas.result[0], 'qr');
		}
    } catch (e) {
		console.log('resApp', e);
        return;
    }
}

function get_knca_data(value, ftype = 'nfc'){
	// if(isRun){
    //     return false;
    // }
    // isRun = true;

	const formData = new FormData();
    formData.append("type", "ajax" );


	if(ftype == 'nfc'){
		formData.append("option", 'get_nfc_data' );
		formData.append("nid", value );
	}
	else if(ftype == 'qr'){
		formData.append("option", 'get_qr_data' );
		formData.append("knca_url", value );
	}
	
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
				$('#knca_re_img').attr('src', data.result[0]['show_img'] );
				$('#knca_re_val1').text(data.result[0]['wr_11']);
				$('#knca_re_val2').text(data.result[0]['wr_subject']);
				$('#knca_re_val3').text(data.result[0]['wr_12']);
				$('#knca_re_val4').text(data.result[0]['wr_40']);
				$('#knca_re_val5').text(data.result[0]['wr_41']);

				menu2("knca_result", "show", 100);
				
				//alert(data.result);

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

</script>