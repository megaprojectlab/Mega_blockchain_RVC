<div class="page-content header-clear-medium" style="padding-top: 50px; ">
    <h2 class="color-white">1. Exit App</h2>
    <a href="#" class="btn btn-m btn-full mb-3 rounded-0 text-uppercase font-900 shadow-s bg-blue1-dark n_call" num="1">Call</a>

    <h2 class="color-white">2. Open app browser</h2>
    <div style="margin-bottom: 10px;"></div>
    <div class="input-style input-style-2 input-required">
        <span class="color-highlight input-style-1-active input-style-1-inactive">URL</span>
        <input class="form-control" type="url" id="getUrl" value="https://www.google.com" placeholder="">
    </div>
    <div style="margin-bottom: 10px;"></div>
    <a href="#" class="btn btn-m btn-full mb-3 rounded-0 text-uppercase font-900 shadow-s bg-blue1-dark n_call" num="2">Call</a>

    <h2 class="color-white">3. Call Test</h2>
    <a href="#" class="btn btn-m btn-full mb-3 rounded-0 text-uppercase font-900 shadow-s bg-blue1-dark n_call" num="3">Call</a>


    <h2 class="color-white">4. Share</h2>
    <div style="margin-bottom: 10px;"></div>
    <div class="input-style input-style-2 input-required">
        <span class="color-highlight input-style-1-active input-style-1-inactive">Share Value</span>
        <input class="form-control" type="s_value" id="s_value" value="https://www.naver.com" placeholder="">
    </div>
    <div style="margin-bottom: 10px;"></div>
    <a href="#" class="btn btn-m btn-full mb-3 rounded-0 text-uppercase font-900 shadow-s bg-blue1-dark n_call" num="4">Call</a>

    <h2 class="color-white">5. QR Scanner</h2>
    <a href="#" class="btn btn-m btn-full mb-3 rounded-0 text-uppercase font-900 shadow-s bg-blue1-dark n_call" num="5">Call</a>

	<h2 class="color-white">6. NFC Read</h2>
    <a href="#" class="btn btn-m btn-full mb-3 rounded-0 text-uppercase font-900 shadow-s bg-blue1-dark n_call" num="6">Call</a>

	<h2 class="color-white">7. NFC id Read</h2>
    <a href="#" class="btn btn-m btn-full mb-3 rounded-0 text-uppercase font-900 shadow-s bg-blue1-dark n_call" num="7">Call</a>

	<h2 class="color-white">8. NFC Write</h2>
    <div style="margin-bottom: 10px;"></div>
    <div class="input-style input-style-2 input-required">
        <span class="color-highlight input-style-1-active input-style-1-inactive">NFC Write Value</span>
        <input class="form-control" type="text" id="nw_value" value="KNCA NFC" placeholder="">
    </div>
    <div style="margin-bottom: 10px;"></div>
    <a href="#" class="btn btn-m btn-full mb-3 rounded-0 text-uppercase font-900 shadow-s bg-blue1-dark n_call" num="8">Call</a>


	<h2 class="color-white">9. BarCoder Scanner</h2>
    <a href="#" class="btn btn-m btn-full mb-3 rounded-0 text-uppercase font-900 shadow-s bg-blue1-dark n_call" num="9">Call</a>

    <div style="margin-bottom: 30px;"></div>
    <h2 class="color-white">Result</h2>
    <textarea id="resu" class="form-control" placeholder="" style="height: 300px;"></textarea>

</div>

<script>
    $('#page').attr('style', 'background-color: #fff;');
    // alert('start');

    $('.n_call').on('click', function(e){
        var index = $('.n_call').index(this);
        var num = $('.n_call').eq(index).attr('num');

        console.log(index, num);

        if(num == 1){
            callApp('exitApp');
        }
        else if(num == 2){
            callApp('openAppBrowser', {url : $('#getUrl').val() });
        }
        else if(num == 3){
            callApp('test');
        }
        else if(num == 4){
            callApp('share', { value : $('#s_value').val() });
        }
        else if(num == 5){
            callApp('QRscan');
        }
		else if(num == 6){
			callApp('nfc_read');
		}
		else if(num == 7){
			callApp('nfc_read_id');
		}
		else if(num == 8){
			callApp('nfc_write', { value : $('#nw_value').val() });
		}
		else if(num == 9){
			callApp('BarCodeScan');
		}
    });

    function resApp(datas){
        // alert('res app');

        // datas = JSON.parse(datas);
        $('#resu').val( datas );

        // if(datas.code == 200){
        //     callMenuDeployer('instant-1');
        //     // $('#card_main').css({"background":"url("+datas.result[0].image+")"}).css({"background-size":"contain"});
        //     // $('#tag_id').html(`${datas.result[0].nfc_id}`);
        //     // $('#tag_content').html(`${datas.result[0].nfc_code}`);
        //     // $('#title').html(`${datas.result[0].title}`);
        //     // $('#de').html(`${datas.result[0].description}`);
        //     // $('#tag_date').html(`${datas.result[0].date}`);
        // }
        // else if(datas.code == 500){
        //     $('.toast_msg').html('<i class="fa fa-times mr-3"></i>'+datas.msg);
        //     $('#toast-1').toast('show');
        // }

        // if(datas.code == 200){
        //     if(datas.result.length != 0){
        //         $('#resu').val( datas.result[0] );
        //     }
        // }
    }
</script>