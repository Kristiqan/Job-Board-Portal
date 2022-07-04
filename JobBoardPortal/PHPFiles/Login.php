<pre>
<?php
   
  $InvalidLogin = false;

   require 'db.php';  
   session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
   
   $email=$_POST['Email'];
   $password=$_POST['Password'];


    $sql_u = "SELECT * FROM registration WHERE Email='$email'";
  	$sql_e = "SELECT * FROM registration WHERE Password='$password'";
  	$res_u = mysqli_query($con, $sql_u);
  	$res_e = mysqli_query($con, $sql_e);

  	if (mysqli_num_rows($res_u) == 1 && mysqli_num_rows($res_e) == 1) {
      $_SESSION["Email"] = $email;
      header("Location: AdminPage.php");
  	}else{
  	  $InvalidLogin = true;
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
    <title>Login</title>
</head>
<body>
  <?php
  if($InvalidLogin)
  {
      echo '<div class="alert alert-danger" role="alert">
      Invalid Login!
    </div>';
  }
?>
<h1 class="text-center">Login</h1>


<div class="container mt-5">
    <div class="d-flex justify-content-center">
<form action="Login.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" placeholder="email@address.com"  name="Email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="Password">
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-primary">Login</button>
  </div>
</form>
</div>
</div>
</body>
</html>