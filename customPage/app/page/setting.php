<?php
$slist = array(
    //array("src"=>"/assets/mobile_assets/images/walletapp/set_icon1.svg","title"=>tran("About"),"right"=>"","show"=>true),
    //array("src"=>"/assets/mobile_assets/images/walletapp/set_icon1.svg","title"=>"보안","right"=>"", "show"=>true, "custom"=>'data-menu="sel_set_auth" ', ),
	//array("src"=>"./assets/img/appi_icon1.svg","title"=>"App Code","right"=>$_SESSION['app_code']),
    array("src"=>"./assets/img/version_icon1.svg","title"=>"Version","right"=>"1.0"),
);


?>

<div class="content" style="display: flex;flex-direction: column;margin: 0px 0px;">
			<div style="margin-bottom:0px;"></div>

            <div class="d-flex" style="margin: 0px 0px;">
                <div class="align-self-center ml-auto">
                    <img src="./assets/img/knca_logo1.png" class="" style="width: 130px;height: 64px;">
                </div>
            </div>

			<div style="margin-bottom:0px;"></div>

			<div style="height: 90px;background-color: #201E27;margin: 0px 30px;border-radius: 12px;">
				<div style="display: flex;">
					<div style="margin: 19px 20px;">
						<p class="font-20" style="color:#FFFFFF;"><b>Settings</b></p>
						<p class="font-14" style="color:#585874;">User</p>
					</div>

					<div style="margin-left: auto;margin-right: 10px;">
						<img src="./assets/img/set_icon2.png" class="" style="width: 70px;height: 90px;">
					</div>
				</div>

			</div>

			<div style="margin-bottom:20px;"></div>

			<div style="background-color: #201E27;margin: 0px 30px;border-radius: 12px; padding: 19px 20px;">

				<div >

					<? for($i=0;$i<count($slist);$i++): ?>
					<? $data = $slist[$i]; ?>

						<div <?=$data['custom']?> style="display: flex;align-items: center; height: 60px;font-size: 20px;color: #000; cursor: pointer;">
							<div style="width: 35px; height: 35px; margin-right: 10px; margin-left: 0px; overflow: hidden; justify-content: center;align-items: center;display: flex;">
								<img src="<?=$data['src']?>" style="width:100%;" />                   
							</div>

							<text class="font-16" style="color:#fff;"><?=$data['title']?></text>

							<text class="font-16" style="margin-left: auto; font-weight: 300; color:#8A8AD3;"><?=$data['right']?></text>

							<? if(isset($data['show'])): ?>
							<i class="fas fa-angle-right" style="margin-left: 15px; margin-right: 10px; color: #8A8AD3;"></i>
							<? endif; ?>

						</div>

					<? endfor; ?>

				</div>

			</div>





			<div style="margin-bottom:200px;"></div>



</div>  