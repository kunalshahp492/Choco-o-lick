<?php
include 'test.php';
$conn = OpenCon();
$username=$_POST["Username"];
$mail=$_POST["Mail"];
$pass=$_POST["Password"];
$pass1=$_POST["Password1"];
if(strcmp($pass,$pass1)<>0)
{
	echo '<script> alert("'.$username.' Password Should be matched") </script>';
	?>
		<script>
		location.href="forgetpas.html"
		</script>
		<?php
}
else
{
		$sql1="select * from users where user_id='".$username."' AND user_mail='".$mail."'";
		$result1=mysqli_query($conn,$sql1);
		$rows=mysqli_num_rows($result1);
		if($rows>0)
		{
			$sql="update users set user_password='".$pass1."' where user_id='".$username."'";
			$result=mysqli_query($conn,$sql);
			if($result)
			{
				echo '<script> alert("'.$username.' Password Updated Successfully") </script>';
				?>
				<script>
				location.href="login.html"
				</script>
				<?php
			}	
		}
		else
		{
			echo '<script> alert("'.$username.' Invalid credentials") </script>';
			?>
			<script>
			location.href="forgetpas.html"
			</script>
			<?php
		}
		//$user=$row["user_id"];
		//echo $user;
}
CloseCon($conn);
?>
