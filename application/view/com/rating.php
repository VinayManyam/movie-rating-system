<?php
/*
* Author: Rohit Kumar
* Website: iamrohit.in
* Date: 09-03-2016
* App Name: Star rating system
* Description: Star rating demo using Jquery, PHP and Mysql
*/
function connect() {
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "s61";
  $con = mysqli_connect($hostname, $username, $password, $dbname);	
  return $con;
}
getCountByProductId(connect(),123123  );
function getRatingByProductId($con, $productId) {
	$query = "SELECT SUM(vote) as vote, COUNT(vote) as count from rating WHERE product_id = $productId";

      $result = mysqli_query($con, $query);
      
      $resultSet = mysqli_fetch_assoc($result);
      if(empty($result))
      {
$res['vote']=$resultSet['vote']/$resultSet['count'];

      }
      $res['count']=$resultSet['count'];
      if($resultSet['count']>0) {
      	return $resultSet['vote']/$resultSet['count'];;
      } else {
      	return 0;
      }
	
}
function getCountByProductId($con, $productId) {
	$query = "SELECT COUNT(vote) as count from rating WHERE product_id = $productId";

      $result = mysqli_query($con, $query);
      $resultSet = mysqli_fetch_assoc($result);
      
      if($resultSet['count']>0) {
      	return $resultSet['count'];;
      } else {
      	return 0;
      }
	
}

?>
