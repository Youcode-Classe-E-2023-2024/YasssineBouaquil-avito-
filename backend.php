<?php
$name = $_POST['name'];
echo $name;




$conn = mysqli_connect('localhost','root','','database');
$sql = "SELECT * FROM smiya tableay";

mysqli_query($conn,$sql);

?>