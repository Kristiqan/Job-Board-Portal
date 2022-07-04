<?php
require 'db.php';
$getid = $_GET['Id'];
$query = "DELETE FROM submissionform WHERE Id = '$getid'";

$query_run = mysqli_query($con,$query);
if($query_run){
	header('Location:AdminPage.php');
}