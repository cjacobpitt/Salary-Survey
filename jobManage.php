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
			    <li><a href="jobmanage.php" class="active"><span>Job Management</span></a></li>
			    <li><a href="jobview.php"><span>Job View</span></a></li>
			    <li><a href="user.php"><span>Users</span></a></li>
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
			<a href="#">Job Management</a>
			<span>&gt;</span>
			Job List
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
						<h2 class="left">Current Articles</h2>
						<div class="right">
							<label>search articles</label>
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

								$result = mysqli_query($con,"SELECT * FROM jobs");
								$l = 0;
								echo "<tr>
								<th>Name</th>
								<th>Compensation</th>
								<th>Bonus</th>
								<th>Auto Provided</th>
								<th>Health Insurance</th>
								<th>Active</th>
								<th width=\"110\" class=\"ac\">Content Control</th>
								</tr>";


								while($row = mysqli_fetch_array($result)) {
								  echo "<tr>";
								  echo "<td><h3>" . $row['jobname'] . "</h3></td>";
								  echo "<td><h3>" . $row['comp'] . "</h3></td>";
								  echo "<td><h3>" . $row['bonus'] . "</h3></td>";
								  echo "<td><h3>" . $row['auto'] . "</h3></td>";
								  echo "<td><h3>" . $row['health'] . "</h3></td>";
								  echo "<td><h3>" . $row['active'] . "</h3></td>";
								  echo "<td><a href=\"\" class=\"ico del\">Delete</a><a href=\"jobmanagego.php\" class=\"ico edit\">Edit</a></td>";
								  echo "</tr>";
								  ++$l;
								}

								  echo "<div class=\"pagging\">";
								  echo "<div class=\"left\">Showing 1-$l of $l</div>";
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
		<span class="left">&copy; 2010 - CompanyName</span>
		<span class="right">
			Design by <a href="http://chocotemplates.com" target="_blank" title="The Sweetest CSS Templates WorldWide">Chocotemplates.com</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>
