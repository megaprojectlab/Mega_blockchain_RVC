	<div id="menu-login-1" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="320" data-menu-effect="menu-over">
		<div class="menu-title mt-n1">
			<h1 class="color-white">Login</h1>
			<p class="color-white opacity-50">Please enter your credentials below</p>
			<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
		</div>

		<div class="content mb-0">
			<div class="input-style no-borders has-icon validate-field mb-4">
				<i class="fa fa-user"></i>
				<input type="name" class="form-control validate-name" id="form1a" placeholder="ID">
				<label for="form1a" class="color-white">ID</label>
				<i class="fa fa-times disabled invalid color-red-dark"></i>
				<i class="fa fa-check disabled valid color-green-dark"></i>
			</div>
			<div class="input-style no-borders has-icon validate-field mb-4">
				<i class="fa fa-lock"></i>
				<input type="password" class="form-control validate-text" id="form3a" placeholder="Password">
				<label for="form3a" class="color-white">Password</label>
				<i class="fa fa-times disabled invalid color-red-dark"></i>
				<i class="fa fa-check disabled valid color-green-dark"></i>
			</div>

			<div class="row"></div>


			<button id="loginBtn" class="btn btn-full btn-m shadow-l rounded-s text-uppercase font-900 bg-blue1-dark mt-n2 w-100">LOGIN</button>

			<?/*
			<div class="row">
				<div class="col-6">
					<a href="#" data-menu="menu-forgot-1" class="font-10">Forgot Password?</a>
				</div>
				<div class="col-6">
					<a data-menu="menu-register-1" href="#" class="float-end font-10">Create Account</a>
					<div class="clearfix"></div>
				</div>
			</div>
			*/?>
			
		</div>
	</div>


	<div id="menu-register-1" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="430" data-menu-effect="menu-over">
		<div class="menu-title mt-n1">
			<h1>Register</h1>
			<p class="color-theme opacity-50">Create an Account</p>
			<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
		</div>

		<div class="content mb-0 mt-0">
			<div class="input-style no-borders has-icon validate-field mb-4">
				<i class="fa fa-user"></i>
				<input type="name" class="form-control validate-name" id="form1ac" placeholder="Your User">
				<label for="form1ac" class="color-blue-dark font-10">Your User</label>
				<i class="fa fa-times disabled invalid color-red-dark"></i>
				<i class="fa fa-check disabled valid color-green-dark"></i>
				<em>(required)</em>
			</div>

			<div class="input-style no-borders has-icon validate-field mb-4">
				<i class="fa fa-at"></i>
				<input type="email" class="form-control validate-text" id="form2ac55" placeholder="Your Email">
				<label for="form2ac55" class="color-blue-dark font-10">Your Email</label>
				<i class="fa fa-times disabled invalid color-red-dark"></i>
				<i class="fa fa-check disabled valid color-green-dark"></i>
				<em>(required)</em>
			</div>

			<div class="input-style no-borders has-icon validate-field mb-4">
				<i class="fa fa-lock"></i>
				<input type="password" class="form-control validate-text" id="form3ac" placeholder="Choose Password">
				<label for="form3ac" class="color-blue-dark font-10">Choose Password</label>
				<i class="fa fa-times disabled invalid color-red-dark"></i>
				<i class="fa fa-check disabled valid color-green-dark"></i>
				<em>(required)</em>
			</div>
			<div class="input-style no-borders has-icon validate-field mb-4">
				<i class="fa fa-lock"></i>
				<input type="password" class="form-control validate-text" id="form4ac" placeholder="Confirm Password">
				<label for="form4ac" class="color-blue-dark font-10">Confirm Password</label>
				<i class="fa fa-times disabled invalid color-red-dark"></i>
				<i class="fa fa-check disabled valid color-green-dark"></i>
				<em>(required)</em>
			</div>
			<div class="row">
				<div class="col-6">
					<a href="#" data-menu="menu-forgot-1" class="font-10">Forgot Password?</a>
				</div>
				<div class="col-6">
					<a data-menu="menu-login-1" href="#" class="float-end font-10">Login Here</a>
					<div class="clearfix"></div>
				</div>
			</div>
			<a href="#" class="btn btn-full btn-m shadow-l rounded-s text-uppercase font-900 bg-blue-dark mt-n2">Create account</a>
		</div>
	</div>


	<div id="menu-forgot-1" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="240" data-menu-effect="menu-over">
		<div class="menu-title mt-n1">
			<h1>Forgot</h1>
			<p class="color-theme opacity-50">Recover your account</p>
			<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
		</div>

		<div class="content mb-0 mt-n2">
			<div class="input-style no-borders has-icon validate-field mb-4">
				<i class="fa fa-at"></i>
				<input type="email" class="form-control validate-text" id="form24a" placeholder="Email">
				<label for="form24a" class="color-blue-dark">Email</label>
				<i class="fa fa-times disabled invalid color-red-dark"></i>
				<i class="fa fa-check disabled valid color-green-dark"></i>
				<em>(required)</em>
			</div>
			<div class="row">
				<div class="col-6">
					<a href="#" data-menu="menu-login-1" class="font-10">Login Here</a>
				</div>
				<div class="col-6">
					<a data-menu="menu-register-1" href="#" class="float-end font-10">Create Account</a>
					<div class="clearfix"></div>
				</div>
			</div>
			<a href="#" class="btn btn-full btn-m shadow-l rounded-s text-uppercase font-900 bg-red-dark mt-n2">Reset Password</a>
		</div>
	</div>

	<div id="sel_w" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-over" data-menu-height="200" >
		<div class="content text-center">

			<div style="margin-bottom:20px;"></div>

			<p class="color-white">선택해주세요.</p>

			<div style="margin-bottom:20px;"></div>

			<a href="#" id="cre_nfc_btn" data-menu="cre_nfc_msg1" class="btn btn-m btn-full bg-blue1-dark text-uppercase rounded-sm font-800">NFC 등록</a>

			<div style="margin-bottom:20px;"></div>
			<?/*
			<a href="#" id="cre_qr_btn" class="btn btn-m btn-full bg-blue1-dark text-uppercase rounded-sm font-800">QR 코드 생성</a>

			<div style="margin-bottom:20px;"></div>
			*/?>
		</div>

	</div>

	<div id="cre_qr_result" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-over" >
		<div class="content text-center">

			<div style="margin-bottom:20px;"></div>

			<div style="display: flex;">
				<img id="cre_qr_img" src="https://chart.googleapis.com/chart?chs=200x200&chld=M|0&cht=qr&chl=https://kornft.org/300/138" style="margin: auto !important;">
			</div>

			<div style="margin-bottom:20px;"></div>

			<p class="color-white">QR코드 생성이 되었습니다. QR코드는 KNCA 사이트에서도 확인이 가능합니다.</p>

			<div style="margin-bottom:20px;"></div>

			<div class="row mb-0">
				<div class="col-12">
					<a href="#" class="close-menu btn btn-full btn-m bg-blue1-dark font-700 text-uppercase rounded-sm">CLOSE</a>
				</div>
			</div>

			<div style="margin-bottom:20px;"></div>
		</div>
	</div>


	<div id="cre_nfc_msg1" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-over" >
		<div class="content text-center">

			<div style="margin-bottom:20px;"></div>

			<div style="display: flex;">
				<img src="https://www.freeiconspng.com/uploads/nfc-icon-6.png" style="margin: auto !important;width: 120px;height: 120px;">
			</div>

			<div style="margin-bottom:20px;"></div>

			<p class="color-white" >미사용된 NFC를 활성화합니다.</p>

			<div style="margin-bottom:20px;"></div>

			<div class="row mb-0">
				<div class="col-12">
					<a href="#" id="nfc_w_start1" class="btn btn-full btn-m bg-blue1-dark font-700 rounded-sm">START</a>
				</div>
			</div>

			<div style="margin-bottom:20px;"></div>
		</div>
	</div>



	<div id="cre_nfc_msg2" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-effect="menu-over" >
		<div class="content text-center">

			<div style="margin-bottom:20px;"></div>

			<div style="display: flex;">
				<img src="https://www.freeiconspng.com/uploads/nfc-icon-6.png" style="margin: auto !important;width: 120px;height: 120px;">
			</div>

			<div style="margin-bottom:20px;"></div>

			<p class="color-white">해당 NFT등기에 NFC를 등록합니다.</p>

			<div style="margin-bottom:20px;"></div>

			<div class="row mb-0">
				<div class="col-12">
					<a href="#" id="nfc_w_start2" class="btn btn-full btn-m bg-blue1-dark font-700 rounded-sm">START</a>
				</div>
			</div>

			<div style="margin-bottom:20px;"></div>
		</div>
	</div>

	<div id="instant-1" class="menu menu-box-right" data-menu-width="cover" data-menu-effect="menu-over">

        <a href="#" class="close-menu notch-clear  btn btn-full btn-m rounded-s font-900 me-2 ms-2 mt-2" style="background-color: #8A8AD3;">Close</a>

        <div class="content">

            
			<div class="text-center">
				<img src="/theme/knca/img/knca_logo.png" alt="knca_logo" style="width:170px;">
			</div>

			<div style="margin-bottom:20px;"></div>

			<h2 class="mt20 fw-800 font-24 text-center" style="color: #fff;">세계 최초 "생활속의 NFT등기소" &nbsp;<br><small class="fw-700 text-gray font-18">디지털화,NFT등록,열람,인증서비스</small></h2>
				
			<div style="margin-bottom:20px;"></div>

			<p style="color: #fff;">한국 NFT 공인인증원(KNCA : Korea NFT Certificate Institute)은 개인이나 기업이 보유한 대체불가능한 아이템들을 블록체인 기술을 활용해서 NFT화 할수 있도록 지원합니다. 아날로그 또는 디지털 아이템을 전문가가 아닌 누구나 쉽게 접근하고 활용할수 있도록, 온라인 및 오프라인에 NFT등록 인증원을 설립하였습니다.</p>

			<div style="margin-bottom:50px;"></div>

			<h3 style="padding: 1px 20px;border-left: 8px solid rgb(17, 131, 238);font-size: 20px;margin-bottom: 20px;line-height: 1.3em;color: #fff;">NFT공인인증 원스탑서비스</h3>

			<div style="margin-bottom:20px;"></div>

			<div style="background: none;border: 1px solid #8A8AD3 !important; border-radius: 15px;padding: 10px 10px;">
				<div style="display: flex; flex-direction: column;">
					<p style="color: #fff;"><b>디지털화</b>  :  다양한 아이템들을 특허출원된 기술로 디지털화하고,</p>
					<p style="color: #fff;"><b>NFT 검증</b> :  아이템의 실체와 소유권,저작권, 권리관계를 검증합니다.</p>
					<p style="color: #fff;"><b>NFT 등록</b> :  이를 대체불가능 NFT토큰으로 해쉬화하여 블록체인에 등록합니다.</p>
					<p style="color: #fff;"><b>NFT 열람</b> :  등록된 NFT를 누구나 등기부등본처럼 내역을 열람할수 있고,</p>
					<p style="color: #fff;"><b>NFT 인증</b> :  실제 원본임을 실사를 통해 인증원에서 보증하는 서비스입니다.</p>
					<p style="color: #fff;"><b>인증마크</b> :   각 NFT거래소에 공인인증 마크를 사용하여 신뢰성 공시하는 서비스 입니다.</p>
				</div>
			</div>

			<div style="margin-bottom:20px;"></div>

			<p style="color: #fff;">다년간의 블록체인, NFT개발 수행능력과 고객에 대한 서비스 마인드, 고객과의 커뮤니케이션 능력을 바탕으로 기업들의 수 많은 프로젝트들을 성공적으로 이끌어온 전문가 그룹입니다. 고객의 니즈에 맞는 최고의 품질과 서비스,그리고 나아가 고객이 기대하는 그 이상의 서비스를 제공함으로서 고객과의 탄탄한 신뢰를 이끌어 가겠습니다.</p>

			<div style="margin-bottom:20px;"></div>


        </div>

        <a href="#" class="close-menu notch-clear  btn btn-full btn-m rounded-s font-900 me-3 ms-3 mt-2 mb-3" style="background-color: #8A8AD3;">Close</a>
    </div>


	<div id="instant-2" class="menu menu-box-right" data-menu-width="cover" data-menu-effect="menu-over">

		<a href="#" class="close-menu notch-clear  btn btn-full btn-m rounded-s font-900 me-2 ms-2 mt-2" style="background-color: #8A8AD3;">Close</a>

        <div class="content">

			<p style="color: #fff;">NFT등기신청은 NFT의 소유권, 저작권확인 등의 절차를 거쳐 NFT 자산을 등기하여 실물 자산으로 활용하고자 하는 신청 절차이며, NFT등기 신청 시점에 소유권 발생 여부를 결정하는 것이 아님을 유의하시기 바랍니다.</p>

			<div style="margin-bottom:20px;"></div>

			<h3 style="padding: 1px 20px;border-left: 8px solid rgb(17, 131, 238);font-size: 20px;margin-bottom: 20px;line-height: 1.3em;color: #fff;">NFT등기증명이란?</h3>

			<div style="margin-bottom:20px;"></div>

			<p style="color: #fff;">대체 불가능한 자산 (Non Fungible Token)을 블록체인 기술을 활용, 분산화하여 등록하고 인증하는 방법입니다.</p>

			<div style="margin-bottom:20px;"></div>


			<h3 style="padding: 1px 20px;border-left: 8px solid rgb(17, 131, 238);font-size: 20px;margin-bottom: 20px;line-height: 1.3em;color: #fff;">NFT시장이 급성장함에 따른 품질문제, 저작권, 소유권 문제발생이 증가하고 있습니다.</h3>

			<div style="margin-bottom:20px;"></div>

			<p style="color: #fff;">한국NFT공인인증원에서는 NFT가 블록체인에 등록되면서 발생하는 소유권, 저작권 등의 문제를 개선하기 위해, 등록 사전에 직접 NFT의 실체를 확인하고 서류검증, 실사검증의 신뢰 보강 단계를 거쳐 블록체인에 저장합니다.</p>

			<div style="margin-bottom:20px;"></div>


			<h3 style="padding: 1px 20px;border-left: 8px solid rgb(17, 131, 238);font-size: 20px;margin-bottom: 20px;line-height: 1.3em;color: #fff;">블록체인에 저장된 NFT 정보를 실생활에서 이해하고 활용하기 어렵습니다.</h3>

			<div style="margin-bottom:20px;"></div>

			<p style="color: #fff;">블록체인에 저장된 암호화된 정보를 실생활에서 이해하고 활용하기 어려운 문제점을 개선하고자, 한국NFT공인인증원에서는 복호화 기술을 특허출원하였고, 생활속의 증명서나 등기부등본 형태로 표시해주는 NFT증명서, 등기부등본 열람/발급 서비스를 제공합니다.</p>

			<div style="margin-bottom:20px;"></div>


			<div class="text-center" style="border-radius: 10px;">
				<img src="https://kornft.org/data/content/ab_nft_t" alt="" style="width: 100%;border-radius: 10px;">
			</div>

			<div style="margin-bottom:20px;"></div>



        </div>

        <a href="#" class="close-menu notch-clear  btn btn-full btn-m rounded-s font-900 me-3 ms-3 mt-2 mb-3" style="background-color: #8A8AD3;">Close</a>
    </div>


	<div id="knca_result" class="menu menu-box-right" data-menu-width="cover" data-menu-effect="menu-over" style="padding: 40px 30px;">

		<button  type="button" class="close-menu btn btn-outline-light rounded-sm" style="padding: 15px 10px;width: 100%;font-size: 20px;">
			<b>Close</b>
		</button>

		<div style="margin-bottom:20px;"></div>

        <div class="content">
            <img id="knca_re_img" src="https://artixnft.com/assets/images/nfts/5a7e81b8b27411173f784d2bfdefcf91.png" class="rounded-sm" style="    width: 100%;">

			<div style="margin-bottom:20px;"></div>


            <div class="divider mt-4" style=" background-color: #2c2c2c;"></div>
			<div style="display: flex;">
				<div>
					<p style="color:#fff;">등기번호</p>
				</div>

				<div style="margin-left: auto;">
					<p id="knca_re_val1" style="color:#8a8ad3;">KNCA-....</p>
				</div>
			</div>


			<div class="divider mt-4" style=" background-color: #2c2c2c;"></div>
			<div style="display: flex;">
				<div>
					<p style="color:#fff;">등기명칭</p>
				</div>

				<div style="margin-left: auto;">
					<p id="knca_re_val2" class="txt_line" style="color:#8a8ad3; text-align: right;">title</p>
				</div>
			</div>


			<div class="divider mt-4" style=" background-color: #2c2c2c;"></div>
			<div style="display: flex;">
				<div>
					<p style="color:#fff;">등기종류</p>
				</div>

				<div style="margin-left: auto;">
					<span id="knca_re_val3" class="badge bg-primary" style="font-size: 20px;">일반등기</span>
				</div>
			</div>

			<div class="divider mt-4" style=" background-color: #2c2c2c;"></div>
			<div style="display: flex;">
				<div>
					<p style="color:#fff;">NFT 토큰ID	</p>
				</div>

				<div style="margin-left: auto;">
					<p id="knca_re_val4" class="txt_line" style="color:#8a8ad3; text-align: right;">title</p>
				</div>
			</div>

			<div class="divider mt-4" style=" background-color: #2c2c2c;"></div>
			<div style="display: flex;">
				<div>
					<p style="color:#fff;">컨트렉트 주소</p>
				</div>

				<div style="margin-left: auto;">
					<p id="knca_re_val5" class="txt_line" style="color:#8a8ad3; text-align: right;">title</p>
				</div>
			</div>
		</div>
            
    </div>

