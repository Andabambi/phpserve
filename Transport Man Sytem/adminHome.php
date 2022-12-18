<?php
if(isset($_SESSION['username']))

{
    header('location:adminlogin.php');
}

if(isset($_POST['signup'])){
$seats=  $POST['seats'];
$model=  $POST['model'];
$str_pnt=  $POST['str_p'];
$end_pnt=  $POST['end_pnt'];
$driver_num=  $POST['driver_num'];
$arr_time=  $POST['arr_time'];
$dep_time=  $POST['dep_time'];
$fee=  $POST['fee'];
  
$trans_Type=  $POST['trans_Type'];
$query="insert into trans_Details(id,model,driver_num,str_pnt,end_pnt,dep_time,arr_time,fee,trans_Type)values('NULL','model','$driver_num','$str_pnt',"$end_pnt','dep_time','arr_time','$fee','$trans_Type')";
$run=mysqli_query($con,$query);
echo " your car details has been submitted successful";


}
?>
