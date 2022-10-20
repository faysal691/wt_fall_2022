<!DOCTYPE html>
<html>
<head>
</head>
<body>


	<div align="center" >
		<?php
		if (isset($message)) {
		 	echo "$message";
		 } 
		?>
		<form action="/lab2/controller/logincontrol.php" target="_self" method="POST">
			
				<table>
					<tr>
						<td>User Name :</td>
						<td><input type="text" name="username" ></td>
					</tr>
					<tr>
						<td>Password :</td>
						<td><input type="password" name="password"></td>
					</tr>		
				</table>
				<hr>
				<input type="submit" name="login" value="login">
				 <a href=" /lab2/view/registration.php">Create an account?</a>
		
		</form>		
	</div>

	<br>

	

</body>
</html>