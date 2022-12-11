		<div class="content" style="display: flex;flex-direction: column;margin: 10px 0px;">
			<div style="margin-bottom:30px;"></div>

            <div class="d-flex" style="margin: 0px 35px;">
                <div class="align-self-center ml-auto">
                    <a href="./?p=home"><img src="./assets/img/knca_logo1.png" class="shadow-xl" style=""></a>
                </div>
            </div>

			<div style="margin-bottom:20px;"></div>
<?/*
			<button data-menu="knca_result" type="button" class="btn btn-outline-light rounded-sm" style="padding: 15px 10px;width: 100%;font-size: 20px;">
						<b>Read 성공 팝업</b>
					</button>
*/?>
			<div style="margin-bottom:20px;"></div>

			<div class="card card-style gradient-pink shadow-bg shadow-bg-l" style="margin: 30px 30px;margin-top: 0px;">
				<div class="content">
					<h1 class="mb-1 color-white">NFC Read</h1>
					<p class="opacity-80" style="color: #C1C1FF;">
						Scan the NFC chip
					</p>

					<div style="display: flex; height: 80px;">

						<i class="fas fa-search" style="margin-top: auto;margin-left: auto;color: #4E6EB9;font-size: 50px;"></i>

					</div>


					<div style="margin-bottom:20px;"></div>


					<button id="n_scan" type="button" class="btn btn-outline-light rounded-sm" style="padding: 15px 10px;width: 100%;font-size: 20px;">
						<b>NFC Scan</b>
					</button>

					
				</div>
			</div>


			<div class="card card-style gradient-pink shadow-bg shadow-bg-l" style="margin: 30px 30px;margin-top: 0px;">
				<div class="content">
					<h1 class="mb-1 color-white">QR Code Read</h1>
					<p class="opacity-80" style="color: #C1C1FF;">
						Scan the QR Code
					</p>

					<div style="display: flex; height: 80px;">

						<i class="fas fa-search" style="margin-top: auto;margin-left: auto;color: #4E6EB9;font-size: 50px;"></i>

					</div>


					<div style="margin-bottom:20px;"></div>


					<button id="qr_scan" type="button" class="btn btn-outline-light rounded-sm" style="padding: 15px 10px;width: 100%;font-size: 20px;">
						<b>QR Code Scan</b>
					</button>

					
				</div>
			</div>




			<div style="margin-bottom:200px;"></div>

        </div>

<script>

//menu2("knca_result", "show", 100);

$('#n_scan').on('click', function(e){
	callApp('nfc_read_id');
});

$('#qr_scan').on('click', function(e){
	callApp('QRscan');
});


function resApp(datas){
	try {
        datas = JSON.parse(datas);

		if(datas.type == "nfc_read_id"){
			if(datas.result.length == 0){
				console.log('Not NFC read id');
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