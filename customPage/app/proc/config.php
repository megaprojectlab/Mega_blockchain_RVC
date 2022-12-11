<?
session_start();

if( !isset($_SESSION['user_id']) ){
	$_SESSION['user_id'] = 'admin'; 
}

$tag_title = "KNCA APP";

$showErr = false;

if($showErr){
    error_reporting( E_ALL );
    ini_set( "display_errors", 1 );
}

$header_show = false;
$footer_show = true;

$left_back_event=false;

$headerSet = array(
	"left"=>'<i class="fas fa-arrow-left"></i>',
	"center"=>'KNCA',
	"right"=>'',
);

$headerAdd = array(
	"left"=>'',
	"center"=>'',
	"right"=>'',
);
// <i class="fas fa-cog"></i>


$footerSet = array(
	array("link"=>"./?p=home", "name"=>"Home", "icon"=>"fas fa-home", "checks"=>array("home", "app_arti_token_send", "app_arti_token_swap") ),
	//array("link"=>"./?p=write", "name"=>"Write", "icon"=>"fas fa-edit", "checks"=>array("write", "app_arti_sProfile") ),
	//array("link"=>"./?p=read", "name"=>"Read", "icon"=>"fas fa-search", "checks"=>array("read") ),
	//array("link"=>"./?p=notice", "name"=>"Notice", "icon"=>"far fa-lightbulb", "checks"=>array("notice") ),
	array("link"=>"./?p=setting", "name"=>"Settings", "icon"=>"fas fa-cog", "checks"=>array("setting") ),
);


if(in_array($_SESSION['app_code'], admin_list() )){
$footerSet = array(
	array("link"=>"./?p=home", "name"=>"Home", "icon"=>"fas fa-home", "checks"=>array("home", "app_arti_token_send", "app_arti_token_swap") ),
	array("link"=>"./?p=write", "name"=>"Admin", "icon"=>"fas fa-search", "checks"=>array("write") ),
	array("link"=>"./?p=native_call", "name"=>"TEST", "icon"=>"far fa-lightbulb", "checks"=>array("native_call") ),
	array("link"=>"./?p=setting", "name"=>"Settings", "icon"=>"fas fa-cog", "checks"=>array("setting") ),
);
}

/*
$footerSet = array(
	array("link"=>"./?p=home", "name"=>"Home", "icon"=>"fas fa-home", "checks"=>array("home", "app_arti_token_send", "app_arti_token_swap") ),
	array("link"=>"./?p=read", "name"=>"Read", "icon"=>"fas fa-search", "checks"=>array("read") ),
	array("link"=>"./?p=notice", "name"=>"Notice", "icon"=>"far fa-lightbulb", "checks"=>array("notice") ),
	array("link"=>"./?p=setting", "name"=>"Settings", "icon"=>"fas fa-cog", "checks"=>array("setting") ),
);
*/

?>