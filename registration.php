<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
	</head>
	
	<body>
			<div id="registerform">	
				<form method="post" action="post-message.php" onsubmit="return validate()">

					<label for="name">Username</label>
						<input id="name" name="name" type="text" value="" maxlength="255" />
					<br/><br/>

					<label for="displayname">Display Name</label>
						<input id="displayname" name="name" type="text" value="" maxlength="255" />
					<br/><br/>
					
					<label for="password">Password</label>
						<input id="password" name="password" type="password" value="" maxlength="255" />
					<br/><br/>

					<label for="repassword">Re-type Password</label>
						<input id="repassword" name="repassword" type="password" value="" maxlength="255" />
					<br/><br/>
					
					<label for="email">Email Address</label>
						<input id="email" name="email" type="text" value="" maxlength="255" /> <mark id="alert"></mark>
					<br/><br/>
					
					<label for="phoneno">Phone Number</label>
						<input id="phoneno" name="phoneno" type="text" value="" maxlength="255" />
					<br/><br/>			
					
					<label>Gender</label>
						<input name="gender" type="radio" value="male" />Male
						<input name="gender" type="radio" value="female" />Female
					<br/><br/>
						
			<!--		<label for="message">Message</label><br/>
					<textarea id="message" name="message" rows="10" cols="80" ></textarea>
					<br/><br/> -->
			
					<span id='error'>*All fields are required</span><br /><br />
					<input type="submit" name="submit" value="Submit"/>
					
				</form>
			</div>

	</body>

</html>