<!DOCTYPE html>
<html lang="en">
<head>
<title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | List :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url();?>css/faqstyle.css" type="text/css" media="all" />
<link href="<?php echo base_url();?>css/medile.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>css/single.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url();?>css/contactstyle.css" type="text/css" media="all" />
<!-- news-css -->
<link rel="stylesheet" href="<?php echo base_url();?>news-css/news.css" type="text/css" media="all" />
<!-- //news-css -->
<!-- list-css -->
<link rel="stylesheet" href="<?php echo base_url();?>list-css/list.css" type="text/css" media="all" />
<!-- //list-css -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- js -->

<!-- //js -->

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
echo "<li><a href=\"../index.php/Pusers\">Panel</a></li>";
			echo "<li><a href=\"../index.php/login/logout\" >Logout</a></li>";
					
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





<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });
	   $('#table-breakpoint1').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint2').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint3').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint4').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint5').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint6').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint7').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint8').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint9').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint10').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint11').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint12').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint13').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint14').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint15').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint16').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint17').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint18').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint19').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint20').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint21').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint22').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint23').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint24').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint25').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint26').basictable({
        breakpoint: 768
      });
    });
  </script>

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
	</script>
<br>
	<div align="center" >
<div role="tabpanel" data-example-id="togglable-tabs"align="center" >
	
    	<ul id="myTab" class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#home1" id="home1-tab" role="tab" data-toggle="tab" aria-controls="home1" aria-expanded="true">Latest News</a></li>
									<li role="presentation"><a href="<?php echo base_url('index.php/cmovies/addmovie');?>"  >Add Movie</a></li>
								</ul>
    </div>	
       </div> 

     <!-- faq-banner -->
	<div class="faq">
					<div class="container">
				
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>25</span></h4>
									</div>
									<table id="table-breakpoint">
										<thead bgcolor="blue">
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="horror.html">Horror</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>17</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>18</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>19</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>20</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>21</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>22</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>23</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>24</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>25</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="a" aria-labelledby="a-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>17</span></h4>
									</div>
									<table id="table-breakpoint1">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>17</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="b" aria-labelledby="b-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>12</span></h4>
									</div>
									<table id="table-breakpoint2">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="c" aria-labelledby="c-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>15</span></h4>
									</div>
									<table id="table-breakpoint3">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="d" aria-labelledby="d-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>16</span></h4>
									</div>
									<table id="table-breakpoint4">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="e" aria-labelledby="e-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>9</span></h4>
									</div>
									<table id="table-breakpoint5">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="f" aria-labelledby="f-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>14</span></h4>
									</div>
									<table id="table-breakpoint6">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="g" aria-labelledby="g-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>25</span></h4>
									</div>
									<table id="table-breakpoint7">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>17</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>18</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>19</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>20</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>21</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>22</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>23</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>24</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>25</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="h" aria-labelledby="h-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>17</span></h4>
									</div>
									<table id="table-breakpoint8">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>17</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="i" aria-labelledby="i-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>12</span></h4>
									</div>
									<table id="table-breakpoint9">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.htmlgenres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="j" aria-labelledby="j-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>15</span></h4>
									</div>
									<table id="table-breakpoint10">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="k" aria-labelledby="k-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>16</span></h4>
									</div>
									<table id="table-breakpoint11">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="l" aria-labelledby="l-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>14</span></h4>
									</div>
									<table id="table-breakpoint12">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="m" aria-labelledby="m-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>25</span></h4>
									</div>
									<table id="table-breakpoint13">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>17</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>18</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>19</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>20</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>21</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>22</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>23</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>24</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>25</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="n" aria-labelledby="n-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>17</span></h4>
									</div>
									<table id="table-breakpoint14">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>17</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="o" aria-labelledby="o-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>12</span></h4>
									</div>
									<table id="table-breakpoint15">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="p" aria-labelledby="p-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>16</span></h4>
									</div>
									<table id="table-breakpoint16">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="q" aria-labelledby="q-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>09</span></h4>
									</div>
									<table id="table-breakpoint17">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="r" aria-labelledby="r-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>14</span></h4>
									</div>
									<table id="table-breakpoint18">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="s" aria-labelledby="s-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>17</span></h4>
									</div>
									<table id="table-breakpoint19">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>17</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="t" aria-labelledby="t-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>17</span></h4>
									</div>
									<table id="table-breakpoint20">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>17</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="u" aria-labelledby="u-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>12</span></h4>
									</div>
									<table id="table-breakpoint21">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="v" aria-labelledby="v-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>16</span></h4>
									</div>
									<table id="table-breakpoint22">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="w" aria-labelledby="w-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>09</span></h4>
									</div>
									<table id="table-breakpoint23">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="x" aria-labelledby="x-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>14</span></h4>
									</div>
									<table id="table-breakpoint24">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="y" aria-labelledby="y-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>17</span></h4>
									</div>
									<table id="table-breakpoint25">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>17</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="z" aria-labelledby="z-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>12</span></h4>
									</div>
									<table id="table-breakpoint26">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n2.jpg" alt="" /> <span>001 Southside with you</span></a></td>
											<td>2011</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Korea</a></td>
											<td class="w3-list-info"><a href="genres.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n11.jpg" alt="" /> <span>12 Bad Moms</span></a></td>
											<td>2010</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n3.jpg" alt="" /> <span>2 Sausage Party</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n4.jpg" alt="" /> <span>2.0 Morgan</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United States</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n5.jpg" alt="" /> <span>24</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">India</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n6.jpg" alt="" /> <span>001 The Secret Life of Pets</span></a></td>
											<td>2012</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genres.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n7.jpg" alt="" /> <span>12 Hell or High Water</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">China</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n8.jpg" alt="" /> <span>2 Central Intelligence</span></a></td>
											<td>2010</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n9.jpg" alt="" /> <span>3 The Jungle Book</span></a></td>
											<td>2014</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">Japan</a></td>
											<td class="w3-list-info"><a href="genres.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n10.jpg" alt="" /> <span>01 Independence Day</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="<?php echo base_url();?>images/n1.jpg" alt="" /> <span>01 Ben-Hur</span></a></td>
											<td>2013</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genres.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genres.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
				</div>
			</div>
	</div>
<!-- //faq-banner -->
        
        
        
        
        
        
        
        
        
        
        
        
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>