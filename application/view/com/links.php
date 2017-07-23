<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url();?>css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url();?>css/faqstyle.css" type="text/css" media="all" />
<link href="<?php echo base_url();?>css/single.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>css/medile.css" rel='stylesheet' type='text/css' />
<!-- banner-slider -->
<link href="<?php echo base_url();?>css/jquery.slidey.min.css" rel="stylesheet">
<!-- //banner-slider -->
<!-- pop-up -->
<link href="<?php echo base_url();?>css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- js -->

<!-- //js -->


   
<!-- banner-bottom-plugin -->
<link href="<?php echo base_url();?>css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url();?>js/owl.carousel.js"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
        			}
</script> 
	<script type="text/javascript">
	
	</script>

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url();?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>