<?php
session_start();
include 'test.php';
$conn = OpenCon();
$userid=$_POST["Username"];
$password=$_POST["Password"];
$sql="Select * from users where user_id='".$userid."'AND user_password='".$password."'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($result);
if($rows>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$flag=$row["flag"];
		$usrname=$row["user_name"];
		if($flag==0)
		{
		    $sql1="update users set flag=1";
		    $result1=mysqli_query($conn,$sql1);
			echo '<script> alert("'.$usrname.' Logged in Successfully") </script>';	
			$_SESSION["User_id"]=$userid;

		}
		else
		{
			echo '<script> alert("'.$usrname.' You are Already Logged in") </script>';	
		}
		?>
		<script>
		location.href="index.html"
		</script>
		<?php
	}
}
else
{
	echo '<script> alert("INVALID CREDENTIALS") </script>';
	?>
	<script>
	location.href="login.html"
	</script>
	<?php
}
CloseCon($conn);
?>