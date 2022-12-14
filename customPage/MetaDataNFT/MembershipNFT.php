<?
    header('Content-Type: application/json; charset=UTF-8');

    if( count($_GET) == 0 ){
        exit;
    }

	$d = '
인증사항: 멤버쉽1인(10구좌용)

[맴버쉽 사용권리 및 혜택 등]
1. 맵버쉽 디지털 증명서 1개당 1개의 문화예술 IP사업권 보장 (별도계약 필요)
2. 문화예술청년 디지털사업진행에 따른 수익금 추가 혜택 지원
3. 다양한 문화예술 지원 사업의 우선 참여 및 할인 혜택 제공
4. 통신료, 자동차보험 및 꽃배달 등 문화예술청년지원사업 특별우대 할인 혜택 제공
5. 기타혜택

[맴버쉽 디지털 증명서의 제한사항 등]
1. ‘공급자’의 서면동의 없이 명의이전,대여, 임차권 및 질권 등으로 설정 할 수 없다.
2. ‘공급자’의 서면동의를 득한 후 명의 이전(양도) 및 처분가능 (비용:판매금의10%)
3. 중도해지시 중도해지규정에 따른다.

본 디지털증명서의 효력은 계약자가 계약서에 자필 서명과 맴버쉽비 납부한 즉시 그 효력이 발생한다.

[청년문화예술 컨텐츠 공급자 ]  
청춘포럼, 사단법인 사색의향기, 청사단, 청년등대, (주)리디아코리아, (주)와이콘즈
	';

    $base = array(
        'id' => $_GET['t'], 
        'description'=>$d, 
        'external_url'=>'https://kornft.org',
        "image"=>"https://kornft.org/data/file/300/Membership_NFT.gif",
        "name"=>"문화예술청년 지원 특별멤버쉽 [디지털 NFT증명서(10구좌용)] #".$_GET['t']
    );


    $r = json_encode($base, JSON_PRETTY_PRINT);

    $r = str_replace('\\/', '/', $r);

    echo $r;
	exit;
?>