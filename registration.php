<?php include 'header.php';?>

<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header text-center">
			  
				<li class="page_name">
					<a href="#" class="text-left text-center">
						<p>Buyer Registration</p>
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
				<form class="mui-form">
				  <div class="mui-textfield  col-sm-6 col-xs-12">
					<input type="text" id="first" placeholder="First Name" required>
					<label for="first">First Name</label>
				  </div>
				  <div class="mui-textfield col-sm-6 col-xs-12">
					<input type="text"  id="last" placeholder="Last Name" required>
					<label for="last">Last Name</label>
				  </div>
				  <div class="mui-textfield col-sm-6 col-xs-12">
					<input type="email"  id="email" placeholder="Email" required>
					<label for="email">Email</label>
				  </div>
				  <div class="mui-textfield col-sm-6 col-xs-12">
					<div class="mui-radio">
						<label class="mr-50">
						  <input type="radio"
								 name="gender"
								 id=""
								 value="">
						  Male
						</label>
						<label>
						  <input type="radio"
								 name="gender"
								 id=""
								 value="">
						  Female
						</label>
					  </div>
					<label for="gender">Gender</label>
				  </div>
				  <div class="mui-textfield col-sm-6 col-xs-12">
					<input type="text"  id="hno" placeholder="House Number" required>
					<label for="hno">H. No.</label>
				  </div>
				  <div class="mui-textfield col-sm-6 col-xs-12">
					<input type="text"  id="street" placeholder="Street Name" required>
					<label for="street">Street</label>
				  </div>
				  <div class="mui-select col-sm-6 col-xs-12">
					<select id="city" required>
					  <option>Select City</option>
					  <option>Abu Dhabi</option>
					  <option>Sharjah</option>
					  <option>Fujairah</option>
					  <option>Al Ain</option>
					  <option>Masdar City</option>
					</select>
					<label for="city">City</label>
				  </div>
				  <div class="mui-select col-sm-6 col-xs-12">
					<select id="country" required>
					  <option>Select Country</option>
					  <option>UAE</option>
					  <option>Dubai</option>
					  <option>Qatar</option>
					  <option>Bahrain</option>
					</select>
					<label for="country">Country</label>
				  </div>
				  <div class="mui-textfield col-sm-6 col-xs-12">
					<input type="tel"  id="mbl_num" placeholder="Mobile Number" pattern="[0-9]{10}" required>
					<label for="mbl_num">Mobile Number</label>
				  </div>
				  <div class="mui-textfield col-sm-6 col-xs-12">
					<input type="password"  id="pass" placeholder="Password" required>
					<label for="pass">Password</label>
				  </div>
				  <div class="mui-textfield col-sm-6 col-xs-12">
					<input type="password"  id="cnf_pass" placeholder="Confirm Password" required>
					<label for="cnf_pass">Confirm Password</label>
				  </div>
				  <div class="submit-btn col-sm-6 col-xs-12 text-center">
					<a href="index.php">Sign Up</a>
				  </div>
					
				</form>
			</div>
		</div>
	</div>
<!--  END Banner SLIDER -->

<?php include 'footer.php';?>