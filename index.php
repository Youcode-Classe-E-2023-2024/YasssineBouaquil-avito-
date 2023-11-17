<!DOCTYPE html>
<<<<<<< HEAD
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
=======
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire d'Annonce</title>
</head>

<body>
    <h1>Bonjour !!Veuillez Enter Votre Produit </h1>

    <form action="YASINE.php" method="post" enctype="multipart/form-data">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="image">Image :</label>
        <input type="file" id="image" name="image" accept="image/*" required>

        <label for="date">Date :</label>
        <input type="date" id="date" name="date" required>

        <label for="description">Description :</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <input type="submit" value="Soumettre">
    </form>

</body>

</html>
>>>>>>> f84888402653459f84f889287df8587235689d0d
