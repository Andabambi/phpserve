<?php
include('dbconnection.php');
session_start();    
if(!isset($_SESSION['username']))
{
    header('location:userLogin.php');  }
if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
}
?>