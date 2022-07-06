<?php
     require 'db.php'; 

  $sql = "SELECT * FROM submissionform";
  $aid=intval($_GET['Id']);
  $result=mysqli_query($con,"SELECT Id, Title, Description, Company , Salary_field  FROM submissionform WHERE Id='$aid'");
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jobs</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link rel="stylesheet" href="../css/master.css">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="site-wrapper">
		<header class="site-header">
			<h2 class="site-title"><a href="#">Job Offers</a></h2>
		</header>
		<?php 
        while($row = mysqli_fetch_assoc($result)) {
        ?>
		<div class="job-single">
			<main class="job-main">
				<div class="job-card">
					<div class="job-primary">
						<header class="job-header">
							<h2 class="job-title"><a href="#"><?php echo $row["Title"]; ?></a></h2>
							<div class="job-meta">
								<p class="meta-company" href="#"><?php echo $row["Company"]; ?></p>
							</div>
							<div class="job-details">
								<span class="job-location">Salary: <?php echo $row["Salary_field"];?> lv/month</span>
								<span class="job-type">Contract Company For More Information</span>
							</div>
						</header>
						<div class="job-body">
							<h3>Job Description: </h3>
							<p><?php echo $row["Description"]; ?></p>
						</div>
					</div>
				</div>
			</main>
			<aside class="job-secondary">
				<a href="Index.php" class="button button-wide">Go Back</a>
			</aside>
		</div>
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