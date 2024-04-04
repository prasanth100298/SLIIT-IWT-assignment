<?php
 include_once 'config.php';

?>
<?php
if($_GET["tripType"]==1){
    $tType = 'One Way Trip';
}else if($_GET["tripType"]==2){
    $tType = 'Return Trip';
}else{
	$tType = 'One Way Trip';
}

if($_GET["vehicleType"]==1){
	$vType = 'Bike';
}else if($_GET["vehicleType"]==2){
    $vType = 'Tuk';
}else if($_GET["vehicleType"]==3){
    $vType = 'Flex';
}else if($_GET["vehicleType"]==4){
    $vType = 'Mini';
}else if($_GET["vehicleType"]==5){
    $vType = 'Car';
}else if($_GET["vehicleType"]==6){
    $vType = 'MiniVan';
}else if($_GET["vehicleType"]==7){
    $vType = 'Van';
}else{
	$vType = 'Tuk';
}
	 $pLocation = $_GET["sLocation"];
	 $dLocation = $_GET["eLocation"];
	 $pDate = $_GET["pDate"];
	 $pTime = $_GET["sTime"];
	 $Fare = $_GET["amount"];
	 $mail = $_GET["mail"];
	 $name = $_GET["fname"];
	 $pNumber = $_GET["phoneNo"];
	 $promo = $_GET["promo"];

	 $sql = "insert into trip(Trip_ID,Trip_Type,Pick_Up_Location,Drop_Off_Location,Pick_Up_Date,Pick_Up_Time,Vehicle_Type,Estimated_Fare,Email,Name,Phone_No,Promo_Code)values('','$tType','$pLocation','$dLocation','$pDate','$pTime','$vType','$Fare','$mail',' $name','$pNumber','$promo')";
      
	 if(mysqli_query($conn ,$sql )){
		 echo "<script>alert('Record inserted successfully')</script>";
		 header("Location:Home Page.html");
	 }else{
		echo "<script>alert('Error in inserting records')</script>";
	 }
	 mysqli_close($conn);
?>




