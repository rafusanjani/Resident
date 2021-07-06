<!DOCTYPE html>
<?php
require('php_mysql.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<title>User form</title>
</head>
<body>

	<h2>Create a user</h2>
	<hr>

	<form method="POST" action="user_data.php">

		<label>Name: </label>
		<input type="text" name="name_of_person">
		<br> 
		<label>Phone number: </label>
		<input type="text" name="phone_number_of_person">
		<br>
		<label>Address:</label>
		<input type="text" name="address_of_person">
		<hr>

		<button type="submit">Save</button>
	</form>

	<table>
		<thead>
			<th>ID</th> <th>Name</th> <th> Phone </th><th> Address</th>  <th>Action</th>
		</thead>

		<tbody>
	

	<?php
	  $read_records = $connection->query("SELECT * FROM users");

	  foreach ($read_records as $key => $value) {

	  	echo "
	  		<tr>  
	  	        <td>".$value['ID']."</td> 
	  	        <td> ".$value['NAME']."</td> 
	  	        <td>".$value['PHONE_NUMBER']."</td> 
	  	        <td> ".$value['ADDRESS']."</td>
		  	        <a href='delete_user.php?user_id=".$value['ID']."'>Delete</a> 
		  	        <a href='update_user.php?user_id=".$value['ID']."'>Update</a>  
	  	        </td> 
	  	    </tr> ";
	  	 
	  }

	 ?>
	 </tbody>
	</table>


</body>
</html>