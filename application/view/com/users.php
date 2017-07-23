
<!-- //header -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Sign In & Sign Up
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="w3_login_module">
							<div class="module form-module">
							  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
								<div class="tooltip">Click Me</div>
							  </div>
							  <div class="form">
								<h3>Login to your account</h3>
								<form action="<?php echo base_url('index.php/login/userlogin');?>" method="post">
								  <input type="text" name="Username" placeholder="Username" required="">
								  <input type="password" name="Password" placeholder="Password" required="">
								  <input type="submit" value="Login">
								</form>
							  </div>
							  <div class="form">
								<h3>Create an account</h3>
                                                                <form action="<?php echo base_url('index.php/login/adduser');?>" method="post" onsubmit="return validate_register_formdata()" novalidate>
								 <span id="ne"></span> <input type="text" name="Username" id="Username" placeholder="Username" required="">
								  <span id="pe"></span><input type="password" name="Password" id="Password" placeholder="Password" required="">
								 <span id="ee"></span> <input type="email" name="Email" id="Email" placeholder="Email Address" required="">
								 
								  <input type="submit" value="Register">
								</form>
							  </div>
							  <div class="cta"><a href="#">Forgot your password?</a></div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms  
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
             
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
        	function validate_register_formdata(){
			flag=true;
                     
		var name=document.getElementById('Username').value;
         
		var namepattern=/^[a-zA-Z]+$/
		var email=document.getElementById('Email').value;
		
		var password=document.getElementById('Password').value;
		if (name=='') {
			flag=false;
			document.getElementById('ne').innerHTML='Name is required';
document.getElementById('Username').style.border="1px solid red";
		}
		if (email=='') {
			flag=false;
			document.getElementById('ee').innerHTML='Email is required';
		document.getElementById('Email').style.border="1px solid red";
		}
		
		if (password=='') {
			flag=false;
			document.getElementById('pe').innerHTML='Password is required';
                        document.getElementById('Password').style.border="1px solid red";
		}
		if(name!=''){
			if(!namepattern.test(name)){
					flag =false;
					document.getElementById('ne').innerHTML='Invalid Username';
					document.getElementById('Username').style.border="1px solid red";
					}
					else{
					document.getElementById('ne').innerHTML='';
					document.getElementById('Username').style.border="";
						}
			
				}
                                
                                	
		return flag;
		}
</script> 
	
<!-- //bootstrap-pop-up -->
