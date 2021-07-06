<!DOCTYPE html>
<?php
require('php_mysql.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Update user</title>
</head>
<body>

	<?php
	  $user_id = $_GET['user_id'];

	  $this_user = $connection->query("SELECT * FROM users WHERE ID = $user_id "); 

	  $record = $this_user->fetch_assoc();
	 ?>

	<form method="POST" action="update_user_data.php">

		<label>Name: </label>
		<input type="text" value="<?php echo $record['NAME'] ?>" name="name_of_person">
		<br> 
		<label>Phone number: </label>
		<input type="text" value="<?php echo $record['PHONE_NUMBER'] ?>" name="phone_number_of_person">

		<input type="hidden" name="user_id" value="<?php echo $user_id ?>">
		<br>
		<label>Address:</label>
		<input type="text" name="" value="<?php echo $record['ADDRESS'] ?>" name="address_of_person">
		<hr>

		<button type="submit">Save changes</button>
	</form>
