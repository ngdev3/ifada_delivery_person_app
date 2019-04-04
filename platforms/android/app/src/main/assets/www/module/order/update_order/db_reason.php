<?php include 'header.php';?>
<style type="text/css">
	
.modal-header{
	padding: 10px;
	border-bottom: none;
}
.modal-body {
    width: 100%;
    float: left;
}
.modal-footer {
    padding: 10px;
    text-align: center;
    clear: both;
    border-top: 1px solid #e5e5e5;
}
.modal-footer button{
    padding: 5px 25px;
    background-color: #006d07;
    color: #fff;
}
.tracking_btn {
    padding: 5px 10px;
}
.mui-textfield, .mui-select {
    display: block;
    padding-top: 15px;
    margin-bottom: 15px;
    margin-top: 15px;
    position: relative;
    padding-left: 0px;
    padding-right: 0px;
}
</style>
<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header">
			  <li class="menu_icon "><a href="#"  ><img src="assets/img/icon/back.png" id="asdf" alt="menu icon"style="width: 13px;" /></a></li>
				<li class="page_name left">
					<a href="#" class="text-left ">
						<p>Select a reason</p>
					</a>
				</li>
			  
			</ul>
			<ul class="nav navbar-nav bottom_header">
			  <li class="menu_search_container"><a href="#">
				<!--<img src="assets/img/header/search_icon.png" alt="cart icon" />-->
				<input type="text" class="menu_search" placeholder="Search products brands and more"/>
			  </a></li>
			</ul>
		  </div>
		</nav>
	
	</div>
	<!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->

<!--  [PULSES] Sub categories content -->
	<div class="container-fluid mt-55">
		<div class="row">
			<div class="" style="padding: 10px 20px;">
				<div class="radio mb-20 mt-10">
					<input id="radio-1" name="radio" type="radio">
					<label for="radio-1" class="radio-label"><span>Customer Rejected</span></label>
				</div>
				<div class="radio mb-20">
					<input id="radio-2" name="radio" type="radio">
					<label for="radio-2" class="radio-label"><span>Not Available</span></label>
				</div>
				<div class="radio mb-20">
					<input id="radio-3" name="radio" type="radio">
					<label for="radio-3" class="radio-label"><span>Re-scheduled</span></label>
				</div>
				<div class="radio mb-20">
					<input id="radio-4" name="radio" type="radio">
					<label for="radio-4" class="radio-label"><span>Other Reasons</span></label>
				</div>
				<div class="mui-textfield col-sm-12 col-xs-12">
					<input type="text"  id="hno" placeholder="Comment">
					<label for="hno">Comment</label>
				  </div>
			</div>
			<div class="reason_btn">
				<div class="reason_cancel pr-10">
					<a href="#">Cancel</a>
				</div>
				<div class="reason_ok pl-10">
					<a href="#" data-toggle="modal" data-target="#myModal">Ok</a>
				</div>
			</div>
		</div>
	</div>
<!--  !. [PULSES] Sub categories content -->
<!-- modal box -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-vcenter">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  
		  <div class="modal-body">
			<!-- Content Of modal-->
					<div class="mui-textfield col-sm-6 col-xs-6 mr-20">
						<input type="text"  id="hno" placeholder="DD/MM/YY">
						<label for="hno"></label>
					</div>
					<div class="mui-textfield col-sm-6 col-xs-3">
						<input type="text"  id="hno_2" placeholder="00:00">
						<label for="hno_2"></label>
					</div>

			<!-- Content Of modal-->
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
		  </div>
		</div>

	  </div>
  </div>
</div>	

	
<script>

	
$(document).ready(function(){
	$(".cart_icon a:last-child").click(function(){
		//alert();
		$(".bottom_header").slideToggle();
		//$("#banner_slider").toggleClass("search-container")
	});	
});
    </script>	
<?php include 'footer.php';?>