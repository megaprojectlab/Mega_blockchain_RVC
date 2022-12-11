<?php
//print_r($_GET); //Array ( [p] => intro [c] => app [l] => kr )
//exit;
$header_show = false;
$footer_show = false;

$left_back_event=false;

if(trim($_GET['l']) != "" ){
	$_SESSION['app_loc']=$_GET['l'];
}

if(trim($_GET['c']) != "" ){
	$_SESSION['app_code']=$_GET['c'];
}

?>
<script>
location.replace("./?p=home");
</script>
<?php exit; ?>