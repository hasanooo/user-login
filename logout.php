<?php 

	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Session Example</title>
</head>
<body>

	<h1>Session Example</h1>

	<?php 

        
		unset( $_SESSION['user']);
		header('Location: login.php');
		?>



</body>
</html>