<?php 

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Lab Work Form</title>
</head>
<?php

  			
	   if($_GET['user']=$_POST['uname'] && $_GET['pass']=$_POST['pass']) {
	            $name = $_POST['fname'];
			    $email = $_POST['Email'];
			    

				echo $name;
				echo $email;
			} 
			else {
				  header('Location: ragistration.php');
		          exit;
			    
		      }
		       
        $_SESSION['user']=$_POST['uname'];
		$_SESSION['fname'] = $_POST['fname'];;
		$_SESSION['Email'] =$_POST['Email']; 


		echo "Session value first is: " . $_SESSION['fname'];
		echo"<br>";
		echo "Session value Email is: " . $_SESSION['Email'];


		echo "<br>";
		




 ?>
 <a href="logout.php">logout</a>
</body>
</html>