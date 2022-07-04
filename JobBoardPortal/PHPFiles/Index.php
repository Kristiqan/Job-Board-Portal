<?php
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
	<title>Job Board Portal</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="../Bootstrap-5.1.3/css/bootstrap.min.css">
    <script src="../Bootstrap-5.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/master.css">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<ul class="nav nav-tabs justify-content-end ">
	
<div class="container  mt-1 mb-1  d-flex " >
      <input class="form-control me-2" name="Searchterm" type="search"  placeholder="Search" >
      <button class="btn btn-primary" type="submit">Search</button>

</div>
  <li class="nav-item">
    <a class="nav-link" href="Login.php">Log in</a>
	<li class="nav-item">
    <a class="nav-link" href="Registration.php">Register</a>
  </li>
  </li>
</ul>
	<div class="site-wrapper">
		<header class="site-header">
			<h1 class="site-title"><a href="#">Job Offers</a></h1>
		</header>
      
		
<?php 
 while($row = mysqli_fetch_assoc($result)) {
	
?>
<ul class="jobs-listing">
			<li class="job-card">
				<div class="job-primary">
					<h2 class="job-title"><a href="MoreInfoJobsub.php?Id=<?php echo $row["Id"] ?>"> <?php echo $row["Title"]; ?> </a></h2>
					<div class="job-meta">
						<p class="meta-company"><?php echo $row["Company"];  ?></p>
						<span class="meta-date">Click On Offer Title For More Info </span>
					</div>
					<div class="job-details">
						<span class="job-location"> Salary: <?php echo $row["Salary_field"]; ?> lv/month</span>
						<span class="job-type">Contact Company For More Information</span>
					</div>
				</div>
			</li>
		<?php
		}
		?>
		<a class="btn btn-primary mt-5" href="AddJobSub.php" role="button">Add A New Job Offer</a>
		<footer class="site-footer">
			<p>Copyright 2022 | Kristiyan Stefanov
			</p>
		</footer>
	</div>

</body>
</html>