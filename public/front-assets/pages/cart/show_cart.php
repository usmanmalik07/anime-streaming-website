<?php 

include("include/connection.php");



$query = "SELECT * FROM items"; 
$res = mysqli_query($connect,$query);

$output = " ";


  if (mysqli_num_rows($res) < 1) {
  	$output .= "No Item";
  }


  while ($row = mysqli_fetch_array($res)) {

  	 $output .= "<div class='col-md-3 shadow-sm'>
        <img src='img/".$row['image']."' style='height:250px;width:100%;'>
        <h5 class='text-center'>".$row['name']."</h5>
        <h5 class='text-center'>$".$row['price']."</h5>
        <input type='hidden' name='price' id='price".$row['id']."' value='".$row['price']."'>
        <input type='hidden' name='name' id='name".$row['id']."' value='".$row['name']."'>
        <input type='number' name='quantity' id='quantity".$row['id']."' class='form-control' value='1'>

        <input type='submit' name='add_to_cart' class='btn btn-warning my-2 add' value='Add To cart' id='".$row['id']."' style='margin-left:55px;'>


  	 </div>";
  	   
  }


 echo $output;


 ?>