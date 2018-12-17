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
				<div class="info-btn col-xs-6 text-center pl-10 pr-10">
					<a href="my_info_basic.php">Basic Info</a>
				</div>
				<div class="info-btn col-xs-6 text-center pl-10 pr-10 active">
					<a href="my_info_address.php">Address Detail</a>
				</div>
			</div>
			<div class="form_container pt-10">
				<form class="mui-form">
				  <div class="col-xs-12">
					<div class="addr_heading mb-20">
						<div class="radio col-sm-2 col-xs-4 no-padding">
							<input id="home_addr" name="addr" type="radio">
							<label for="home_addr" class="radio-label">Home</label>
						</div>
						<div class="radio col-sm-2 col-xs-4 no-padding">
							<input id="off_addr" name="addr" type="radio">
							<label for="off_addr" class="radio-label">Office</label>
						</div>
						<div class="radio col-sm-2 col-xs-4 no-padding">
							<input id="other_addr" name="addr" type="radio">
							<label for="other_addr" class="radio-label">Other</label>
						</div>
					</div>
				  </div>
				  <div class="mui-textfield col-sm-6 col-xs-12">
					<input type="text"  id="hno" placeholder="House Number" required>
					<label for="hno">H. No.</label>
				  </div>
				  <div class="mui-textfield col-sm-6 col-xs-12">
					<input type="text"  id="street" placeholder="Street Name" required>
					<label for="street">Street</label>
				  </div>
				  <div class="mui-textfield col-sm-6 col-xs-12">
					<input type="text"  id="lndmrk" placeholder="Landmark" required>
					<label for="street">Landmark</label>
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
					<input type="text"  id="zip" placeholder="Zip Code" required>
					<label for="street">Zip Code</label>
				  </div>
				  <div class="submit-btn col-sm-6 col-xs-12 text-center">
					<a href="my_info_basic.php">Save</a>
				  </div>
					
				</form>
			</div>
		</div>
	</div>

<?php include 'footer.php';?>