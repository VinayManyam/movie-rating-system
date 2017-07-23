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
    
    
    <?php include "links.php";
    ?>
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
</head>

	
<body >
    <!-- header -->
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
echo "<li><a href=\"index.php/Pusers\">Panel</a></li>";
			echo "<li><a href=\"index.php/login/logout\" >Logout</a></li>";
					
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
<?php include "users.php";?>
        <?php include "navigation.php"?>
<!-- banner -->
	<div id="slidey" style="display:none;">
		<ul><?php foreach ($bannerdata as $product ) : ?>
			<li><img src="<?php echo base_url();?>images/<?=  $product->src  ?>" alt=" "><p class='title'><?=  $product->title  ?></p>
                            <p class='description'> <?=  $product->description  ?></p></li>
				<?php endforeach; ?>	
    </div>
    <script src="<?php echo base_url();?>js/jquery.slidey.js"></script>
    <script src="<?php echo base_url();?>js/jquery.dotdotdot.min.js"></script>
	   <script type="text/javascript">
			$("#slidey").slidey({
				interval: 8000,
				listCount: 5,
				autoplay: false,
				showList: true
			});
			$(".slidey-list-description").dotdotdot();
		</script>
<!-- //banner -->


<!-- banner-bottom -->:
Drama | Adventure | Family
	<div class="banner-bottom">
		<div class="container">
			<div class="w3_agile_banner_bottom_grid">
				<div id="owl-demo" class="owl-carousel owl-theme">
                                     <?php foreach ($slider as $page ) : ?>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                                    
                                                   
							<a href="<?php echo base_url('index.php/start/');?><?=  $page->href ?>" class="hvr-shutter-out-horizontal"><img src="<?php echo base_url();?>images/<?=  $page->src ?>" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="<?php echo base_url('index.php/start/');?><?=  $page->href ?>"><?=  $page->name ?></a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p><?=  $page->year ?></p>
									
										
                                                                             <input value="<?=  $page->rate ?>" type="number" class="rating" min=0 max=5 step=0.1 data-size="xs" data-stars="5" productId=1>
									
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
		</div>
	</div>
<!-- //banner-bottom -->
<div class="general_social_icons">
	<nav class="social">
		<ul>
			<li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
			<li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
			<li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
			<li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>				  
		</ul>
  </nav>
</div>
<!-- general -->
	<div class="general">
		<h4 class="latest-text w3_latest_text">Featured Movies</h4>
		<div class="container">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Featured</a></li>
					<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Top viewed</a></li>
					<li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="true">Top Rating</a></li>
					<li role="presentation"><a href="#imdb" role="tab" id="imdb-tab" data-toggle="tab" aria-controls="imdb" aria-expanded="false">Recently Added</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
                                
					<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                              <?php foreach ($feature as $page ) : ?>
                                            <div class="w3_agile_featured_movies">
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="<?php echo base_url('index.php/start/');?><?=  $page->href ?>" class="hvr-shutter-out-horizontal"><img src="<?php echo base_url();?>images/<?=  $page->src ?>" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="<?php echo base_url('index.php/start/');?><?=  $page->href ?>"></a><?=  $page->name ?></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p><?=  $page->year ?></p>
									<input value="4.5" type="number" class="rating" min=0 max=5 step=0.1 data-size="xs" data-stars="5" productId=1>
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
						
                                    
					<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                                             <?php foreach ($feature as $page ) : ?>
						<div class="col-md-2 w3l-movie-gride-agile">
							<a href="<?php echo base_url('index.php/start/');?><?=  $page->href ?>" class="hvr-shutter-out-horizontal"><img src="<?php echo base_url();?>images/<?=  $page->src ?>" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="<?php echo base_url('index.php/start/');?><?=  $page->href ?>"><?=  $page->name ?></a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p><?=  $page->year ?></p>
									                            <input value="4.5" type="number" class="rating" min=0 max=5 step=0.1 data-size="xs" data-stars="5" productId=1>
                          

									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
					     <?php endforeach; ?>	
                                    </div>
                    
                                    
                                 <div role="tabpanel" class="tab-pane fade" id="rating" aria-labelledby="rating-tab">
					       <?php foreach ($feature as $page ) : ?>
                                     <div class="col-md-2 w3l-movie-gride-agile">
							<a href="<?php echo base_url('index.php/start/');?><?=  $page->href ?>" class="hvr-shutter-out-horizontal"><img src="<?php echo base_url();?>images/<?=  $page->src ?>" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="<?php echo base_url('index.php/start/');?><?=  $page->href ?>"><?=  $page->name ?></a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p><?=  $page->year ?></p>
									                            <input value="4.5" type="number" class="rating" min=0 max=5 step=0.1 data-size="xs" data-stars="5" productId=1>

									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
                                            	
						</div>
					     <?php endforeach; ?>                      
                                    </div>
                                    
                                    
                                    
					<div role="tabpanel" class="tab-pane fade" id="imdb" aria-labelledby="imdb-tab">
                                            <?php foreach ($feature as $page ) : ?>
						<div class="col-md-2 w3l-movie-gride-agile">
							<a href="<?php echo base_url('index.php/start/');?><?=  $page->href ?>" class="hvr-shutter-out-horizontal"><img src="<?php echo base_url();?>images/<?=  $page->src ?>" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="<?php echo base_url('index.php/start/');?><?=  $page->href ?>"><?=  $page->name ?></a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p><?=  $page->year  ?></p>
                            <input value="4.5" type="number" class="rating" min=0 max=5 step=0.1 data-size="xs" data-stars="5" productId=1>

									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
                                                       
						</div>
                                              <?php endforeach; ?>
						</div>
                                            <div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //general -->
<!-- Latest-tv-series -->
	<div class="Latest-tv-series">
		<h4 class="latest-text w3_latest_text w3_home_popular">Most Popular Movies</h4>
		<div class="container">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
                                               <?php foreach ($slider2 as $s ) : ?>
						<li>
							<div class="agile_tv_series_grid">
								<div class="col-md-6 agile_tv_series_grid_left">
									<div class="w3ls_market_video_grid1">
										<img src="<?php echo base_url();?>images/<?=  $s->src  ?>" alt=" " class="img-responsive" />
										<a class="w3_play_icon" href="#small-dialog">
											<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
										</a>
									</div>
								</div>
								<div class="col-md-6 agile_tv_series_grid_right">
									<p class="fexi_header"><?=  $s->name  ?></p>
									<p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span> <?=  $s->story  ?></p>
									<p class="fexi_header_para"><span>Date of Release<label>:</label></span> <?=  $s->year  ?> </p>
									<p class="fexi_header_para"><span>Genres<label>:</label> </span>
										<a href="<?=  $s->href  ?>"><?=  $s->genres  ?></a>
																	
									</p>
									<input value="4.5" type="number" class="rating" min=0 max=5 step=0.1 data-size="xs" data-stars="5" productId=1>
								</div>
								<div class="clearfix"> </div>
                                                                
                                                                
                                                                
								<div class="agileinfo_flexislider_grids">
                                                                    
                                                                   <?php foreach ($feature as $page ) : ?>
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="<?php echo base_url('index.php/start/');?><?=  $page->href  ?>" class="hvr-shutter-out-horizontal"><img src="<?php echo base_url();?>images/<?=  $page->src  ?>" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
                                                                            
                                                                            
                                                                            
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="<?php echo base_url('index.php/start/');?><?=  $page->href ?>"><?=  $page->name  ?></a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p><?=  $page->year  ?></p>
												<input value="4.5" type="number" class="rating" min=0 max=5 step=0.1 data-size="xs" data-stars="5" productId=1>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>NEW</p>
										</div>
									</div>
                                                                     <?php endforeach; ?>
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
                                                       <?php endforeach; ?>
						
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="<?php echo base_url();?>css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="<?php echo base_url();?>js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
	</div>
	<!-- pop-up-box -->  
		<script src="<?php echo base_url('index.php/start/');?><?=  $page->href ?>js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
        
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
        