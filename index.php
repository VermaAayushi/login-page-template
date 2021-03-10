<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db="loginform";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $conn->select_db($db);

  if(isset($_POST['username']))
  {
      
      $uname=$_POST['text'];
      $password=$_POST['password'];
      
      $sql="select * from loginfo where username='".$uname."'AND password='".$password." limit 1";
      
      $result=$conn->query($conn,$sql);

      echo "$result";
      
      if(mysqli_num_rows($result)==1)
      {
          echo " You Have Successfully Logged in";
          exit();
      }
      else
      {
          echo " You Have Entered Incorrect Password";
          exit();
      }
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" a href="css\style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
	<div class="container">
	<img src="image/login.png"/>
		<form>
			<div class="form-input">
				<input type="text" name="text" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>