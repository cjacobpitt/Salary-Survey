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
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			    <li><a href="#" class="active"><span>Dashboard</span></a></li>
			    <li><a href="#"><span>Insert Job</span></a></li>
			    <li><a href="#"><span>Job Management</span></a></li>
			    <li><a href="#"><span>Job View</span></a></li>
			    <li><a href="#"><span>Users</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				<?php
					if($_GET['link'] == "failed_login"){
						echo "<div class=\"msg msg-error\">
						<p><strong>Login Failed.</strong></p>
						<a href=\"loginpage.php\" class=\"close\">close</a>
					  </div>";
					}
					else
					{
						echo "";
					}
				?>
				<!-- Box -->
				<div class="box">
					<div>
						<p id="welcome">
							Please Log In
						</p>
						<form action="login.php" method="post">
							<tr>
								<td>
									Username: <input type="text" name="username">
								</td>

								<td>
									Password: <input type="password" name="password">
								</td>
								<td class="inline-field">
									<label>Warehouse</label>
									<select class="field size4">
										<option value="Stemilt">Stemilt</option>
										<option value"Starr Ranch">Starr Ranch</option>
										<option value"Farmer Joe's Goodtime Apple Packery">Farmer Joe's GAP</option>
									</select>
								</td>
							</tr>
							<input type="submit" class="button" value="submit" />
						</form>
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
		<span class="left">&copy; 2014 - Data Web Programming</span>
		<span class="right">
			Design by <a href="http://chocotemplates.com" target="_blank" title="The Sweetest CSS Templates WorldWide">Chocotemplates.com</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>
