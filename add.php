<?php
    	include('conn.php');
     
    	$fullname=$_POST['fullname'];
    	$prix=$_POST['prix'];
    	$disc=$_POST['disc'];
    	$phonenum=$_POST['phonenum'];
     
    	mysqli_query($conn,"insert into `user` (fullname,prix,disc,phonenum) values ('$fullname','$prix','$phonenum','$disc')");
    	header('location:index.php');
     
    ?>