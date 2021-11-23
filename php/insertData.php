<?php

$conn=mysqli_connect("localhost","root","","schoolwebsite");

$fullname=$_POST["Fullname"];
$email=$_POST["emailadress"];
$phone=$_POST["phonenumber"];
$password=$_POST["password"];
$cpassword=$_POST["confirm_password"];

$sql="INSERT INTO `users` (`ID`, `fullname`, `emailadress`, `phonenumber`, `Password`, `Confirm_password`) VALUES (NULL, '$fullname', '$email', '$phone', '$password', '$cpassword')"; 

$query=mysqli_query($conn,$sql);

if($query){
    ?>
    <script>
        window.alert("Data is saved successfully");
        window.location.href="../pages/register.html";
    </script>

    <?php
}else{
    ?> 
    <script>
        window.alert("Failed ! could not insert");
        window.location.href="../pages/register.html";
    </script>
    
    <?php
}










?>