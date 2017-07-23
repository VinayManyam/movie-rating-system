<!DOCTYPE html>
<html lang="en">
<head>
<title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<?php include "links.php";?>
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
                            
                            echo "<font color=\"Green\" size=\"5\">Hellow ".$this->session->userdata('userid')."</font>";
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
<!-- //bootstrap-pop-up -->
<!-- nav -->
	<div class="movies_nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo base_url();?>">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Genres <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="<?php echo base_url('index.php/start/genres');?>">Action</a></li>
											<li><a href="<?php echo base_url('index.php/start/genres');?>">Biography</a></li>
											<li><a href="<?php echo base_url('index.php/start/genres');?>">Crime</a></li>
											<li><a href="<?php echo base_url('index.php/start/genres');?>">Family</a></li>
											<li><a href="<?php echo base_url('index.php/start/genres');?>">Horror</a></li>
											<li><a href="<?php echo base_url('index.php/start/genres');?>">Romance</a></li>
											<li><a href="<?php echo base_url('index.php/start/genres');?>">Sports</a></li>
											<li><a href="<?php echo base_url('index.php/start/genres');?>">War</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="<?php echo base_url('index.php/start/genres');?>">Adventure</a></li>
											<li><a href="<?php echo base_url('index.php/start/genres');?>">Comedy</a></li>
											<li><a href="<?php echo base_url('index.php/start/genres');?>">Documentary</a></li>
											<li><a href="<?php echo base_url('index.php/start/genres');?>">Fantasy</a></li>
											<li><a href="<?php echo base_url('index.php/start/genres');?>">Thriller</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="<?php echo base_url('index.php/start/genres');?>">Animation</a></li>
											<li><a href="<?php echo base_url('index.php/start/genres');?>">Costume</a></li>
											<li><a href="<?php echo base_url('index.php/start/genres');?>">Drama</a></li>
											<li><a href="<?php echo base_url('index.php/start/genres');?>">History</a></li>
											<li><a href="<?php echo base_url('index.php/start/genres');?>">Musical</a></li>
											<li><a href="<?php echo base_url('index.php/start/genres');?>">Psychological</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="<?php echo base_url('index.php/start/genres');?>">tv - series</a></li>
							<li><a href="<?php echo base_url('index.php/start/genres');?>">news</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Country <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="<?php echo base_url('index.php/start/genres');?>">Asia</a></li>
												<li><a href="<?php echo base_url('index.php/start/genres');?>">France</a></li>
												<li><a href="<?php echo base_url('index.php/start/genres');?>">Taiwan</a></li>
												<li><a href="<?php echo base_url('index.php/start/genres');?>">United States</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="<?php echo base_url('index.php/start/genres');?>">China</a></li>
												<li><a href="<?php echo base_url('index.php/start/genres');?>">HongCong</a></li>
												<li><a href="<?php echo base_url('index.php/start/genres');?>">Japan</a></li>
												<li><a href="<?php echo base_url('index.php/start/genres');?>">Thailand</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="<?php echo base_url('index.php/start/genres');?>">Euro</a></li>
												<li><a href="<?php echo base_url('index.php/start/genres');?>">India</a></li>
												<li><a href="<?php echo base_url('index.php/start/genres');?>">Korea</a></li>
												<li><a href="<?php echo base_url('index.php/start/genres');?>">United Kingdom</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="<?php echo base_url('index.php/start/genres');?>">Short Codes</a></li>
							<li><a href="<?php echo base_url('index.php/start/genres');?>">A - z list</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
