<?php

$con=mysqli_connect("localhost","root", "pass", "writing_database");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(!empty($_POST['username']) && !empty($_POST['password']))
	{
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$result = mysqli_query($con,"SELECT * FROM users
		WHERE username = $username");
		echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
	}
else
{
	echo "<meta http-equiv=\"refresh\" content=\"0; url=loginpage.php?link=failed_login\" />"; //If one of the fields is not filled in.
}

mysqli_close($con);

?>
