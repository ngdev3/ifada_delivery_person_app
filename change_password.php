<?php include 'header.php';?>

<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header text-center">
			  <li class="menu_icon "><a href="#"  ><img src="assets/img/icon/back.png" id="asdf" alt="menu icon"style="width: 13px;" /></a></li>
				<li class="page_name left">
					<a href="#" class="text-left ">
						<p>Change Password</p>
					</a>
				</li>
			  
			</ul>
			
		  </div>
		</nav>
	
	</div>
	<!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->
	
<!--  START Banner SLIDER -->
	<div class="container">
		<div class="login_form">
			<div class="form_container">
				<form class="mui-form">
				  <div class="mui-textfield col-sm-6 col-xs-12">
					<input type="password"  id="crnt_pass" placeholder="Current Password" required>
					<label for="pass">Current Password</label>
				  </div>
				  <div class="mui-textfield col-sm-6 col-xs-12">
					<input type="password"  id="pass" placeholder="New Password" required>
					<label for="pass">New Password</label>
				  </div>
				  <div class="mui-textfield col-sm-6 col-xs-12">
					<input type="password"  id="cnf_pass" placeholder="Confirm New Password" required>
					<label for="cnf_pass">Confirm New Password</label>
				  </div>
				  <div class="submit-btn col-sm-6 col-xs-12 text-center">
					<a href="#">Submit</a>
				  </div>
					
				</form>
			</div>
		</div>
	</div>
<!--  END Banner SLIDER -->

<?php include 'footer.php';?>