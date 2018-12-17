<?php include 'header.php';?>


<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header text-center">
			  
				<li class="page_name">
					<a href="#" class="text-left text-center">
						<p>Login</p>
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
				<input type="email"  id="email" placeholder="Email" required>
				<label for="email">Email</label>
			</div>
			<div class="mui-textfield col-sm-6 col-xs-12">
				<input type="password"  id="pass" placeholder="Password" required>
				<label for="pass">Password</label>
			</div>
		</div>

	<div class="forgot_password">
	    <a href="./forget1.php" class="">Forgot Password?</a>
	</div>
	
			<div class="submit-btn col-sm-6 col-xs-12 text-center">
				<a href="#">Submit</a>
			</div>
	<div class="exist-account">
    	<p class="">Don't Have an account? <a href="./registration.php" class="sign-in-link"> Sign Up </a></p>
    </div>    
	

	</div>
</div>
	
<?php include 'footer.php';?>