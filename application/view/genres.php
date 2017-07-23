
<!DOCTYPE html>
<html lang="en">
<head>
<title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    
<link href="<?php echo base_url();?>css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>css/bootstrap1.css" rel="stylesheet" />
    
    <script src="<?php echo base_url();?>js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>js/star-rating.min.js" type="text/javascript"></script>
    
    <?php include "com/links.php";
include "com/rating.php";
?>

    
<!-- start-smoth-scrolling -->

</head>
	
<body >
    
    <div class="header">
		<div class="container">
			<div class="w3layouts_logo">
				<a href="<?php echo base_url();?>"><h1>One<span>Movies</span></h1></a>
			</div>
                    
                    	<div class="w3_search" align="center">
                        <?php if($this->session->userdata('username')){
                            
                            echo "<font color=\"Green\" size=\"5\">Hellow ".$this->session->userdata('username')."</font>";
                        }?>	
			</div>
                    
                    
                     <?php if($this->session->userdata('username')){
			  echo	"<div class=\"w3l_sign_in_register\" >";
				echo "<ul>";
echo "<li><a href=\"../../index.php/Pusers\">Panel</a></li>";
			echo "<li><a href=\"../../index.php/login/logout\" >Logout</a></li>";
					
				echo "</ul>";
			echo "</div>";                  
		            }
 else {
     	  echo	"<div class=\"w3l_sign_in_register\" align=\"right\">";
				echo "<ul>";
      echo "<li><a href=\"\" data-toggle=\"modal\" onload=\"\" data-target=\"#myModal\">Login</a><li>";
     		echo "</ul>";
			echo "</div>";  
 } ?>        		             
                    
                         
            
		                        				
		
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<?php include "com/users.php";?>
        <?php include "com/navigation.php"?>

	<div class="general-agileits-w3l">
		<div class="w3l-medile-movies-grids">

				<!-- /movie-browse-agile -->
				
				      <div class="movie-browse-agile">
					     <!--/browse-agile-w3ls -->
						<div class="browse-agile-w3ls general-w3ls">
								<div class="tittle-head">
									<h4 class="latest-text">Family Movies </h4>
									<div class="container">
										<div class="agileits-single-top">
											<ol class="breadcrumb">
											  <li><a href="<?php echo base_url('');?>">Home</a></li>
											  <li class="active">Genres</li>
											</ol>
										</div>
									</div>
								</div>
								     <div class="container">
							<div class="browse-inner">
                                                            
                                                     
                                                             <?php foreach ($feature as $page ) : ?>  
                                                            
							   <div class="col-md-2 w3l-movie-gride-agile">
										 <a href="<?php echo base_url('index.php/start');?>/<?=  $page->href ?>?id=<?=  $page->id ?>" class="hvr-shutter-out-horizontal"><img src="<?php echo base_url();?>images/<?=  $page->src ?>" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="<?php echo base_url('index.php/start/');?><?=  $page->href ?>?id=<?=  $page->id ?></a></h6>							
										</div>
										<div class="mid-2">
										
											<p>Count:<?= $tel=getCountByProductId(connect(),$page->id  );?></p>
											
											<input value="<?= getRatingByProductId(connect(),$page->id ); ?>" type="number" class="rating" min=0 max=5 step=0.1 data-size="xs" data-stars="5" productId=<?=  $page->id ?>>	
											
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben two">
										<p>NEW</p>
									</div>	
									</div>
                  
                                                             <?php endforeach; ?> 
                                                            
                                                            
                                                            
                                     
                                                                                 						   
                                        	</div>

											<div class="clearfix"> </div>
								</div>
								
			
								</div>
						</div>
				<!--//browse-agile-w3ls -->
						<div class="blog-pagenat-wthree">
							<ul>
								<li><a class="frist" href="#">Prev</a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a class="last" href="#">Next</a></li>
							</ul>
						</div>
					</div>
				    <!-- //movie-browse-agile -->
				   <!--body wrapper start-->
				<!--body wrapper start-->
					<div class="review-slider">
						 <h4 class="latest-text">Movie Reviews</h4>
						       <div class="container">
						 		<div class="w3_agile_banner_bottom_grid">
				<div id="owl-demo" class="owl-carousel owl-theme">
				
                                    <?php foreach ($slider as $page ) : ?>   
                                    <div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
							<a href="<?php echo base_url('index.php/start');?><?php echo base_url('index.php/start/');?><?=  $page->href ?>" class="hvr-shutter-out-horizontal"><img src="<?php echo base_url();?>images/<?=  $page->src ?>" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="<?php echo base_url('index.php/start');?><?php echo base_url('index.php/start/');?><?=  $page->href ?>"><?=  $page->name ?></a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p><?=  $page->name ?></p>
									<input value="<?= getRatingByProductId(connect(),$page->id ); ?>" type="number" class="rating" min=0 max=5 step=0.1 data-size="xs" data-stars="5" productId=<?=  $page->id ?>>	
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
					</div>
                                    
                              
                                    <?php endforeach; ?> 
				
                                    
				
                       
                                    
				
                                    
				</div>
			</div>
						<!--body wrapper end-->
					</div>	
			</div>	
		</div>
	<!-- //w3l-medile-movies-grids -->
	</div>
	<!-- //comedy-w3l-agileits -->
           <script type="text/javascript">
        $(function(){
               $('.rating').on('rating.change', function(event, value, caption) {
                productId = $(this).attr('productId');
                $.ajax({
                  url: "<?php echo base_url('index.php/ratecontrol/getrate')?>",
                  dataType: "json",
                  data: {vote:value, productId:productId, type:'save'},
                  success: function( data ) {
                     alert("rating saved");
                  },
              error: function(e) {
                // Handle error here
                console.log(e);
              },
              timeout: 30000  
            });
              });

           


        });
    </script> 
        