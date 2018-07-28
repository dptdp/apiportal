<!DOCTYPE html>
<html>
<head>
	<title>API Portal</title>
<?php 

//echo "Hello";


?>
</head>
<body>
	<form method="post" action="add_account">
		Username: <input name="username" type="text"/><br/>
		Password: <input name="password" type="text"/><br/>
		Account Name: <input name="account_name" type="text"/><br/>
		<input type="submit">
	</form>
	<?php
		echo CLIENT_ID ."<br/>";
		echo CLIENT_SECRET ."<br/>";

		print_r($result);
	?>
</body>
</html>
