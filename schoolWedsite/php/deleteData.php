<?php

$conn=mysqli_connect("localhost","root","","schoolwebsite");
$ID=$_POST["ID"];

//sql delete statements
$sql="DELETE FROM `USERS` WHERE `ID`=$ID";
$query=mysqli_query($conn,$sql);
 if($query){
    ?>
     <script>
     window.alert("Data has been deleted successfully");
     window.location.href="user.php";
     </script>
    <?php
 }else{
    ?>
     <script>
    window.alert("Failed to delete");
    window.location.href="user.php";
     </script>
    <?php    
    }


    ?>