<?php
include("Auth-Session.php");

 require 'db.php'; 

  $sql = "SELECT * FROM submissionform ORDER BY id DESC";
   $result = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AdminPage</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="../Bootstrap-5.1.3/css/bootstrap.min.css">
    <script src="../Bootstrap-5.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/master.css">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<ul class="nav nav-tabs justify-content-end">
  <li class="nav-item">
    <a class="nav-link"><?php echo $_SESSION['Email']; ?></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Logout.php">Log out</a>
  </li>
 
</ul>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
<div class="container mt-5">

<div class="alert alert-danger" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <h4 class="alert-heading">WARNING</h4>
  <p>This page is intended for Editing job offers by administrators</p>
  <hr>
  <p class="mb-0">If you are not an administrator or you got here by accident please Press the <b>Log Out</b> button at the top right corner and contact the owner of the website.</p>
</div>
</div>

	<div class="site-wrapper">
		<header class="site-header">
			<h1 class="site-title"><a href="#">Edit Job Offers</a></h1>
		</header>
	<?php 
 while($row = mysqli_fetch_assoc($result)) {
	
?>
		<ul class="jobs-listing">
			<li class="job-card">
				<div class="job-primary">
					<h2 class="job-title"><a href="#"><?php echo $row["Title"]; ?></a></h2>
					<div class="job-meta">
						<p class="meta-company" href="#"><?php echo $row["Company"];  ?></p>
						<span class="job-location"> Salary: <?php echo $row["Salary_field"]; ?> lv/month</span>
					</div>
				</div>
				<div class="job-edit">
					<a href="EditJobOffer.php?Id=<?php echo $row["Id"] ?>">Edit</a>
					<a href="DeleteJobOffer.php?Id=<?php echo $row["Id"] ?>">Delete</a>
				</div>
			</li>

		<?php
		}
		?>

			
		
		<footer class="site-footer">
			<p>Copyright 2022 | Kristiyan Stefanov
			</p>
		</footer>
	</div>

</body>
</html>