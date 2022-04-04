<?php
include 'test.php';
$conn = OpenCon();
$sql="Select * from users";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
	$flag=$row["flag"];
	if($flag==1)
	{
		$sql1="update users set flag=0";
		$result1=mysqli_query($conn,$sql1);
		echo '<script> alert("Logged out Seccessfully") </script>';
		?>
		<script>
		location.href="login.html"
		</script>
		<?php	
	}
	else
	{
		echo '<script> alert("You are not Logged inn") </script>';	
		?>
		<script>
		location.href="login.html"
		</script>
		<?php
	}

}
CloseCon($conn);
?> 