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
    <input value="4.5" type="number" class="rating" min=0 max=5 step=0.1 data-size="lg" data-stars="5" productId=1>
    
</body>

</html>











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