<?php
    	include('conn.php');
    	$id=$_GET['id'];
    	$query=mysqli_query($conn,"select * from `user` where userid='$id'");
    	$row=mysqli_fetch_array($query);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>Basic MySQLi Commands</title>
    </head>
    <body>
    	<h2>Edit</h2>
    	<form method="POST" action="update.php?id=<?php echo $id; ?>">
    		<label>fulltname:</label><input type="text" value="<?php echo $row['fullname']; ?>" name="firstname">
    		<label>phone number:</label><input type="number" value="<?php echo $row['phonenum']; ?>" name="phonenum">
    		<label>prix:</label><input type="text" value="<?php echo $row['prix']; ?>" name="prix">
    		<label>discription:</label><input type="text" value="<?php echo $row['prix']; ?>" name="disc">
    		<input type="submit" name="submit">
    		<a href="index.php">Back</a>
    	</form>
    </body>
    </html>