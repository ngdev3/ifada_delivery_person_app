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
			  <li class="logo_name"><a class="text-left back">My Profile</a></li>
			  <li class="cart_icon">
				  <a href="#"><img src="assets/img/db_edit.png" alt="cart icon"/>
					<!--<span class="badge">14</span>-->
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
				<input type="email"  id="name" placeholder="First Name" value="Rahul" required disabled>
				<label for="email">First Name</label>
			</div>
			<div class="mui-textfield col-sm-6 col-xs-12">
				<input type="text"  id="name" placeholder="Last Name" value="Singh" required>
				<label for="pass">Last Name</label>
			</div>
			<div class="mui-textfield col-sm-6 col-xs-12">
				<input type="text"  id="address" placeholder="Address" value="4 Clarke Street South, Abu Dubai" required disabled>
				<label for="pass">Address</label>
			</div>
			<div class="mui-textfield col-sm-6 col-xs-12">
				<input type="text"  id="email" placeholder="Address" value="rahul.kumar@yopmail.com" required>
				<label for="pass">Email-Id</label>
			</div>
			<div class="mui-textfield col-sm-6 col-xs-12">
				<input type="text"  id="number" placeholder="Mobile Number" value="985632154752" required>
				<label for="pass">Mobile Number</label>
			</div>
		</div>

	
			<div class="submit-btn col-sm-6 col-xs-12 text-center db_submit">
				<a href="#" style="width:45%;">Submit</a>
			</div>
	
	</div>
</div>
	
<?php include 'footer.php';?>