<?php 
 if(isset($_SESSION['user_email1'])){
  
    echo " <script> window.open('index.php?view_profile','_self')</script>";
    }  

  elseif(!isset($_SESSION['user_email'])){
  
    echo " <script> window.open('../index.php','_self')</script>";
    }
 else {
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fee Structure</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="text-align:center;">UG Fee Structure</h2>
              <table class="table table-bordered">
    
      
        <tr bgcolor="skyblue">
        <th style="text-align:center;"> Category </th>    
        <th style="text-align:center;">2021</th>
        <th style="text-align:center;">2022</th>
        <th style="text-align:center;">2023</th>
        <th style="text-align:center;">2024</th>
        <th style="text-align:center;">2025</th>    
      </tr>
      <?php
include('includes/connection.php');

$get_pro = "SELECT*FROM ugfeestructure";

$run_pro = mysqli_query($con,$get_pro);

$i = 0;

while($row_pro = mysqli_fetch_array($run_pro)){
	
	$pro_id = $row_pro['catagory'];
	$pro_1 = $row_pro['Y_2011'];
	$pro_2 = $row_pro['Y_2012'];
	$pro_3 = $row_pro['Y_2013'];
	$pro_4 = $row_pro['Y_2014'];
	$pro_5 = $row_pro['Y_2015'];
	$i++;

?>
<tr align="center">                  
<th bgcolor="skyblue" style="text-align:center;"><?php echo $pro_id; ?> </th>
<td><?php echo $pro_1; ?> </td>
<td><?php echo $pro_2; ?> </td>
<td><?php echo $pro_3; ?> </td>
<td><?php echo $pro_4; ?> </td>
<td><?php echo $pro_5; ?> </td>
<!--<td><img src="product_images/<?php// echo $pro_image; ?>" width="60" height="60"  /></td>
<td><?php //echo $pro_price; ?> </td>
<td><a href = "index.php?edit_pro=<?php //echo $pro_id; ?>">Edit</a></td>
<td><a href = "delete_pro.php?delete_pro=<?php //echo $pro_id;?>">Delete</a></td>-->
                  </tr>

<?php } ?>
    
    
    
      
    
  </table>

<h2 style="text-align:center;">PG Fee Structure</h2>    
<table class="table table-bordered">
    
      
        <tr bgcolor="skyblue" >
        <th style="text-align:center;"> Category </th>    
        <th style="text-align:center;">2021</th>
        <th style="text-align:center;">2022</th>
        <th style="text-align:center;">2023</th>
        <th style="text-align:center;">2024</th>
        <th style="text-align:center;">2025</th>    
      </tr>
    <?php
include('includes/connection.php');

$get_pro = "SELECT*FROM phdfeestructure";

$run_pro = mysqli_query($con,$get_pro);

$i = 0;

while($row_pro = mysqli_fetch_array($run_pro)){
	
	$pro_id = $row_pro['catagory'];
	$pro_1 = $row_pro['Y_2011'];
	$pro_2 = $row_pro['Y_2012'];
	$pro_3 = $row_pro['Y_2013'];
	$pro_4 = $row_pro['Y_2014'];
	$pro_5 = $row_pro['Y_2015'];
	$i++;

?>
<tr align="center">
    <th bgcolor="skyblue" style="text-align:center;"><?php echo $pro_id; ?> </th>
<td contenteditable="true"><?php echo $pro_1; ?> </td>
<td> <?php echo $pro_2; ?> </td>
<td><?php echo $pro_3; ?> </td>
<td><?php echo $pro_4; ?> </td>
<td><?php echo $pro_5; ?> </td>
<!--<td><img src="product_images/<?php// echo $pro_image; ?>" width="60" height="60"  /></td>
<td><?php //echo $pro_price; ?> </td>
<input type="text">
<td><a href = "index.php?edit_pro=<?php //echo $pro_id; ?>">Edit</a></td>
<td><a href = "delete_pro.php?delete_pro=<?php //echo $pro_id;?>">Delete</a></td>-->
    </tr>

<?php 
} 
 ?>
      
    
  </table>    


  
    <?php
include('includes/connection.php');

$get_pro = "SELECT*FROM mtfeestructure";

$run_pro = mysqli_query($con,$get_pro);

$i = 0;

while($row_pro = mysqli_fetch_array($run_pro)){
  
  $pro_id = $row_pro['catagory'];
  $pro_1 = $row_pro['Y_2011'];
  $pro_2 = $row_pro['Y_2012'];
  $pro_3 = $row_pro['Y_2013'];
  $pro_4 = $row_pro['Y_2014'];
  $pro_5 = $row_pro['Y_2015'];
  $i++;

?>

<!--<td><img src="product_images/<?php// echo $pro_image; ?>" width="60" height="60"  /></td>
<td><?php //echo $pro_price; ?> </td>
<input type="text">
<td><a href = "index.php?edit_pro=<?php //echo $pro_id; ?>">Edit</a></td>
<td><a href = "delete_pro.php?delete_pro=<?php //echo $pro_id;?>">Delete</a></td>-->
    </tr>

<?php }
} 
 ?>
      
    
  </table>  
    
</div>

</body>
</html>

