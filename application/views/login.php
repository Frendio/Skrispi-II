<?php DEFINED('BASE_URL') OR exit(header('location:403')); ?>

<?php
	doctype().
	to('html').
	to('head');
		title('Bukit Moria | Login Page');
		tag('meta', 'charset::utf-8');
		tag('meta', 'name::description content::Latest*updates*and*statistic*charts');
		responsive_meta();
		
		css('vendors/vendors.bundle');
		css('demo/style.bundle');
		css('overide');
		css('login');
		bar_icon();
	tc('head');
?>

	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(<?php echo IMAGES_PATH; ?>bg/bg-1.JPEG);">
				<div class="dark-overlay"></div>
				<div class="m-grid__item m-grid__item--fluid m-login__wrapper index">
					<div class="m-login__container">
						<div class="m-login__logo">
							<img class="li-logo" src="<?php echo IMAGES_PATH; ?>logo/logo.png">
						</div>
						<div class="m-login__signin">
							<h3 class="li-wmess">Sistem Informasi Ibadah</h3>
							<h3 class="li-wmess">Gereja Bukit Moria</h3>
							<form class="m-login__form m-form" id="login_form">
								<div class="m-input-icon m-input-icon--left">
									<input class="m-input li-input ml_input_eh" type="text" placeholder="Username" name="username" id="username" autocomplete="off">
									<span class="m-input-icon__icon m-input-icon__icon--left">
										<span>
											<i class="fa fa-user-circle wfc"></i>
										</span>
									</span>
								</div>
								<div class="m-input-icon m-input-icon--left">
									<input class="m-input li-input ml_input_eh" type="password" placeholder="Password" name="password" id="password">
									<span class="m-input-icon__icon m-input-icon__icon--left">
										<span>
											<i class="fa fa-lock wfc"></i>
										</span>
									</span>
								</div>
							
								<!-- <div class="row m-login__form-sub">
									<div class="col m--align-left m-login__form-left">
										<label class="m-checkbox  m-checkbox--focus">
											<input type="checkbox" name="remember"> Remember me
											<span></span>
										</label>
									</div>
									<div class="col m--align-right m-login__form-right">
										<a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>
									</div>
								</div> -->
								<div class="m-login__form-action">
									<button id="m_login_signin_submit" class="btn btn-info m-btn m-btn--pill m-btn--custom m-login__btn m-login__btn--primary">Sign In</button>
								</div>
							</form>
						</div>
						<div class="m-login__forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">Forgotten Password ?</h3>
								<div class="m-login__desc">Enter your email to reset your password:</div>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="m-input-icon m-input-icon--left">
									<input class="m-input li-input ml_input_eh" type="text" placeholder="Email" name="rs-email" id="rs-email" autocomplete="off">
									<span class="m-input-icon__icon m-input-icon__icon--left">
										<span>
											<i class="fa fa-user-circle wfc"></i>
										</span>
									</span>
								</div>
								<div class="m-login__form-action">
									<button id="m_login_forget_password_submit" class="btn btn-info m-btn m-btn--pill m-btn--custom m-login__btn m-login__btn--primary">Request</button>&nbsp;&nbsp;
									<button id="m_login_forget_password_cancel" class="btn btn-danger m-btn m-btn--pill m-btn--custom m-login__btn m-login__btn--primary">Cancel</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php
			ajax();
			web_js('https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont');
			js('vendors/vendors.bundle');
			js('demo/scripts.bundle');
			js('demo/toastr');
			js('snippets/login');
			ml_alert();
		?>

		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>
	</body>
</html>