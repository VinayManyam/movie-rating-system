<?php

function cat($pid){
    $arr=array();
    $con= mysqli_connect('localhost', 'root', '', 's61');
    $str="select scid from subcat where pid='$pid'";
    $res= mysqli_query($con, $str);
    while($row= mysqli_fetch_assoc($res))
    {
     
       $arr[]= subcat($row['scid']);
          }    
         $str=implode(',',$arr);
         if(strlen($str)>0)  return $str;
else 
{ $str="not available";
    return $str;
         
    }
}
function subcat($scid)
{
    $con= mysqli_connect('localhost', 'root', '', 's61');
    $str="select name from subcat where cid='$scid'";
    $res= mysqli_query($con, $str);
$result= mysqli_fetch_assoc($res);

      return $result['name'];
            
}

?>