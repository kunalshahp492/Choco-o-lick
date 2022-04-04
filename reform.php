<?php
include 'test.php';
$conn = OpenCon();
$username=$_POST["Name"];
$userid=$_POST["Username"];
$password=$_POST["Password"];
$mail=$_POST["Email"];
$phone=$_POST["Phone"];
$add=$_POST["Address"];
$sql="INSERT INTO users (user_name, user_id, user_password, user_mail, user_address, user_phone)
	  VALUES ('".$username."','".$userid."','".$password."','".$mail."','".$add."','".$phone."')";
$result=mysqli_query($conn,$sql);
//$rows=mysqli_num_rows($result);
if($result)
{
	echo '<script> alert("Registered Successfully") </script>';
	?>
	<script>
	location.href="index.html"
	</script>
	<?php
	//header("location:index.html");
	/*$sql1="Select * from users";
	$result1=mysqli_query($conn,$sql1);
	$rows=mysqli_num_rows($result1);
	if($rows>0)
	{
		while($row=mysqli_fetch_assoc($result1))
		{
			
		}
	}
	else
	{
		echo '<script>alert("Registeration Failed")</script>';
	}*/
}
else
{
	echo "Error".$sql. "" .mysqli_error($conn);
}
CloseCon($conn);
?>