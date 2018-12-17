<?php include 'header.php';?>

<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header text-center">
			  <li class="menu_icon "><a href="#"  ><img src="assets/img/icon/back.png" id="asdf" alt="menu icon"style="width: 13px;" /></a></li>
				<li class="page_name left">
					<a href="#" class="text-left ">
						<p>My info</p>
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
			<div class="info-container"> 
				<div class="info-btn col-xs-6 text-center pl-10 pr-10 active">
					<a href="my_info_basic.php">Basic Info</a>
				</div>
				<div class="info-btn col-xs-6 text-center pl-10 pr-10">
					<a href="my_info_address.php">Address Detail</a>
				</div>
			</div>
			<div class="form_container pt-10">
				<form class="mui-form">
				
				  <div class="mui-textfield col-sm-6 col-xs-12">
					<input type="text"  id="frst" placeholder="Enter first name" required>
					<label for="frst">First Name</label>
				  </div>
				  <div class="mui-textfield col-sm-6 col-xs-12">
					<input type="text"  id="lst" placeholder="Enter last name" required>
					<label for="lst">Last Name</label>
				  </div>
				  <div class="mui-textfield col-sm-6 col-xs-12">
					<input type="email"  id="email" placeholder="Enter email id" required>
					<label for="email">Email ID</label>
				  </div>
				  <div class="mui-textfield col-sm-6 col-xs-12">
					<input type="tel"  id="mbl_num" placeholder="Mobile Number" pattern="[0-9]{10}" required>
					<label for="mbl_num">Mobile Number</label>
				  </div>
				  <div class="submit-btn col-sm-6 col-xs-12 text-center">
					<a href="my_info_address.php">Submit</a>
				  </div>
					
				</form>
			</div>
		</div>
	</div>

<?php include 'footer.php';?>