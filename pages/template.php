<?php
/* copyright (c) websiting.co.kr */

include_once('../common.php');

/* 페이지설정 코드 입력! */

	//페이지 제목 지정
	$g5['title'] = "NFT등기신청 안내";
	
	//본 페이지에 해당되는 css가 있을 경우 아래 css 삽입 코드를 활성화 해주시기 바랍니다.
	//add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/page.css?ver='.G5_CSS_VER.'">', 0);

/* 페이지설정 코드 입력! */
include_once('../head.php');
?>



<div class=" flex-x-center pt20">   
         <?if($is_member){ ?>
         <div><a href="/customPage/proof_call.php?wr_id=<?=$wr_id?>&mb_id=<?=$member['mb_id']?>" class="btn_b02 btn"><i class="fa fa-list" aria-hidden="true"></i> NFT등록증명서 열람/발급</a></div>
      <?} else { ?>
        <div onclick="alert('KNCA 회원 로그인 후 이용가능한 서비스입니다.')" class="ml10 btn_b02 btn"><i class="fa fa-list" aria-hidden="true"></i> NFT 등록증명서 열람/발급 </div>
         <?}?>


         <?if($is_member){ ?>
         <div><a href="/customPage/proof_call.php?wr_id=<?=$wr_id?>&mb_id=<?=$member['mb_id']?>" class="ml10 btn_b02 btn bg-red"><i class="fa fa-list" aria-hidden="true"></i> NFT 등기부등본 열람/발급</a></div>
      <?} else { ?>
        <div onclick="alert('KNCA 회원 로그인 후 이용가능한 서비스입니다.')" class="ml10 btn_b02 btn bg-red"><i class="fa fa-list" aria-hidden="true"></i> NFT등기부등본 열람/발급 </div>
         <?}?>


   </div>
   





    <!-- 등기신청하기 -->

    <h3 class="h3_tl mt30 mb20"> 신규 등기신청 </h3>

<div class="row bg-dark py-30 px-10 border-2">
    <div class="col">    <a type="button" href="https://kornft.org/300/write?wr_12=1"  class="btn fw-900 py-20 btn-md btn-gray">일반등기 신청</a></div>
    <div class="col">    <a type="button" href="https://kornft.org/300/write?wr_12=2"  class="btn fw-900 py-20 btn-md btn-primary">확인등기 신청</a> </div>
    <div class="col">  <a type="button" href="https://kornft.org/300/write?wr_12=3"  class="btn fw-900 py-20 btn-md btn-danger">검증등기 신청</a></div>
</div>






	<h3 class="h3_tl mt80 mb20">01. NFT 등기란 ?</h3>

	<div class="cont_text">
         
            NFT등기신청은 NFT의 소유권, 저작권확인 등의 엄격한 검증 절차를 거쳐,<br> NFT 자산을  KNCA의 특허기술로 블록체인에 등기하여 위변조없이 저장하는 절차를 말합니다.
            <br>
            이러한 KNCA등기 시스템을 통해 실질적으로 자산의 소유권이나 권리를 입증할 수 있어, 실질적으로 댜양한 자산활동에 활용할 수 있습니다.
      
	</div>




    <h3 class="h3_tl mt40 mb20">02. 등기신청 절차 </h3>

    <div class="row row-cols-1 row-cols-sm-2 ">
        <div class="col mb20">
                    <div class="panel panel-gray">
                    <div class="panel-heading">
                        <h5 class="panel-title fw-900">1단계 : 등기종류 선택 </h5>
                    </div>
                    <div class="panel-body fs-14">
                        <ul style="list-style:circle;padding-left:20px;">
                            <li><b>일반등기</b> 기록보존용(서류나실사검증없음) </li>
                            <li><b>확인등기</b> 물건에 대한 증빙서류 제출확인 </li>
                            <li><b>검증등기</b> 인증원에서 실사/현장검증후 등록 </li>
                        <ul>
                    </div>
                </div>
        </div>
        <div class="col mb20">
                    <div class="panel panel-gray">
                    <div class="panel-heading">
                        <h5 class="panel-title fw-900">2단계 : 등기신청 </h5>
                    </div>
                    <div class="panel-body fs-14">
                        <ul style="list-style:circle;padding-left:20px;">
                            <li><b>일반등기</b> 신청서류 작성 및 제출 </li>
                            <li><b>확인등기</b> 신청서류 작성 및 증빙서류제출</li>
                            <li><b>검증등기</b> 신청서류,증빙서류,실사검증 신청</li>
                        <ul>
                    </div>
                </div>
        </div>
        <div class="col mb20">
                    <div class="panel panel-gray">
                    <div class="panel-heading">
                        <h5 class="panel-title fw-900">3단계 : 등기수수료 납부 </h5>
                    </div>
                    <div class="panel-body fs-14">
                        <ul style="list-style:circle;padding-left:20px;">
                            <li><b>일반등기</b> 50,000원 </li>
                            <li><b>확인등기</b> 100,000원 </li>
                            <li><b>검증등기</b> 등기물건에 따라 상담후 개별책정</li>
                        <ul>
                    </div>
                </div>
        </div>
        <div class="col mb20">
                    <div class="panel panel-gray">
                    <div class="panel-heading">
                        <h5 class="panel-title fw-900">4단계 : 등록심사 진행</h5>
                    </div>
                    <div class="panel-body fs-14">
                        <ul style="list-style:circle;padding-left:20px;">
                            <li><b>일반등기</b> 제출서류 이상없을시 1시간이내 승인 </li>
                            <li><b>확인등기</b> 서류검증 후 24시간이내 승인(보완필요시 3일이내)</li>
                            <li><b>검증등기</b> 인증원에서 개별연락,일정,실사/현장검증후 승인</li>
                        <ul>
                    </div>
                </div>
        </div>
       
   </div>
   



<h3 class="h2_tl mt20 mb20">등기신청 전체 프로세스 </h3>

<div class="cont_text">
		<ul class="figure_list">
			<li>
				<i class="fa fa-desktop"></i>
				<strong>1단계</strong>
				<span>등기종류 선택</span>
			</li>
			<li>
				<i class="fa fa-code"></i>
				<strong>2단계</strong>
				<span>등기신청서 작성</span>
			</li>
			<li>
				<i class="fa fa-shopping-cart"></i>
				<strong>3단계</strong>
				<span>등기수수료 납부</span>
			</li>
			<li>
				<i class="fa fa-android"></i>
				<strong>4단계</strong>
				<span>등기심사 및 승인등록</span>
			</li>
		</ul>
	</div>



<h3 class="h3_tl mt20 mb20">01단계 : 등기종류 선택 </h3>
<p class="mb20">
귀하가 활용하고자 하는 범위에 따라 등기 종류를 선택합니다.<br> 등기하고자하는 물건의 소유권자인 경우에만 등기신청이 가능합니다. 
</p>

<div class="basic_table">
		<table>
			<colgroup>
				<col style="width:25%;">
				<col style="width:75%;">
			</colgroup>
			<thead>
				<tr>
					<th>등기종류</th>
					<th>진행절차</th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>일반등기</th>
					<td>● 기록 보존용으로 별도의 개인확인절차 또는 실사검증없이 NFT등기신청이 가능합니다.
                        <br>●  일반등기로 신청하는 경우 기타 등기에 비해 등기물건에 대한 신뢰성은 높게 평가되지 않습니다. </td>
		
				</tr>
				<tr>
					<th>확인등기</th>
					<td>● 5가지 이상의 등록자 개인확인에 필요한 서류등을 확인하여 승인 가능여부를 판단합니다.<br> ● 일반등기에 비해 신뢰도가 보강된 등기 종류입니다.</td>
				
				</tr>
				<tr>
					<th>검증등기</th>
					<td>● 한국NFT공인인증원의 전문 검증위원이 개인확인과 실사검증을 통하여 등기물건의 실체를 확인한 후 등기 승인이 이루어집니다. <br>● 가장 높은 신뢰성을 가진 등기종류로 예술품, 명품 등 가치가 높은 등기물건일수록 검증등기를 통하여 실체를 확실히 하여 자산으로 활용할 수 있는 신뢰도를 부여합니다. </td>
				
				</tr>
            </tbody>
			</tfoot>
		</table>
	</div>


<h3 class="h3_tl mt50 mb20">02단계 : 등기신청 </h3>
<p class="mb20">
한국NFT공인인증원 홈페이지를 통해 희망하는 등기종류를 선택하여 관련 서류를 제출합니다. 
</p>

<div class="basic_table">
		<table>
			<colgroup>
				<col style="width:25%;">
				<col style="width:75%;">
			</colgroup>
			<thead>
				<tr>
					<th>등기종류</th>
					<th>진행절차</th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>일반등기</th>
					<td>● 일반등기의 경우 인증원에서 제공한 신청 양식 작성하여 제출합니다.
                        </td>
		
				</tr>
				<tr>
					<th>확인등기</th>
					<td>● 확인등기의 경우 인증원에서 제공한 신청 양식과 [확인등기]를 위한 개인확인 서류를 첨부하여 제출합니다. </td>
				
				</tr>
				<tr>
					<th>검증등기</th>
					<td>● 검증등기의 경우 인증원에서 제공한 신청 양식과 [검증등기]를 위한 개인확인 서류를 첨부하고, 실사검증 예약신청을 양식을 작성하여 제출합니다. </td>
				
				</tr>
            </tbody>
			</tfoot>
		</table>
	</div>


    

<h3 class="h3_tl mt50 mb20">03단계 : 등기 수수료납부 </h3>
<p class="mb20">
각 등기종류에 따라 관련 신청이 접수되면 ‘나의NFT현황’페이지를 통해 수수료 결제를 진행합니다. <br>등기 접수 후 3일 이내 결제가 이루어지지 않는 경우 등기신청은 무효화 되며, 기 제출한 서류는 폐기처리됩니다. 
</p>

<div class="basic_table">
		<table>
			<colgroup>
				<col style="width:25%;">
				<col style="width:75%;">
			</colgroup>
			<thead>
				<tr>
					<th>수수료종류</th>
					<th>수수료</th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>일반등기</th>
					<td>● 고정수수료율 : 건당 5만원
                        </td>
		
				</tr>
				<tr>
					<th>확인등기</th>
					<td>● 고정수수료 : 건당 10만원(서류심사비 포함) </td>
				
				</tr>
				<tr>
					<th>검증등기</th>
					<td>● 검증등기의 경우 전문 실사단 실사검증 이전에 물건종류에 따라 수수료 일부를 보증금으로 선납부하여야 하며, 등기물건에 따라 수수료는 개별 견적으로 진행됩니다.</td>
				
				</tr>
            </tbody>
			</tfoot>
		</table>
	</div>



<h3 class="h3_tl mt50 mb20">04단계 : 등기 심사 및 승인 </h3>
<p class="mb20">
한국NFT공인인증원 홈페이지를 통해 신청한 등기는 종류에 따라 심사가 진행되며, 한국NFT 전문 심사위원이 검증 후 블록체인에 등록합니다. </p>

<div class="basic_table">
		<table>
			<colgroup>
				<col style="width:25%;">
				<col style="width:75%;">
			</colgroup>
			<thead>
				<tr>
					<th>등기종류</th>
					<th>진행현형</th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>일반등기</th>
					<td>● 일반등기의 경우 제출한 신청양식 확인 후 제출 양식에 오류가 없는 것이 확인되면 1시간 내에 등기를 승인합니다. 
                        </td>
		
				</tr>
				<tr>
					<th>확인등기</th>
					<td>● 확인등기의 경우 인증원에서 제공한 신청 양식과 [확인등기]를 위한 개인확인 서류를 제출하여야 한다.
                        제출된 물건에 대한 증빙서류가 신청내용과 맞으면 24시간이내 등기가 완료됩니다.
                        <br>● 단, 보완이 필요한 경우 최대 3일 이내에 보완하여야 등기를 승인합니다.  </td>
				
				</tr>
				<tr>
					<th>검증등기</th>
					<td>●검증등기의 경우 인증원에서 제공한 신청 양식과 [검증등기]를 위한 개인확인 서류확인 및 개별 연락을 통해 현장 실사검증 일정을 조율합니다. <br> ●  한국NFT공인인증원 전문 검증단의 현장검증이 끝난 후 검증 결과에 따라 등기 승인여부를 결정합니다. 실사검증 후 최대 7일 이내 결과가 확정됩니다.</td>
				
				</tr>
            </tbody>
			</tfoot>
		</table>
	</div>


    <p class="my-20 cont_text_info text-red bg-yellow1">
    ● 심사 현황은 ‘나의NFT현황’ 페이지에서 확인할 수 있으며 보완서류 요청이 있을 수 있습니다. <br> ● 보완서류는 7일내에 이루어져야 하며 7일내에 제출이 불가한 경우 개별 연락을 통해 제출일을 연기할 수 있습니다. <br>
    ● 심사반려 시 7일 이내 개별 연락을 통해 이의를 신청할 수 있으며 7일 이후 해당 신청건은 무효처리 됩니다. 
    </p>


















    <h2 class="h2_title"> 서브페이지 웹진형 스타일 코딩 샘플</h2>
	<div class="cont_text_important">
		subBoxWebzineStyle2 ~ subBoxWebzineStyle5 클래스로 2단~5단 구성까지 적용이 가능합니다.
	</div>
	<h3 class="h3_title"> 4단구성 사용 예</h3>
	<div class="subBoxWebzineStyle subBoxWebzineStyle4">
		<ul>
			<li>
				<a>
					<i><img src="https://kornft.org/data/file/nft_registry/thumb-2109411217_MPzwmx5d_85b515fd04b58ba013debb655c2575fd9683772c_202x150.png" alt=""></i>
					<strong>COMPANY</strong>
					<em>핑크블라썸 테마는 트랜디한 레이아웃에 어떤 컨셉이든 잘 어울리는 심플한 구조로 제작되어 있어 핑크블라썸 테마로 만들 수 있는 웹사이트의 종류는 정말 다양합니다. 어떤 업종! 어떤 종류의 홈페이지도 뚝딱 만들어 낼 수 있는 핑크블라썸 테마로 홈페이지를 제작해 보세요!</em>
				</a>
			</li>
			<li>
				<a>
					<i><img src="https://kornft.org/data/file/nft_registry/thumb-2109411217_MPzwmx5d_85b515fd04b58ba013debb655c2575fd9683772c_202x150.png" alt=""></i>
					<strong>WEBsiting</strong>
					<em>핑크블라썸 테마는 트랜디한 레이아웃에 어떤 컨셉이든 잘 어울리는 심플한 구조로 제작되어 있어 핑크블라썸 테마로 만들 수 있는 웹사이트의 종류는 정말 다양합니다. 어떤 업종! 어떤 종류의 홈페이지도 뚝딱 만들어 낼 수 있는 핑크블라썸 테마로 홈페이지를 제작해 보세요!</em>
				</a>
			</li>
			<li>
				<a>
					<i><img src="https://kornft.org/data/file/nft_registry/thumb-2109411217_MPzwmx5d_85b515fd04b58ba013debb655c2575fd9683772c_202x150.png" alt=""></i>
					<strong>pageD</strong>
					<em>핑크블라썸 테마는 트랜디한 레이아웃에 어떤 컨셉이든 잘 어울리는 심플한 구조로 제작되어 있어 핑크블라썸 테마로 만들 수 있는 웹사이트의 종류는 정말 다양합니다. 어떤 업종! 어떤 종류의 홈페이지도 뚝딱 만들어 낼 수 있는 핑크블라썸 테마로 홈페이지를 제작해 보세요!</em>
				</a>
			</li>
			<li>
				<a>
					<i><img src="https://kornft.org/data/file/nft_registry/thumb-2109411217_MPzwmx5d_85b515fd04b58ba013debb655c2575fd9683772c_202x150.png" alt=""></i>
					<strong>서브  2~5단배너 안내</strong>
					<em>서브페이지 웹진 스타일 2~5단배너 영역은 기본 html 코드로 제공됩니다. subBoxWebzineStyle2 ~ subBoxWebzineStyle5 클래스로 2단~5단 구성까지 적용이 가능하며 핑크블라썸 테마를 이용하여 홈페이지 제작 시 다용도로 활용이 가능합니다. </em>
				</a>
			</li>
		<ul>
	</div>

	
	<h3 class="h3_title"> 3단구성 사용 예</h3>
	<div class="subBoxWebzineStyle subBoxWebzineStyle3">
		<ul>
			<li>
				<a>
					<i><img src="https://kornft.org/data/file/nft_registry/thumb-2109411217_MPzwmx5d_85b515fd04b58ba013debb655c2575fd9683772c_202x150.png" alt=""></i>
					<strong>COMPANY</strong>
					<em>핑크블라썸 테마는 트랜디한 레이아웃에 어떤 컨셉이든 잘 어울리는 심플한 구조로 제작되어 있어 핑크블라썸 테마로 만들 수 있는 웹사이트의 종류는 정말 다양합니다. 어떤 업종! 어떤 종류의 홈페이지도 뚝딱 만들어 낼 수 있는 핑크블라썸 테마로 홈페이지를 제작해 보세요!</em>
				</a>
			</li>
			<li>
				<a>
					<i><img src="https://kornft.org/data/file/nft_registry/thumb-2109411217_MPzwmx5d_85b515fd04b58ba013debb655c2575fd9683772c_202x150.png" alt=""></i>
					<strong>WEBsiting</strong>
					<em>핑크블라썸 테마는 트랜디한 레이아웃에 어떤 컨셉이든 잘 어울리는 심플한 구조로 제작되어 있어 핑크블라썸 테마로 만들 수 있는 웹사이트의 종류는 정말 다양합니다. 어떤 업종! 어떤 종류의 홈페이지도 뚝딱 만들어 낼 수 있는 핑크블라썸 테마로 홈페이지를 제작해 보세요!</em>
				</a>
			</li>
			<li>
				<a>
					<i><img src="https://kornft.org/data/file/nft_registry/thumb-2109411217_MPzwmx5d_85b515fd04b58ba013debb655c2575fd9683772c_202x150.png" alt=""></i>
					<strong>웹진 스타일 2~5단배너 안내</strong>
					<em>서브페이지 웹진 스타일 2~5단배너 영역은 기본 html 코드로 제공됩니다. subBoxWebzineStyle2 ~ subBoxWebzineStyle5 클래스로 2단~5단 구성까지 적용이 가능하며 핑크블라썸 테마를 이용하여 홈페이지 제작 시 다용도로 활용이 가능합니다. </em>
				</a>
			</li>
		<ul>
	</div>



	<hr>
	<br>
	<h3 class="h3_title">테마의 메뉴바와 연결되는 페이지</h3>
	<div class="cont_text_info">
		<ul style="list-style:circle;padding-left:20px;">
			<li><b>content/basic</b> 내용관리를 활용한 일반페이지 </li>
			<li><b>content/basic</b> 구글,다음 지도 퍼가기를 활용한 지도 삽입 페이지(내용관리에서 작성 가능) </li>
			<li><b>board/basic</b> 기본형 게시판 </li>
			<li><b>board/qna</b> 질문답변 게시판(글 작성 시 접수완료, 답변 시 답변완료) </li>
			<li><b>board/faq</b> 자주묻는 질문 게시판(목록에서 질문과 답변 확인) </li>
			<li><b>board/webzine</b> 웹진형 게시판(목록에서 내용일부분과 첨부 이미지 확인) </li>
			<li><b>board/gallery</b> 갤러리 게시판 2종(일반 갤러리 게시판, 박스형 갤러리 게시판) </li>
			<li><b>board/gallery_box</b> 제품소개 게시판(갤러리형 리스트, 웹진형 리스트 설정) </li>
			<li><b>board/history</b> 연혁을 쉽게 추가 수정이 가능한 연혁 게시판 </li>
			<li><b>board/form</b> 고객상담 시 유용한 폼메일형 게시판 </li>
			<li><b>group.php</b>  각 게시판에 적용된 스킨에 따라 자동 적용되는 그룹 최신글 페이지 </li>
		<ul>
	</div>


	<br><br>

	<h2 class="h2_title_center">
		HTML STYLE SAMPLE<br>
		<small>아래 html 코드를 활용하여 내용관리의 html 입력으로 페이지를 꾸미실 수 있습니다.</small>
	</h2>

	<p class="cont_text_info">관련 css : 설치된테마폴더/css/contents.css</p>


	<h2 class="h2_title"> class="h2_title" H2 제목 적용</h2>
	<h3 class="h3_title"> class="h3_title" H3 제목 적용</h3>
	<div class="cont_text_important">
		class="cont_text_important" 중요한 내용
	</div>
	
	<div class="cont_text">
		 class="cont_text" 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 
	</div>
	<div class="cont_text_info">
		 class="cont_text_info" 중요한 내용이 있을경우 사용할 수 있는 점선박스입니다. 중요한 내용이 있을경우 사용할 수 있는 점선박스입니다. 중요한 내용이 있을경우 사용할 수 있는 점선박스입니다. 중요한 내용이 있을경우 사용할 수 있는 점선박스입니다. 중요한 내용이 있을경우 사용할 수 있는 점선박스입니다. 중요한 내용이 있을경우 사용할 수 있는 점선박스입니다. 중요한 내용이 있을경우 사용할 수 있는 점선박스입니다. 중요한 내용이 있을경우 사용할 수 있는 점선박스입니다. 중요한 내용이 있을경우 사용할 수 있는 점선박스입니다. 중요한 내용이 있을경우 사용할 수 있는 점선박스입니다. 중요한 내용이 있을경우 사용할 수 있는 점선박스입니다. 중요한 내용이 있을경우 사용할 수 있는 점선박스입니다. 중요한 내용이 있을경우 사용할 수 있는 점선박스입니다. 중요한 내용이 있을경우 사용할 수 있는 점선박스입니다. 중요한 내용이 있을경우 사용할 수 있는 점선박스입니다. 중요한 내용이 있을경우 사용할 수 있는 점선박스입니다. 중요한 내용이 있을경우 사용할 수 있는 점선박스입니다. 중요한 내용이 있을경우 사용할 수 있는 점선박스입니다.
	</div>

	<h3 class="h3_title"> 내용의 좌측에 이미지 적용</h3>
	<div class="cont_text_important">
		이미지에  class="cont_img_left50p" 추가
	</div>
	
	<div class="cont_text">
		<img src="http://sir.websiting.kr/purewhite/theme/purewhite/img/aboutImg01.jpg" class="cont_img_left50p">
		 class="cont_text" 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사 되는 클래스입니다. 
	</div>

	<h3 class="h3_title"> 내용의 우측에 이미지 적용</h3>
	<div class="cont_text_important">
		이미지에  class="cont_img_right50p" 추가
	</div>
	
	<div class="cont_text">
		<img src="http://sir.websiting.kr/purewhite/theme/purewhite/img/aboutImg02.jpg" class="cont_img_right50p">
		 class="cont_text" 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 일반적인 텍스트 내용일때 사용 되는 클래스입니다. 
	</div>

	<h3 class="h3_title"> 아이콘과 함께 사용되는 도형</h3>
	<div class="cont_text_important">
		Font Awesome 버전 참고 -&gt; https://fontawesome.com/v4.7.0/icons/
	</div>
	
	<div class="cont_text">
		<ul class="figure_list">
			<li>
				<i class="fa fa-desktop"></i>
				<strong>WEBSITE</strong>
				<span>웹사이트 제작 및 관리</span>
			</li>
			<li>
				<i class="fa fa-code"></i>
				<strong>MOBILE</strong>
				<span>모바일 웹사이트 제작 및 관리</span>
			</li>
			<li>
				<i class="fa fa-shopping-cart"></i>
				<strong>E-commerce</strong>
				<span>쇼핑몰 제작 및 운영대행</span>
			</li>
			<li>
				<i class="fa fa-android"></i>
				<strong>Application</strong>
				<span>웹 어플리케이션 개발 및 운영</span>
			</li>
		</ul>
	</div>

	

	<h3 class="h3_title"> 등기종류</h3>
	<div class="cont_text_important">
		table 을 감싼 DIV에 class="basic_table" 클래스 추가
	</div>

	<br>
	
	<div class="basic_table">
		<table>
			<colgroup>
				<col style="width:25%;">
				<col style="width:75%;">
			</colgroup>
			<thead>
				<tr>
					<th>등기종류</th>
					<th>진행절차</th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>일반등기</th>
					<td>● 기록 보존용으로 별도의 개인확인절차 또는 실사검증없이 NFT등기신청이 가능합니다.
                        <br>●  일반등기로 신청하는 경우 기타 등기에 비해 등기물건에 대한 신뢰성은 높게 평가되지 않습니다. </td>
		
				</tr>
				<tr>
					<th>확인등기</th>
					<td>● 5가지 이상의 등록자 개인확인에 필요한 서류등을 확인하여 승인 가능여부를 판단합니다.<br> ● 일반등기에 비해 신뢰도가 보강된 등기 종류입니다.</td>
				
				</tr>
				<tr>
					<th>검증등기에</th>
					<td>● 한국NFT공인인증원의 전문 검증위원이 개인확인과 실사검증을 통하여 등기물건의 실체를 확인한 후 등기 승인이 이루어집니다. <br>● 가장 높은 신뢰성을 가진 등기종류로 예술품, 명품 등 가치가 높은 등기물건일수록 검증등기를 통하여 실체를 확실히 하여 자산으로 활용할 수 있는 신뢰도를 부여합니다. </td>
				
				</tr>
            </tbody>
			</tfoot>
		</table>
	</div>



	<br>
	
	<div class="basic_table">
		<table>
			<colgroup>
				<col style="width:25%;">
				<col style="width:25%;">
				<col style="width:25%;">
				<col style="width:25%;">
			</colgroup>
			<tbody>
				<tr>
					<th rowspan="2">TBODY TH</th>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
				</tr>
				<tr>
					<td class="center">TBODY TD center</td>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
				</tr>
				<tr>
					<th>TBODY TH</th>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
				</tr>
				<tr>
					<th>TBODY TH</th>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th rowspan="2">TFOOT TH</th>
					<td>TFOOT TD</td>
					<td>TFOOT TD</td>
					<td>TFOOT TD</td>
				</tr>
				<tr>
					<td colspan="3" class="center">TFOOT TD center</td>
				</tr>
			</tfoot>
		</table>
	</div>

	<br>
	<br>

	<h3 class="h3_title"> 내용관리에 반응형 유튜브영상 삽입</h3>
	<div class="cont_text_important">
		유튜브 퍼가기소스 아이프레임을 감싼 DIV에 class="youtube_area" 클래스 추가
	</div>

	<div class="youtube_area">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/wQjqI7BPJBQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>



    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons">
</head>
<h3 class="h3_title"> 구글 머티리얼 아이콘 사용 예</h3>

<div class="cont_text">
    <ul class="figure_list figure_list5">
        <li>
            <i class="material-icons">important_devices</i>
            <strong>WEBSITE</strong>
            <span>웹사이트 제작 및 관리</span>
        </li>
        <li>
            <i class="material-icons">devices_other</i>
            <strong>MOBILE</strong>
            <span>모바일 웹사이트 제작 및 관리</span>
        </li>
        <li>
            <i class="material-icons">storefront</i>
            <strong>E-commerce</strong>
            <span>쇼핑몰 제작 및 운영대행</span>
        </li>
        <li>
            <i class="material-icons">app_settings_alt</i>
            <strong>Application</strong>
            <span>웹 어플리케이션 개발 및 운영</span>
        </li>
        <li>
            <i class="material-icons">format_shapes</i>
            <strong>CONTENTS</strong>
            <span>온라인 컨텐츠 제작 및 판매</span>
        </li>
    </ul>
</div>


<hr>



<section class="mainContents">
    <h2 class="sound_only">[PINK BLOSSOM] - 그누보드5.4 테마</h2>
    <div class="mainBoxWebzineStyle mainBoxWebzineStyle4">
        <h3 class="mainSectionTit"><a>OUR WORKS <u class="themeBgColor"></u></a></h3>
        <ul>
            <li>
                <a href="#">
                    <img src="https://kornft.org/data/file/nft_registry/thumb-2109411217_MPzwmx5d_85b515fd04b58ba013debb655c2575fd9683772c_202x150.png"
                        alt="">
                    <strong>COMPANY</strong>
                    <em>핑크블라썸 테마는 트랜디한 레이아웃에 어떤 컨셉이든 잘 어울리는 심플한 구조로 제작되어 있어 핑크블라썸 테마로 만들 수 있는 웹사이트의 종류는 정말 다양합니다. 어떤 업종!
                        어떤 종류의 홈페이지도 뚝딱 만들어 낼 수 있는 핑크블라썸 테마로 홈페이지를 제작해 보세요!</em>
                    <u class="themeBorderColor">view more +</u>
                </a>
            </li>
            <li>
                <a href="#">
                    <i><img src="https://kornft.org/data/file/nft_registry/thumb-2109411217_WFne7EPu_780095eae63deb7cc5db92ecffd6fcc8e1a03b26_202x150.jpg"
                            alt=""></i>
                    <strong>WEBsiting</strong>
                    <em>핑크블라썸 테마는 트랜디한 레이아웃에 어떤 컨셉이든 잘 어울리는 심플한 구조로 제작되어 있어 핑크블라썸 테마로 만들 수 있는 웹사이트의 종류는 정말 다양합니다. 어떤 업종!
                        어떤 종류의 홈페이지도 뚝딱 만들어 낼 수 있는 핑크블라썸 테마로 홈페이지를 제작해 보세요!</em>
                    <u class="themeBorderColor">view more +</u>
                </a>
            </li>
            <li>
                <a href="#">
                    <i><img src="https://kornft.org/data/file/nft_registry/thumb-2109411217_boKOFN4Q_f74c183587abc2fb4e25a4907cd5fbbeb061899b_202x150.jpg"
                            alt=""></i>
                    <strong>pageD</strong>
                    <em>핑크블라썸 테마는 트랜디한 레이아웃에 어떤 컨셉이든 잘 어울리는 심플한 구조로 제작되어 있어 핑크블라썸 테마로 만들 수 있는 웹사이트의 종류는 정말 다양합니다. 어떤 업종!
                        어떤 종류의 홈페이지도 뚝딱 만들어 낼 수 있는 핑크블라썸 테마로 홈페이지를 제작해 보세요!</em>
                    <u class="themeBorderColor">view more +</u>
                </a>
            </li>
            <li>
                <a href="#">
                    <i><img src="https://kornft.org/data/file/nft_registry/thumb-2109411217_MPzwmx5d_85b515fd04b58ba013debb655c2575fd9683772c_202x150.png"
                            alt=""></i>
                    <strong>웹진 스타일 4단배너 안내</strong>
                    <em>웹진 스타일 4단배너 영역은 기본 html 코드로 제공됩니다. 게시판을 연동하여 최신글을 노출시킬 수 있는 최신글 코드도 함께 제공되므로 핑크블라썸 테마를 이용하여 홈페이지
                        제작 시 다용도로 활용이 가능합니다. 메인페이지에서 사용가능한 최근 게시물 예제 참고</em>
                    <u class="themeBorderColor">view more +</u>
                </a>
            </li>
        </ul>
    </div>
</section>



<h2 class="h2_title"> 서브페이지 웹진형 스타일 코딩 샘플</h2>
	<div class="cont_text_important">
		subBoxWebzineStyle2 ~ subBoxWebzineStyle5 클래스로 2단~5단 구성까지 적용이 가능합니다.
	</div>
	<h3 class="h3_title"> 4단구성 사용 예</h3>
	<div class="subBoxWebzineStyle subBoxWebzineStyle4">
		<ul>
			<li>
				<a>
					<i><img src="https://kornft.org/data/file/nft_registry/thumb-2109411217_MPzwmx5d_85b515fd04b58ba013debb655c2575fd9683772c_202x150.png" alt=""></i>
					<strong>COMPANY</strong>
					<em>핑크블라썸 테마는 트랜디한 레이아웃에 어떤 컨셉이든 잘 어울리는 심플한 구조로 제작되어 있어 핑크블라썸 테마로 만들 수 있는 웹사이트의 종류는 정말 다양합니다. 어떤 업종! 어떤 종류의 홈페이지도 뚝딱 만들어 낼 수 있는 핑크블라썸 테마로 홈페이지를 제작해 보세요!</em>
				</a>
			</li>
			<li>
				<a>
					<i><img src="https://kornft.org/data/file/nft_registry/thumb-2109411217_MPzwmx5d_85b515fd04b58ba013debb655c2575fd9683772c_202x150.png" alt=""></i>
					<strong>WEBsiting</strong>
					<em>핑크블라썸 테마는 트랜디한 레이아웃에 어떤 컨셉이든 잘 어울리는 심플한 구조로 제작되어 있어 핑크블라썸 테마로 만들 수 있는 웹사이트의 종류는 정말 다양합니다. 어떤 업종! 어떤 종류의 홈페이지도 뚝딱 만들어 낼 수 있는 핑크블라썸 테마로 홈페이지를 제작해 보세요!</em>
				</a>
			</li>
			<li>
				<a>
					<i><img src="https://kornft.org/data/file/nft_registry/thumb-2109411217_MPzwmx5d_85b515fd04b58ba013debb655c2575fd9683772c_202x150.png" alt=""></i>
					<strong>pageD</strong>
					<em>핑크블라썸 테마는 트랜디한 레이아웃에 어떤 컨셉이든 잘 어울리는 심플한 구조로 제작되어 있어 핑크블라썸 테마로 만들 수 있는 웹사이트의 종류는 정말 다양합니다. 어떤 업종! 어떤 종류의 홈페이지도 뚝딱 만들어 낼 수 있는 핑크블라썸 테마로 홈페이지를 제작해 보세요!</em>
				</a>
			</li>
			<li>
				<a>
					<i><img src="https://kornft.org/data/file/nft_registry/thumb-2109411217_MPzwmx5d_85b515fd04b58ba013debb655c2575fd9683772c_202x150.png" alt=""></i>
					<strong>서브  2~5단배너 안내</strong>
					<em>서브페이지 웹진 스타일 2~5단배너 영역은 기본 html 코드로 제공됩니다. subBoxWebzineStyle2 ~ subBoxWebzineStyle5 클래스로 2단~5단 구성까지 적용이 가능하며 핑크블라썸 테마를 이용하여 홈페이지 제작 시 다용도로 활용이 가능합니다. </em>
				</a>
			</li>
		<ul>
	</div>

	
	<h3 class="h3_title"> 3단구성 사용 예</h3>
	<div class="subBoxWebzineStyle subBoxWebzineStyle3">
		<ul>
			<li>
				<a>
					<i><img src="https://kornft.org/data/file/nft_registry/thumb-2109411217_MPzwmx5d_85b515fd04b58ba013debb655c2575fd9683772c_202x150.png" alt=""></i>
					<strong>COMPANY</strong>
					<em>핑크블라썸 테마는 트랜디한 레이아웃에 어떤 컨셉이든 잘 어울리는 심플한 구조로 제작되어 있어 핑크블라썸 테마로 만들 수 있는 웹사이트의 종류는 정말 다양합니다. 어떤 업종! 어떤 종류의 홈페이지도 뚝딱 만들어 낼 수 있는 핑크블라썸 테마로 홈페이지를 제작해 보세요!</em>
				</a>
			</li>
			<li>
				<a>
					<i><img src="https://kornft.org/data/file/nft_registry/thumb-2109411217_MPzwmx5d_85b515fd04b58ba013debb655c2575fd9683772c_202x150.png" alt=""></i>
					<strong>WEBsiting</strong>
					<em>핑크블라썸 테마는 트랜디한 레이아웃에 어떤 컨셉이든 잘 어울리는 심플한 구조로 제작되어 있어 핑크블라썸 테마로 만들 수 있는 웹사이트의 종류는 정말 다양합니다. 어떤 업종! 어떤 종류의 홈페이지도 뚝딱 만들어 낼 수 있는 핑크블라썸 테마로 홈페이지를 제작해 보세요!</em>
				</a>
			</li>
			<li>
				<a>
					<i><img src="https://kornft.org/data/file/nft_registry/thumb-2109411217_MPzwmx5d_85b515fd04b58ba013debb655c2575fd9683772c_202x150.png" alt=""></i>
					<strong>웹진 스타일 2~5단배너 안내</strong>
					<em>서브페이지 웹진 스타일 2~5단배너 영역은 기본 html 코드로 제공됩니다. subBoxWebzineStyle2 ~ subBoxWebzineStyle5 클래스로 2단~5단 구성까지 적용이 가능하며 핑크블라썸 테마를 이용하여 홈페이지 제작 시 다용도로 활용이 가능합니다. </em>
				</a>
			</li>
		<ul>
	</div>

	
	<hr class="hrDline">

	<h3 class="h3_title"> 테이블 스타일</h3>
	<div class="cont_text_important">
		table 을 감싼 DIV에 class="basic_table" 클래스 추가
	</div>

	<br>
	
	<div class="basic_table">
		<table>
			<colgroup>
				<col style="width:25%;">
				<col style="width:25%;">
				<col style="width:25%;">
				<col style="width:25%;">
			</colgroup>
			<thead>
				<tr>
					<th>THEAD TH</th>
					<th>THEAD TH</th>
					<th>THEAD TH</th>
					<td>THEAD TD</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>TBODY TH</th>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
				</tr>
				<tr>
					<th>TBODY TH</th>
					<td class="center">TBODY TD center</td>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
				</tr>
				<tr>
					<th>TBODY TH</th>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
				</tr>
				<tr>
					<th>TBODY TH</th>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th>TFOOT TH</th>
					<td>TFOOT TD</td>
					<td>TFOOT TD</td>
					<td>TFOOT TD</td>
				</tr>
				<tr>
					<th>TFOOT TH</th>
					<td>TFOOT TD</td>
					<td>TFOOT TD</td>
					<td class="center">TFOOT TD center</td>
				</tr>
			</tfoot>
		</table>
	</div>

	<br>
	
	<div class="basic_table">
		<table>
			<colgroup>
				<col style="width:25%;">
				<col style="width:25%;">
				<col style="width:25%;">
				<col style="width:25%;">
			</colgroup>
			<tbody>
				<tr>
					<th rowspan="2">TBODY TH</th>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
				</tr>
				<tr>
					<td class="center">TBODY TD center</td>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
				</tr>
				<tr>
					<th>TBODY TH</th>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
				</tr>
				<tr>
					<th>TBODY TH</th>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
					<td>TBODY TD</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th rowspan="2">TFOOT TH</th>
					<td>TFOOT TD</td>
					<td>TFOOT TD</td>
					<td>TFOOT TD</td>
				</tr>
				<tr>
					<td colspan="3" class="center">TFOOT TD center</td>
				</tr>
			</tfoot>
		</table>
	</div>


	<hr class="hrDline">

	<h3 class="h3_title"> 내용관리에 반응형 유튜브영상 삽입</h3>
	<div class="cont_text_important">
		유튜브 퍼가기소스 아이프레임을 감싼 DIV에 class="youtube_area" 클래스 추가
	</div>

	<div class="youtube_area">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/aYCXBdMavx8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<div class="youtube_area">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/NTi5XGsD2ho" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>


<hr>

<!-- 하단 커스텀배너 시작 { -->
<aside class="customBan wow fadeInUp">
	<a href="#"><img src="http://sir.pinkblossom.websiting.kr/theme/pinkblossom/img/bottomBan01.jpg" alt=""> <span class="customBanTit">커스텀배너 for HTML<u></u></span></a>
	<a href="#"><img src="http://sir.pinkblossom.websiting.kr/theme/pinkblossom/img/bottomBan02.jpg" alt=""> <span class="customBanTit">tail.php 67~ line<u></u></span></a>
</aside>
<!-- } 하단 커스텀배너 끝 -->


<hr>

<!-- 하단 롤링 로고 영역///////// -->

<div class="bottomLogoRollWr">
	<div class="owl-carousel bottomLogoRoll">
		<div><a href="#"><img src="http://sir.pinkblossom.websiting.kr/theme/pinkblossom/img/bottomLogo_01.png" alt="하단롤링로고" ></a></div>
		<div><a href="#"><img src="http://sir.pinkblossom.websiting.kr/theme/pinkblossom/img/bottomLogo_02.png" alt="하단롤링로고" ></a></div>
		<div><a href="#"><img src="http://sir.pinkblossom.websiting.kr/theme/pinkblossom/img/bottomLogo_03.png" alt="하단롤링로고" ></a></div>
		<div><a href="#"><img src="http://sir.pinkblossom.websiting.kr/theme/pinkblossom/img/bottomLogo_04.png" alt="하단롤링로고" ></a></div>
		<div><a href="#"><img src="http://sir.pinkblossom.websiting.kr/theme/pinkblossom/img/bottomLogo_05.png" alt="하단롤링로고" ></a></div>
		<div><a href="#"><img src="http://sir.pinkblossom.websiting.kr/theme/pinkblossom/img/bottomLogo_06.png" alt="하단롤링로고" ></a></div>
		<div><a href="#"><img src="http://sir.pinkblossom.websiting.kr/theme/pinkblossom/img/bottomLogo_07.png" alt="하단롤링로고" ></a></div>
	</div>
</div>

<script src="http://sir.pinkblossom.websiting.kr/theme/pinkblossom/plugin/owlcarousel/owl.carousel.min.js?v2"></script>
<script>
$('.bottomLogoRoll').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsiveClass:true,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        980:{
            items:5
        },
        1200:{
            items:6
        }
    }
})
</script>
<!-- /////////하단 롤링 로고 영역 -->

<hr>

<section class="mainContents">
    <h2 class="sound_only">
        <?php echo $config['cf_title'] ?>
    </h2>
    <?php
	/* 제품소개 게시판 최신글 */
	// 사용방법 : latest('theme/product', '게시판아이디', 출력라인, 글자수);
	echo latest('theme/product', 'nft_registry', 10, 24);
	?>
</section>



<?php
include_once('../tail.php');