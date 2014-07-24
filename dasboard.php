<?php
	session_start();
	$_SESSION['username'] = "Guy";
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
				<a href="help.html">Help</a>
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
			    <li><a href="index.php" class="active"><span>Dashboard</span></a></li>
			    <li><a href="jobinsert.php"><span>Insert Job</span></a></li>
			    <li><a href="jobmanage.php"><span>Job Management</span></a></li>
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
			<a href="index.html">Dashboard</a>
			<span>&gt;</span>
			Current Articles
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
					<div>
						<div class="box-head">
						<h2 class="left">Welcome <?php echo $_SESSION['username']?></h2>
						</div>
						<table class="table">
						<tr>
							<td id="dashboard"> <a href="jobinsert.html">
								Job Insert
							</a></td>
						</tr>
						<tr>
							<td id="dashboard"> <a href="jobmanage.html">
								Job Management
							</a></td>
						</tr>
						<tr>
							<td id="dashboard"> <a href="jobview.html">
								Job View
							</a></td>
						</tr>
						<tr>
							<td id="dashboard"> <a href="users.html">
								User List
							</a></td>
						</tr>
						<tr>
							<td id="dashboard"> <a href="help.html">
								Help Page
							</a></td>
						</tr>
					</table>
					</div>
					<!-- Table -->
					
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
		<span class="left">&copy; 2010 - CompanyName</span>
		<span class="right">
			Design by <a href="http://chocotemplates.com" target="_blank" title="The Sweetest CSS Templates WorldWide">Chocotemplates.com</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>
