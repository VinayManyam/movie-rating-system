<?php
/*
* Author: Rohit Kumar
* Website: iamrohit.in
* Date: 09-03-2016
* App Name: Star rating system
* Description: Star rating demo using Jquery, PHP and Mysql
*/
include_once('rating.php');
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Star rating demo using Jquery, PHP and Mysql</title>
    
<link href="<?php echo base_url();?>css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>css/bootstrap1.css" rel="stylesheet" />
    
    <script src="<?php echo base_url();?>js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>js/star-rating.min.js" type="text/javascript"></script>
   
</head>

<body>
<h1>Star rating demo using Jquery, PHP and Mysql</h1>

<form method="post"action="<?php echo base_url('index.php/ratecontrol/getrate')?>">
    <input type="text" name="vote"><input type="text" name="productId">
    <input type="submit" name="save" value="submit">
    
</fomr>
<table border=1>
 <tr><td >
    <img src="<?php echo base_url();?>images/p1.jpeg">
    <h3>Product-1</h3> 
   <input value="4.5" type="number" class="rating" min=0 max=5 step=0.1 data-size="lg" data-stars="5" productId=1>
        </td>
   <td> 
       <td >
    <img src="<?php echo base_url();?>images/p1.jpeg">
    <h3>Product-1</h3> 
   <input value="4.5" type="number" class="rating" min=0 max=5 step=0.1 data-size="sm" data-stars="5" productId=1>
        </td>
   <td> 
       <td >
    <img src="<?php echo base_url();?>images/p1.jpeg">
    <h3>Product-1</h3> 
   <input value="4.5" type="number" class="rating" min=0 max=5 step=0.1 data-size="xs" data-stars="5" productId=1>
        </td>
   <td> 
   <img src="<?php echo base_url();?>images/p2.jpeg"> 
     <h3>Product-2</h3> 
    <input value="3.5" type="number" class="rating" min=0 max=5 step=0.1 data-size="md" data-stars="5" productId=2>
    </td>
    </tr></table>

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
    </body>
</html>
