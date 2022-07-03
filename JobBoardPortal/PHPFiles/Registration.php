<pre>
<?php
$successfulReg=false;
$UserExists=false;
$EmailExists=false;

require 'db.php'; 

if($_SERVER['REQUEST_METHOD']=='POST')
{
  
   
   $username=$_POST['Username'];
   $email=$_POST['Email'];
   $password=$_POST['Password'];

    
    $sql_u = "SELECT * FROM registration WHERE Username='$username'";
  	$sql_e = "SELECT * FROM registration WHERE Email='$email'";
  	$res_u = mysqli_query($con, $sql_u);
  	$res_e = mysqli_query($con, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
  	  $UserExists=1;	
  	}else if(mysqli_num_rows($res_e) > 0){
      $EmailExists=1;
  	}else{
           $query = "INSERT INTO registration(Username, Email, Password) 
      	    	  VALUES ('$username', '$email', '$password')";
           $results = mysqli_query($con, $query);
           if($results)
           {
                $successfulReg=true;
           }
          
  	}
  }

?>
</pre>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap-5.1.3/css/bootstrap.min.css">
    <script src="../Bootstrap-5.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/master.css">
    <title>Registration</title>
</head>
<body>
<?php
if($UserExists)
{
    echo '<div class="alert alert-danger" role="alert">
    User Already Exists!
  </div>';
}

?>
<?php
if($successfulReg)
{
    echo '<div class="alert alert-success" role="alert">
    Registration Successful! You can login from <a href="Login.php">here</a>
  </div>';
}

if($EmailExists)
{
    echo '<div class="alert alert-danger" role="alert">
    Email Already Exists!
  </div>';
}
?>

<h1 class="text-center">Registration</h1>


<div class="container mt-5">
    <div class="d-flex justify-content-center">
<form action="Registration.php" method="POST">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="John Smith" name="Username" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" placeholder="email@address.com"  name="Email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="Password">
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-primary">Register</button>
  </div>
</form>
</div>
</div>
</body>
</html>