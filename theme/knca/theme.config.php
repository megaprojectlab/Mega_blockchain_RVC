<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 테마가 지원하는 장치 설정 pc, mobile
// 선언하지 않거나 값을 지정하지 않으면 그누보드5의 설정을 따른다.
// G5_SET_DEVICE 상수 설정 보다 우선 적용됨
define('G5_THEME_DEVICE', 'pc');

$theme_config = array();

/* 
	서브페이지 좌측메뉴를 사용할 경우 true사용하지 않을 경우 false 
*/

if($bo_table=="900"){  /* 예)900게시판을 좌측메뉴 사용안함*/
    $subLeftMenu = "false"; 
}
  else {
    $subLeftMenu = "true";
    }
/* 
	테마에 사용하실 컬러를 #을 포함하여 헥사코드로 넣어주세요 기본 블랙 : #333333  
	입력하신 색상위에 흰색 글자가 안보이는 경우 버튼 등의 글자가 잘 보이지 않을 수 있습니다.
	별도의 색상값이 필요 없을 경우에는 #333333 을 입력해 주시면 코드가 적용되지 않습니다.
	추천 색상코드
		파랑 #146dd2   남색 #17406d   카키 #4e613e   다크레드 #b51010    브라운 #70613e    에메랄드 #42b681
*/
$themeColor = "#333333";

// 갤러리 이미지 수 등의 설정을 지정하시면 게시판관리에서 해당 값을
// 가져오기 기능을 통해 게시판 설정의 해당 필드에 바로 적용할 수 있습니다.
// 사용하지 않는 스킨 설정은 값을 비워두시면 됩니다.

$theme_config = array(
    'set_default_skin'          => true ,   // 기본환경설정의 최근게시물 등의 기본스킨 변경여부 true, false
    'preview_board_skin'        => 'basic', // 테마 미리보기 때 적용될 기본 게시판 스킨
    'preview_mobile_board_skin' => 'basic', // 테마 미리보기 때 적용될 기본 모바일 게시판 스킨
    'cf_member_skin'            => 'basic', // 회원 스킨
    'cf_mobile_member_skin'     => 'basic', // 모바일 회원 스킨
    'cf_new_skin'               => 'basic', // 최근게시물 스킨
    'cf_mobile_new_skin'        => 'basic', // 모바일 최근게시물 스킨
    'cf_search_skin'            => 'basic', // 검색 스킨
    'cf_mobile_search_skin'     => 'basic', // 모바일 검색 스킨
    'cf_connect_skin'           => 'basic', // 접속자 스킨
    'cf_mobile_connect_skin'    => 'basic', // 모바일 접속자 스킨
    'cf_faq_skin'               => 'basic', // FAQ 스킨
    'cf_mobile_faq_skin'        => 'basic', // 모바일 FAQ 스킨
    'bo_gallery_cols'           => 4,       // 갤러리 이미지 수
    'bo_gallery_width'          => 300,     // 갤러리 이미지 폭
    'bo_gallery_height'         => 300,     // 갤러리 이미지 높이
    'bo_mobile_gallery_width'   => 200,     // 모바일 갤러리 이미지 폭
    'bo_mobile_gallery_height'  => 200,     // 모바일 갤러리 이미지 높이
    'bo_image_width'            => 1200,     // 게시판 뷰 이미지 폭
    'qa_skin'                   => 'basic', // 1:1문의 스킨
    'qa_mobile_skin'            => 'basic'  // 1:1문의 모바일 스킨
);