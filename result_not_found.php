<?php include 'header.php';?>


<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header text-center">
			  
				<li class="page_name">
					<a href="#" class="text-left text-center">
						<p></p>
					</a>
				</li>
			  
			</ul>
			
		  </div>
		</nav>
	
	</div>
	<!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->
<div class="result_not_found mt-50">	
	<div class="items_cont"> 
	     <div class="not_found_img">
		     <img src="assets/img/not_found.png">
		 </div>
		 <div class="mt-20 text-center continue_shop">
			<a>Continue Shopping</a>
		 </div>
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