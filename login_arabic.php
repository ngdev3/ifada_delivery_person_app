<?php include 'header.php';?>
<style>

@font-face {
    font-family: alfursan-Bold;
    src: url('assets/fonts/alfursan-Bold.ttf');
}
@font-face {
    font-family: alfursan-Medium;
    src: url('assets/fonts/alfursan-Medium.ttf');
}
@font-face {
    font-family: alfursan-Regular;
    src: url('assets/fonts/alfursan-Regular.ttf');
}
@font-face {
    font-family: alfursan-light;
    src: url('assets/fonts/alfursan-Light.ttf');
}



.nav > li.page_name > a > p{font-family: alfursan-Medium;}
.mui-textfield>label, .mui-select>label{font-family: alfursan-Regular;}
.mui-textfield>input, .mui-textfield>textarea, .mui-select>select{font-family: alfursan-Regular;}
.forgot_password > a{font-family: alfursan-Medium;}
.submit-btn a{font-family: alfursan-Medium;}
.exist-account{font-family: alfursan-Medium;}
.exist-account a{font-family: alfursan-Bold;}

</style>

<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header text-center">
			  
				<li class="page_name">
					<a href="#" class="text-left text-center">
						<p>تسجيل الدخول</p>
					</a>
				</li>
			  
			</ul>
			
		  </div>
		</nav>
	
	</div>
	<!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->
<div class="container">
		<div class="login_form">	    

	
		<div class="form_container">
			<div class="mui-textfield col-sm-6 col-xs-12">
				<input type="email"  id="email" placeholder="البريد الإلكتروني" required>
				<label for="email">البريد الإلكتروني</label>
			</div>
			<div class="mui-textfield col-sm-6 col-xs-12">
				<input type="password"  id="pass" placeholder="كلمه السر" required>
				<label for="pass">كلمه السر</label>
			</div>
		</div>

	<div class="forgot_password">
	    <a href="./forget1.php" class="">هل نسيت كلمة المرور؟</a>
	</div>
	
			<div class="submit-btn col-sm-6 col-xs-12 text-center">
				<a href="#">خضع</a>
			</div>
	<div class="exist-account">
    	<p class="">لا تملك حساب؟ <a href="./registration.php" class="sign-in-link"> سجل </a></p>
    </div>    
	

	</div>
</div>
	
<?php include 'footer.php';?>