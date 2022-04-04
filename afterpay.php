<?php
session_start();
include 'test.php';
$conn = OpenCon();
$userid=$_SESSION['User_id'];
$sql="Delete from cart where user_id='".$userid."'";
$result=mysqli_query($conn,$sql);
if($result)
{
	
			echo '<script> alert("'.$user_id.' Thank you for shopping with us") </script>';	
			?>
				<script>
				location.href="index.html"
				</script>
			<?php
}
CloseCon($conn);
?>