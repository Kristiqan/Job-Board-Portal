<?php

  require 'db.php'; 
 
 if(count($_POST)>0) {
    $Id = $_POST['Id'];
    $Title = $_POST['Title'];
    $Description = $_POST['Description'];
    $Company = $_POST['Company'];
    $Salary_field = $_POST['Salary'];
    $query = "UPDATE submissionform SET Title='$Title', Description='$Description', Company='$Company', Salary_field='$Salary_field' WHERE Id='$Id'";
    $query_run = mysqli_query($con,$query);
    if($query_run) {
        header("Location:AdminPage.php");
    }
 }
 
 

  $sql = "SELECT * FROM submissionform";
  $result=mysqli_query($con,"SELECT Id, Title, Description, Company , Salary_field  FROM submissionform WHERE Id=". $_GET['Id'] ."");
  $row=mysqli_fetch_array($result);
 
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
    <title>EditJobOffer</title>
</head>
<body>

<div class="container mt-5">
    <div class=" justify-content-center">
<form action="" method="POST">
  <div class="mb-3">
    <input type="hidden" name="Id" class="form-control" value="<?php echo $row['Id']; ?> >
    <label for="exampleInputEmail1" class="form-label">Edit Title</label>
    <input type="text" class="form-control" name="Title" value="<?php echo isset($row['Title']) ? $row['Title'] : '';?>" placeholder="Job Position">
  </div>
  <label  class="form-label">Edit Job Discription</label>
  <div class="form-floating">
  <textarea class="form-control" name="Description" placeholder="Our Company Is The Best And Here is why" style="height: 200px"> <?php echo $row["Description"]; ?> </textarea>
  <label for="floatingTextarea2">Our Company Is The Best And Here Is Why</label>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Edit Company Name</label>
    <input type="text" class="form-control" name="Company" placeholder="Apple, Amazon etc." value="<?php echo isset($row['Company']) ? $row['Company'] : '';?>" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Edit Salary</label>
    <input type="text" class="form-control" name="Salary" placeholder="How Much Is Your Company Willing To Pay?" value="<?php echo isset($row['Salary_field']) ? $row['Salary_field'] : '';?>" >
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-primary">Update Offer</button>
  </div>
</form>
</div>
</div>
</body>
</html>