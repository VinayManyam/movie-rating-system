<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>jquery-multi-select</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/example-styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/demo-styles.css">
</head>
<body>

    <form class="demo-example" method="post" action="<?php echo base_url('index.php/cmovies/drops')?>" >
        <select id="people" name="geners[]" multiple>
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
            <input type="submit" name="submit" value="submit">
            
        </select>
</form>

    <script type="text/javascript" src="<?php echo base_url();?>js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.multi-select.js"></script>
    <script type="text/javascript">
    $(function(){
        $('#people').multiSelect();
   
    });
    </script>

</body>
</html>