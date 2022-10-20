<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

	
<div align="center" ">
			<form action="/lab2/view/login.php" target="_self" method="POST">
				<h1>Registration</h1>
				<table>
					<tr>
						<td>Name</td>
						<td>:</td>
						<td><input type="text" name="name" ></td>
					</tr>

					<tr>
						<td>E-mail</td>
						<td>:</td>
						<td><input type="text" name="email" ></td>
					</tr>

					<tr>
						<td>User Name</td>
						<td>:</td>
						<td><input type="text" name="username" ></td>
					</tr>

					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="text" name="password" ></td>
					</tr>

					<tr>
						<td>Confirm Password</td>
						<td>:</td>
						<td><input type="text" name="confirmpassword" ></td>
					</tr>

					<tr>
						<td>Gender</td>
						<td>:</td>
						<td>
							<input type="radio" name="gender" value="Male" id="Male"> Male
							<input type="radio" name="gender" value="Female" id="Female">Female
							<input type="radio" name="gender" value="Other" id="Other">
						</td>
					</tr>

					<tr>
						<td>Date of Birth</td>
						<td>:</td>
						<td><input type="date" name="dob" ></td>
					</tr>
				</table> <br>

				<input type="submit" name="Submit" value="Submit">
				<input type="reset" name="Reset" value="Reset">

			</form>			
		
</div>
	<br>

	
	
</body>
</html>