<?php
    $page="intro";
    if(isset($_GET['p'])){
        $page=$_GET['p'];

        if(!file_exists('./page/'.$page.'.php')){
            header("HTTP/1.0 404 Not Found");
            exit;
        }
    }

    include "./db/db_load.php";
    include "./proc/func.php";
    include "./proc/config.php";

    if(file_exists('./proc/'.$page.'Control.php')){
		include './proc/'.$page.'Control.php';
    }
    
    
?>

<!DOCTYPE HTML>
<html lang="en" <?=$page=="intro" ? 'style="height: 100%;"' : '' ?> >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title><?=$tag_title?></title>
<link rel="stylesheet" type="text/css" href="./assets/styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="./assets/styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./assets/fonts/css/fontawesome-all.min.css">
<link rel="manifest" href="./assets/_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="./assets/app/icons/icon-192x192.png">

<script type="text/javascript" src="./assets/scripts/jquery.min.js"></script>
<script type="text/javascript" src="./assets/scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="./assets/scripts/appBridge.js"></script>
<script type="text/javascript" src="./assets/scripts/custom.js"></script>

<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>




</head>

<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default" style="height: 100%;background-color: #29293d;">

<? include "./proc/custom_cssjs.php"; ?>

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page" style="height: 100%; padding-bottom: 0px;">

    <? if($header_show): ?>

		<div class="header header-fixed header-logo-center">
			<a href="#" class="header-title" <?=$headerAdd['center']?> ><?=$headerSet['center']?></a>
			<a href="#" <?=$left_back_event ? 'id="back_event"' : '' ?> class="header-icon header-icon-1" <?=$headerAdd['left']?> ><?=$headerSet['left']?></a>
			<a href="#" class="header-icon header-icon-4" <?=$headerAdd['right']?> ><?=$headerSet['right']?></a>
		</div>

	<? endif; ?>
    
	<? if($footer_show): ?>

		<?  if($page == "home"): ?>
		<? //if(false): ?>
		<div style="width: 100%;height: 130px;background-color: #201e27;position: fixed;bottom: 0;border-radius: 10px; z-index: 98;">
			<div style="display: flex; padding: 15px 30px;">

				<div style=" height:50px;background: none;border: 1px solid #8A8AD3 !important; padding: 10px 10px;border-radius: 15px; width: 100%;">
					<div style="display: flex;align-items: center;">
						<img src="https://kornft.org/theme/knca/img/knca-ico1.png" class="me-3 rounded-circle shadow-l preload-img entered loaded" width="30">
						<p class="font-13 color-white">Welcome to KNCA.</p>
					</div>
				</div>


				<div id="link_btn1" data-menu="instant-1" style="width:50px; height:50px;background: none;border: 1px solid #8A8AD3 !important; border-radius: 15px;margin-left: 7px;">
					<div style="display: flex;align-items: center;">
						<img src="./assets/img/link_icon.png" class="" style="width:50px; height:50px;">
					</div>
				</div>

			</div>

		</div>
		<? endif; ?>

		<div id="footer-bar" class="footer-bar-1">
			<? for($i=0;$i<count($footerSet);$i++): ?>
			<a href="<?=$footerSet[$i]['link']?>" <?=(in_array($page, $footerSet[$i]['checks'])) ? 'class="active-nav"' : '' ?> >
				<i class="<?=$footerSet[$i]['icon']?>"></i><span><?=$footerSet[$i]['name']?></span>
			</a>
			<? endfor; ?>
		</div>

	<? endif; ?>

	<? include "./page/modals.php";?>

    <div class="page-content <?=($header_show) ? 'header-clear-medium' : '' ?>" style="height: 100%;padding-bottom:0px;">

        <?php include "./page/".$page.".php";?>

    </div>
    <!-- End of Page Content-->
	<input type="text" id="copyBase" value="" style="display:none">

    <script>
        function copySuccess(){
			Swal.fire({text: 'Copy in clipboard.', icon: 'success', confirmButtonText: 'OK'});
		}
        function copy(value, id='copyBase'){
            var obj=id;
            $('#'+obj).val(value);
			$("#"+obj).show();
			$("#"+obj).select();
			document.execCommand("Copy");
			$("#"+obj).hide();
			copySuccess();
        }
    </script>


	
    

 
    

</div>


</body>
</html>