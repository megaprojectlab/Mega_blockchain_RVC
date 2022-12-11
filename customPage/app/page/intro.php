<div class="" style="display: flex;flex-direction: column;height: 100%;padding: 60px 60px;" >


	<div style="display:flex; flex:1;">
		<img src="./assets/img/knca_logo1.png" style="margin: auto;">
	</div>


<?/*
<img src="https://kornft.org/theme/knca/img/logo.png" style="width: 50%;margin: auto;">
	<button type="button" class="btn btn-primary mb-3 rounded-sm">회원가입</button>
	#29293D
*/?>
	<button data-menu="menu-login-1" type="button" class="btn btn-outline-primary rounded-sm" style="padding: 15px 10px;">
		<b>KNCA 계정으로 로그인</b>
	</button>


</div>

<script>
$('#loginBtn').on('click', function(e){
	location.href="./?p=home";
});
</script>