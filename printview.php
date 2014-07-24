<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Primavera</title>
	<link rel="stylesheet" href="css/printstyle.css" type="text/css" media="all" />
</head>
<body>							

						<table>
							<?php
								$con=mysqli_connect("localhost","root", "pass", "writing_database");
								// Check connection
								if (mysqli_connect_errno()) {
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}

								$result = mysqli_query($con,"SELECT * FROM jobs");
								$l = 0;
								echo "<tr>
								<th><strong>Name</strong></th>
								<th><strong>Compensation</strong></th>
								<th><strong>Bonus</strong></th>
								<th><strong>Auto Provided</strong></th>
								<th><strong>Health Insurance</strong></th>
								<th><strong>Active</strong></th>
								</tr>";


								while($row = mysqli_fetch_array($result)) {
								  echo "<tr>";
								  echo "<td>" . $row['jobname'] . "</td>";
								  echo "<td>" . $row['comp'] . "</td>";
								  echo "<td>" . $row['bonus'] . "</td>";
								  echo "<td>" . $row['auto'] . "</td>";
								  echo "<td>" . $row['health'] . "</td>";
								  echo "<td>" . $row['active'] . "</td>";
								  echo "</tr>";
								  ++$l;
								}

								  echo "<div class=\"pagging\">";
								  echo "<div class=\"left\">Showing 1-$l of $l</div>";
								  echo "</div>";
								mysqli_close($con);
							?> 
						</table>
