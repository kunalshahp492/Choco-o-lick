<?php
session_start();
include 'test.php';
$conn = OpenCon();
$userid=$_SESSION["User_id"];
$iname=$_POST["pname"];
$sql="Delete from cart where user_id='".$userid."' and cart_item='".$iname."'";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo '<script> alert("'.$userid.' Your item is removed Successfully") </script>';	
	?>
		<script>
		location.href="checkout.php"
		</script>
		<?php
}
CloseCon($conn);
?>
