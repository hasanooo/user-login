<!DOCTYPE html>
<html>
<head>
	<title>Lab Work Form</title>
</head>
<body>

	<h1> Registration Form </h1>

	<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		
		
		<label for="fname">First Name</label>
		<input type="text" name="fname" id="fname">

		<br>

		<label for="lname">Last name</label>
		<input type="text" name="lname" id="lname">

		<br>
		 <input type="radio" name="gender" id="male" value="male">
		<label for="male">Male</label>

		<input type="radio" name="gender" id="female" value="female">

		<label for="female">Female</label>
		<br> 
		<label for="Email">Enter Your Email:</label>
		    <input type="email" name="Email" id="Email">
	    <br>
	    <label for="uname">UserName</label>
		<input type="text" name="uname" id="uname">

		<br>
		 <br>
        <label for="pass">Password</label>
		<input type="password" id="pass" name="passw">
		<br>
		<label for="REmail">Enter Your Recovery Email:</label>
		    <input type="email" name="REmail" id="Email">
		    <br>
		<input type="submit" value="Submit">
		</form>
		<?php 

           $$filePath = "lab2.txt";
           echo "<br>";

           $$f1 = fopen($filePath, "a");
           echo "<br>";

           fwrite($f1, "$_POST['fname'];");
           fwrite($f1, "$_POST['lname'];");
           fwrite($f1, "$_POST['gender'];");
           fwrite($f1, "$_POST['Email'];");
           fwrite($f1, "$_POST['uname'];");
           fwrite($f1, "$_POST['passw'];");
           fwrite($f1, "$_POST['REmail'];");
           fclose($f1);
           ?>

</body>
</html>