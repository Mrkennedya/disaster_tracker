<?php
	include 'database.php';
	$query = "SELECT * FROM incidents ORDER BY name";
	$incidents = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> I Was Affected By – Incident List </title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/table.css">

	<!-- Bootstrap.css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<div id="container">

<h1>Individuals Affected by Natural Disasters</h1>

<div id="buttons">
<a class="btn btn-dark btn-sm" id="center" href="enter_new_incident.php" role="button">Create Another Incident</a>
</div>

<!-- this form is handled by the PHP file named in the action attribute -->
<form class="smallform" method="post" autocomplete="off">
<table class="table table-striped">
	<thead>
		<tr>
		  <th>Name</th>
		  <th>City</th>
		  <th>State</th>
		  <th>Disaster</th>
		  <th>Description</th>
		  <th>Link</th>
		</tr>

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
	   Each time it loops, it writes ONE ROW -->
	<?php while ($row = mysqli_fetch_assoc($incidents)) :  ?>

		<tr>
		  <td><?php echo stripslashes($row['name']); ?></td>
		  <td><?php echo $row['city']; ?></td>
		  <td><?php echo $row['state']; ?></td>
		  <td><?php echo $row['disaster']; ?></td>
		  <td><?php echo $row['description']; ?></td>
		  <td><?php echo $row['link']; ?></td>
		</tr>

	<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->
	 </thead>
</table>
<!-- close the form -->
<div id="buttons">
<a class="btn btn-dark btn-sm" id="center" href="enter_new_incident.php" role="button">Create Another Incident</a>
</div>

</div> <!-- close container -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
