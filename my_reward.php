<?php include 'header.php';?>


<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header">
			  
				<li class="menu_icon back_icon"><a href="#"  ><img style="width:13px;" src="assets/img/icon/back.png" id="asdf" alt="menu icon" /></a></li>
			  <li class="logo_name"><a class="text-left back">My Reward</a></li>
			  
			</ul>
			
		  </div>
		</nav>
	
	</div>
	<!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->
<div class="">	
	<div class="mt-70"> 
	     <div class="reward_code text-center">
		     <p>Referral Code: <span>IF172</span></p>
		 </div>
	</div>
    
	<div class="redeem_div">
		<div class="redeem_main">
			<h3 class="redeem_text">Redeem Your Points</h3>
			
			<div class="redeem_point">
				<h3 style="color:#006d07; margin-top:10px;"><span>0</span> Points</h3>
			</div>
			<p>Note: To redeem minimum point should be 100</p>
		</div>
    </div>
	

    <div class="sign-up-button">
    	<button class="" style="width:50%">
    		Redeem Points
    	</button>
    </div>
	<div class="point_hist">
    	<p class="pt-15">Your Points History</p>
    </div>
	<div class="redeem_table_div">
		<table class="table redeem_table">
			<thead class="">
				<tr>
					<td scope="col">Date</td>
					<td scope="col">Earn By</td>
					<td scope="col">Amount</td>
					<td scope="col">CR/DR</td>
				</tr>
			</thead>
			<tbody>
				<tr>
				  <th style="text-align:center;font-weight:400;">12/12/2018</th>
				  <td>paytm</td>
				  <td>200</td>
				  <td>larry</td>
				</tr>
				<tr>
				  <th style="text-align:center;font-weight:400;">12/12/2018</th>
				  <td>paytm</td>
				  <td>200</td>
				  <td>larry</td>
				</tr>
				<tr>
				  <th style="text-align:center;font-weight:400;">12/12/2018</th>
				  <td>paytm</td>
				  <td>200</td>
				  <td>larry</td>
				</tr>
				
			</tbody>
		</table>
	</div>
</div>
<script>

    $('.digit1 input').keyup(function(){
        if($(this).val().length==$(this).attr("maxlength")){
            $(this).next().focus();
        }
    });

</script>	
<?php include 'footer.php';?>