<?php

if(isset($_POST['sign up'])){

    $username=$_POST['username'];
    $address=$_POST['address'];

    $password=$_POST['password'];
    $email=$_POST['email'];
    $username=$_POST['signup'];
    $user_num=$_POST['user_num'];
//user register table in database
$query="select*from user register where username='$username' ";
$run=mysqli_query($con,$query);
if(mysqli_num_rows($run)>0){
$rowfetch=mysqli_fetch_assoc($rum);
if($username==isset($rowfetch['username'])){
    echo"username already exist so select another username";
}
}
else{
$query='insert into userregister (id,username address,password,email,contact")values('NULL','$username','$address','password','email','$user_num') ';
$run= mysqli_query($con,$query);
echo " your registrarion has been submitted successfully";
}
}
?>