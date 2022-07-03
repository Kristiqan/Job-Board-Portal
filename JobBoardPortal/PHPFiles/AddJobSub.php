<?php
$JobAddedSuccessfully=false;
require 'db.php';  
if($_SERVER['REQUEST_METHOD']=='POST')
{

  $title=$_POST['Title'];
  $jobdis=$_POST['JobDis'];
  $companyName=$_POST['CompanyName'];
  $salary=$_POST['Salary'];


  $query = "INSERT INTO submissionform(Title, Description, Company, Salary_field) 
       	    	  VALUES ('$title', '$jobdis', '$companyName', '$salary')";
        $results = mysqli_query($con, $query);
        if($results)
        {
          $JobAddedSuccessfully=true;
        }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap-5.1.3/css/bootstrap.min.css">
    <script src="../Bootstrap-5.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/master.css">
    <title>AddJobsubmission</title>
</head>
<body>
<?php
if($JobAddedSuccessfully)
{
  echo '<div class="alert alert-success" role="alert">
  Job Offer Added Successfully! You can see your job offer <a href="Index.php">here</a></div>';
}

?>


<h1 class="text-center">Add a new Job Offer</h1>


<div class="container mt-6">
    <div class=" justify-content-center">
<form action="AddJobSub.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control" placeholder="Job Position" name="Title" >
  </div>
  <label  class="form-label">Job Discription</label>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Our Company Is The Best And Here is why" name="JobDis" style="height: 200px"></textarea>
  <label for="floatingTextarea2">Our Company Is The Best And Here Is Why</label>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Company Name</label>
    <input type="text" class="form-control" placeholder="Apple, Amazon etc." name="CompanyName" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Salary</label>
    <input type="text" class="form-control" placeholder="How Much Is Your Company Willing To Pay?" name="Salary" >
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-primary">Submit Offer</button>
  </div>
</form>
</div>
</div>
</body>
</html>