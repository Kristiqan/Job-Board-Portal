<?php
     require 'db.php'; 

  $sql = "SELECT * FROM submissionform";
  $aid=intval($_GET['Id']);
  $result=mysqli_query($con,"SELECT Id, Title, Description, Company , Salary_field   FROM submissionform WHERE Id='$aid'");
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
			<h2 class="site-title"><a href="Index.php">Job Offers</a></h2>
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
								<a class="meta-company" href="#"><?php echo $row["Company"]; ?></a>
							</div>
							<div class="job-details">
								<span class="job-location">Salary: <?php echo $row["Salary_field"];?></span>
								<span class="job-type">Contract Company</span>
							</div>
						</header>
						<div class="job-body">
							<p><?php echo $row["Description"]; ?></p>
						</div>
					</div>
				</div>
			</main>
			<aside class="job-secondary">
				<div class="job-logo">
					<div class="job-logo-box">
						<img src="https://i.imgur.com/ZbILm3F.png" alt="">
					</div>
				</div>
				<a href="Index.php" class="button button-wide">Go Back</a>
			</aside>
		</div>
		<?php
		}
	
		?>
		<footer class="site-footer">
			<p>Copyright 2020 | 
				
			</p>
		</footer>
	</div>

</body>
</html>