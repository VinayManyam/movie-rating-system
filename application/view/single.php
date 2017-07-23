
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
include 'com/subcat.php';
?>
<?php 

If(isset($_GET['id']))
{
$id=$_GET['id'];

 $this->session->set_userdata('pid',$id);
}
else if($this->session->userdata('pid'))
{
   $id=$this->session->userdata('pid');
}
else
{
    redirect(base_url());	
}
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "s61";
  $con = mysqli_connect($hostname, $username, $password, $dbname);	
 
$que="select * from movieslist where id='$id'";
$res= mysqli_query($con, $que);
$tel= mysqli_fetch_assoc($res);

?>
    <?php include "com/comm.php";?>
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
					<div class="song">
                                          
                                            <table>
                                                
                                                
                                                <tr><td><img src="<?php echo base_url();?>images/<?php echo $tel['src']?>" alt="" class="img-responsive" width="200" height="100" /></td>
                                                    
                                                    <td valign="top" > 
                                                        <table>
                                                <tr><td align="center">Name :</td><td><?php echo $tel['name']; ?></td></tr> 
                                                <tr><td align="center">Description :</td><td><?php echo $tel['description']; ?></td></tr> 
                                                <tr><td align="center">Year :</td><td><?php echo $tel['year']; ?></td></tr> 
                                                <tr><td align="center">Count :</td><td><?= $tel=getCountByProductId(connect(),$id  );?></td></tr> 
                                                <tr><td align="center">Genres :</td><td><?= cat($id);?></td></tr> 
                                                <tr> <td colspan="2"> <input value="<?= getRatingByProductId(connect(),$id ); ?>" type="number" class="rating" min=0 max=5 step=0.1 data-size="xs" data-stars="5" productId=<?php echo $id;?>></td></tr>
                                                        </table>
                                                        
                                                   
                                                  </td>
                                                </tr>
                                            
                                            </table>                                  
                                             
                                         <span></span>
					</div>
					<div class="song-grid-right">
						<div class="share">
							<h5>Share this</h5>
							
						</div>
					</div>
					<div class="clearfix"> </div>

					<div class="all-comments">
						<div class="all-comments-info">
							<a href="#">Comments</a>
							<div class="agile-info-wthree-box">
                                                            <form method="post" action="<?php echo base_url();?>index.php/login/comments">
									<textarea placeholder="Message" name="Comments" required=""></textarea>
									<input type="submit" name="submit" value="SEND">
									<div class="clearfix"> </div>
                                                                       
								</form>
                               
							</div>
						</div>
                                 
						<div class="media-grids">
							
                                                   <?php foreach ($result as $page ) : ?>  
                                                    
                                                    <div class="media">
								<h5><?=  $page->name ?></h5>
								<div class="media-left">
									<a href="#">
										<img src="<?php echo base_url();?>images/user.jpg" title="One movies" alt=" " />
									</a>
								</div>
								<div class="media-body">
									<p><?=  $page->comments ?></p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
						
                                                        <?php endforeach; ?> 
						</div>
					</div>
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
        