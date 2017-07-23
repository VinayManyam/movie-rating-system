<!DOCTYPE html>
<html lang="en">
<head>
<title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<?php include "com/links.php";?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/example-styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/demo-styles.css">
      <script type="text/javascript" src="<?php echo base_url();?>js/jquery-2.2.4.min.js"></script>  
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.multi-select.js"></script>
      <script type="text/javascript">
    $(function(){
        $('#people').multiSelect();
   
    });
    </script>
<!-- start-smoth-scrolling -->
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




<!-- single -->
<div class="single-page-agile-main">
<div class="container">
		<!-- /w3l-medile-movies-grids -->
			<div class="agileits-single-top">
				<ol class="breadcrumb">
				  <li><a href="index.html">Home</a></li>
				  <li class="active">Single</li>
				</ol>
			</div>
			<div class="single-page-agile-info">
                   <!-- /movie-browse-agile -->
                           <div class="show-top-grids-w3lagile">
				<div class="col-sm-8 single-left">
					
				<div class="panel panel-default">
					<font color="green" align="center" face="Courier" size="5">Add New Movie</font>
						<div class="panel-body">
						<div><?= validation_errors()?></div>
						<?=  form_open_multipart('cmovies/create',['class'=>'form-group']) ?>
							<div class="col-sm-4">
								<div class="input-group">
									<div class="input-group-addon">Name</div>
									<input type="text" class="form-control" name="name" placeholder="Enter Movie Name" value="<?= set_value('pro_name') ?>">
								</div>
							</div>
							
							<div class="col-sm-4">
								<div class="input-group">
									<div class="input-group-addon">Year</div>
                                                                        <input type="year" class="form-control" name="year" placeholder="Release Year" value="<?= set_value('pro_title') ?>">
								</div>
							</div>
						
							<div class="input-group-addon">Description</div>
							<div class="col-sm-4">
								<div class="input-group col-sm-12">
									<textarea rows="4" class="form-control" name="description" placeholder="Enter Movie Description "><?= set_value('pro_description') ?></textarea>
								</div>
							</div>
                                                        
                                                        
							<div class="col-sm-3">
                                                            <div class="input-group-addon">Select Image</div>
								<div class="input-group">
									<input type="file" name="userfile">
								</div>
							</div>
                                                        
                                                        
							<div class="col-sm-3">
								<div class="input-group">
									<div class="input-group-addon">Rating</div>
									<input type="text" class="form-control" name="rate" placeholder="rating" value="<?= set_value('pro_price') ?>">
									
								</div>
							</div>
							
						
							<div class="col-sm-3">
								     <label for="people">Select Genres:</label>
        <select id="people" name="genres[]" multiple>
            <option value="1">Action</option>
            <option value="2">Biography</option>
            <option value="3">crime</option>
      <option value="4">family</option>
            <option value="5">horror</option>
            <option value="6">romance</option>
              <option value="7">sports</option>
            <option value="8">war</option>
            <option value="9">Adventure</option>
              <option value="10">comedy</option>
            <option value="1">documentary</option>
            <option value="12">fantasy</option>
            
                        <option value="13">thriller</option>
              <option value="14">Animation</option>
            <option value="15">costume</option>
            <option value="18">history</option>
              <option value="17">musical</option>
            <option value="18">Psychological</option>
            
            
        </select>
							</div>
							
							<div class="col-sm-1">
								<div class="input-group">
									<button type="submit" class="btn btn-primary">Create</button>
								</div>
							</div>
							<div class="col-sm-1">
								<div class="input-group">
									
									<?=  anchor('admin/products','Cancel',['class'=>'btn btn-danger']) ?>
								</div>
							</div>
							
						
						<?= form_close() ?>
						</div><!-- /..panel-body -->
					</div><!-- /..panel panel-default -->	
				

			
				</div>
				<div class="col-md-4 single-right">
					<h3>Up Next</h3>
					<div class="single-grid-right">
                                            
                                            <?php foreach ($next as $page ) : ?>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="<?php echo base_url('index.php/start/');?><?=  $page->href ?>"><img src="<?php echo base_url();?>images/<?=  $page->src ?>"/></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="<?php echo base_url('index.php/start/');?><?=  $page->href ?>" class="title"> <?=  $page->name ?></a>
								<p class="author"><a href="#" class="author"><?=  $page->dir ?></a></p>
								<p class="views"><?=  $page->views ?> views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
                                               <?php endforeach; ?>                                      
					
                                        </div>
				</div>
				

				
				<div class="clearfix"> </div>
			</div>
				<!-- //movie-browse-agile -->
				<!--body wrapper start-->
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
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
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
				<!-- //w3l-latest-movies-grids -->
			</div>	
		</div>
	<!-- //w3l-medile-movies-grids -->
