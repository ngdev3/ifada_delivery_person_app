<?php include 'header.php';?>

<style>
.nav > li.logo_name {
    float: left;
   }
</style>
<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header text-center">
			  
				<li class="menu_icon back_icon"><a href="#"  ><img style="width:13px;" src="assets/img/icon/back.png" id="asdf" alt="menu icon" /></a></li>
			  <li class="logo_name"><a class="text-left back">Change Password</a></li>
			  
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
				<input type="email"  id="email" placeholder="Old password" required>
				<label for="email">Old password</label>
			</div>
			<div class="mui-textfield col-sm-6 col-xs-12">
				<input type="password"  id="pass" placeholder="New Password" required>
				<label for="pass">New Password</label>
			</div>
			<div class="mui-textfield col-sm-6 col-xs-12">
				<input type="password"  id="pass" placeholder="Confirm New Password" required>
				<label for="pass">Confirm New Password</label>
			</div>
		</div>

	
			<div class="submit-btn col-sm-6 col-xs-12 text-center db_submit">
				<a href="#">Submit</a>
			</div>
	
	</div>
</div>
	
<?php include 'footer.php';?>