<?php
session_start();
$var20 =$_SESSION['flight_id'];
$var1=$_SESSION['depart_city'];
$var2=$_SESSION['arrival_city'];
//$var3=$_SESSION['depart_date'];
$inter_med=$_SESSION['intermediate_city'];
$conn1=new mysqli('localhost','root','','airline');
$sql909="select CURDATE() AS date";
$res734=$conn1->query($sql909);
$row79=mysqli_fetch_array($res734);
$tenet=$row79['date'];
$user=$_SESSION['username'];
$sql7="insert into Ticket values( '','$var20','$var1','$var2','$inter_med','$user','$tenet')";
$sql90="insert into checks values('$user','$var20')";
$res7=$conn1->query($sql90);
$res7=$conn1->query($sql7);
$res7=$conn1->query($sql71);
header("Location:http://localhost/Takeoff/home/Details/index.php")
?>
