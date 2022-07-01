<?php
include("Auth-Session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jobs</title>
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

	<div class="site-wrapper">
		<header class="site-header">
			<h1 class="site-title"><a href="#">Job Offers</a></h1>
		</header>

		<ul class="jobs-listing">
			<li class="job-card">
				<div class="job-primary">
					<h2 class="job-title"><a href="#">Front End Developer</a></h2>
					<div class="job-meta">
						<a class="meta-company" href="#">Company Awesome Ltd.</a>
						<span class="meta-date">Posted 14 days ago</span>
					</div>
				</div>
				<div class="job-edit">
					<a href="#">Edit</a>
					<a href="#">Delete</a>
				</div>
			</li>

			<li class="job-card">
				<div class="job-primary">
					<h2 class="job-title"><a href="#">Front End Developer</a></h2>
					<div class="job-meta">
						<a class="meta-company" href="#">Company Awesome Ltd.</a>
						<span class="meta-date">Posted 14 days ago</span>
					</div>
				</div>
				<div class="job-edit">
					<a href="#">Edit</a>
					<a href="#">Delete</a>
				</div>
			</li>

			<li class="job-card">
				<div class="job-primary">
					<h2 class="job-title"><a href="#">Front End Developer</a></h2>
					<div class="job-meta">
						<a class="meta-company" href="#">Company Awesome Ltd.</a>
						<span class="meta-date">Posted 14 days ago</span>
					</div>
				</div>
				<div class="job-edit">
					<a href="#">Edit</a>
					<a href="#">Delete</a>
				</div>
			</li>
		</ul>
		
		<footer class="site-footer">
			<p>Copyright 2020 | Developer links: 
				<a href="Edits.php">Edits</a>,
				<a href="Index.php">Home</a>,
				<a href="Jobs.php">Jobs</a>
			</p>
		</footer>
	</div>

</body>
</html>