<?php
	session_start();
	$_SESSION['username'] = "Chris";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Primavera</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Primavera</a></h1>
			<div id="top-navigation">
				Welcome <a href="#"><strong><?php echo $_SESSION['username']?></strong></a>
				<span>|</span>
				<a href="#">Help</a>
				<span>|</span>
				<a href="#">Profile Settings</a>
				<span>|</span>
				<a href="#">Log out</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			    <li><a href="index.php"><span>Dashboard</span></a></li>
			    <li><a href="jobinsert.php"><span>Insert Job</span></a></li>
			    <li><a href="jobmanage.php"><span>Job Management</span></a></li>
			    <li><a href="jobview.php"><span>Job View</span></a></li>
			    <li><a href="user.php" class="active"><span>Users</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<a href="#">Users</a>
			<span>&gt;</span>
			User List
		</div>
		<!-- End Small Nav -->
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Users</h2>
						<div class="right">
							<label>search users</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="search" />
						</div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<?php
								$con=mysqli_connect("localhost","root", "pass", "writing_database");
								// Check connection
								if (mysqli_connect_errno()) {
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}

								$result = mysqli_query($con,"SELECT * FROM users");
								$l = 0;
								echo "<tr>
								<th width=\"13\"><input type=\"checkbox\" class=\"checkbox\" /></th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
								<th>Role</th>
								<th>Warehouse</th>
								<th width=\"110\" class=\"ac\">Content Control</th>
								</tr>";


								while($row = mysqli_fetch_array($result)) {
								  echo "<tr>";
								  echo "<td><input type=\"checkbox\" name=\"items[]\" class=\"checkbox\" /></td>";
								  echo "<td><input type=\"text\" name=\"First Name\" value=" . $row['firstname'] . "></td>";
								  echo "<td><input type=\"text\" name=\"Last Name\" value=" . $row['lastname'] . "></td>";
								  echo "<td><input type=\"text\" name=\"Username\" value=" . $row['username'] . "></td>";								  
								  echo "<td><select name=\"Role\">
									    <option value=\"User\">User</option>
									    <option value=\"Admin\">Admin</option>
									    <option value=\"Super Admin\">Super Admin</option>
									    </select></td>";
								  echo "<td><select name=\"Warehouse\">
									    <option value=\"Stemilt\">Stemilt</option>
									    <option value=\"Starr Ranch\">Starr Ranch</option>
									    <option value=\"Farmer Joe's Goodtime Apple Packery\">Farmer Joe's GAP</option>
									    </select></td>";								  
								  echo "<td><a href=\"\" class=\"ico del\">Delete</a><a href=\"\" class=\"ico edit\">Edit</a></td>";
								  echo "</tr>";
								  ++$l;
								}

								  echo "<div class=\"pagging\">";
								  echo "<div class=\"left\">Showing 1-$l of $l</div>";
								  echo "<form action=\"userUpdate.php\"><input type=\"submit\" class=\"button\" value=\"Save Changes\" style=\"float: right\" /></form>";
								  echo "</div>";
								mysqli_close($con);
							?> 
						</table>
						
						
						<!-- Pagging -->
					
						<!-- End Pagging -->
						
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Quick Insert</h2>
					</div>
					<!-- End Box Head -->
						<!-- Form -->
						<form class = "form" action="insert.php" method="post">
							<table>
							<tr>
								<td>
									<label id="quickuser">First Name: </label><input type="text" name="firstname">
								</td>
							</tr>
							<tr>
								<td>
									<label id="quickuser">Last Name: </label><input type="text" name="lastname">
								</td>
							</tr>
							<tr>
								<td>
									<label id="quickuser">Username: </label><input type="text" name="username">
								</td>
							</tr>
							<tr>
								<td>
									<label id="quickuser">Password: </label><input type="password" name="password">
								</td>
							</tr>
							<tr>
								<td>
								<label id="quickuser">Warehouse</label>
									<select name = "warehouse" class="field size3">
										<option value="Stemilt">Stemilt</option>
										<option value"Starr Ranch">Starr Ranch</option>
										<option value"Farmer Joe's Goodtime Apple Packery">Farmer Joe's GAP</option>
									</select>
								</td>
							</tr>
							</table>
						<div class="buttons">
							<input type="submit" class="button" value="submit"/>
						</div>
					</form>
						<!-- End Form -->
						<!-- End Form Buttons -->
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">&copy; 2014 - Data Web Programming</span>
		<span class="right">
			Design by <a href="http://chocotemplates.com" target="_blank" title="The Sweetest CSS Templates WorldWide">Chocotemplates.com</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>
