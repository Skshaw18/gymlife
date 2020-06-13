<?php 

$con = mysqli_connect('localhost','root');

if($con)
{
	echo "Connection Successful";
	
}
else
{
	echo "No Connection";
}

mysqli_select_db($con, 'gymlife');

$user = $_POST['user'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$query = "INSERT INTO usercontactdata(user, email, comment) VALUES ('$user','$email','$comment')";

mysqli_query($con, '$query');
echo "$query"; 
//header('location:contact.php');

?>