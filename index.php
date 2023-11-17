<!DOCTYPE html>
    <html>
		<link rel="stylsheet" href="style.css">
    <head>
    <title>Basic MySQLi Commands</title>
    </head>
    <body>
    	<div>
    		<form method="POST" action="add.php">
    			<label>fullname:</label><input type="text" name="fullname">
    			<label>phone number:</label><input type="number" name="phonenum">
    			<label>Prix:</label><input type="number" name="prix">
    			<label>discreption:</label><input type="text" name="disc">
    			<input type="submit" name="add">
    		</form>
    	</div>
    	<br>
    	<div>
    		<table border="1">
    			<thead>
    				<th>Firstname</th>
    				<th>Lastname</th>
    				<th></th>
    			</thead>
    			<tbody>
    				<?php
    					include('conn.php');
    					$query=mysqli_query($conn,"select * from `user`");
    					while($row=mysqli_fetch_array($query)){
    						?>
    						<tr>
    							<td><?php echo $row['fullname']; ?></td>
    							<td><?php echo $row['phonenum']; ?></td>	
    							<td><?php echo $row['prix']; ?></td>
    							<td><?php echo $row['disc']; ?></td>
    							<td>
    								<a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
    								<a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
    							</td>
    						</tr>
    						<?php
    					}
    				?>
    			</tbody>
    		</table>
    	</div>
    </body>
    </html>
