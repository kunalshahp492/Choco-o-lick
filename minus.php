<?php
session_start();
include 'test.php';
$conn = OpenCon();
$userid=$_SESSION["User_id"];
$iname=$_POST["pname"];
$sql="select * from cart where user_id='".$userid."' and cart_item='".$iname."'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($result);	
if($rows>0)
{
	$sql3="update cart set cart_price=cart_price/cart_stock where user_id='".$userid."' and cart_item='".$iname."'";
	$result3=mysqli_query($conn,$sql3);
	$sql1="update cart set cart_stock=cart_stock-1 where user_id='".$userid."' and cart_item='".$iname."'";
	$result1=mysqli_query($conn,$sql1);
	?>
		<script>
		location.href="checkout.php"
		</script>
		<?php
}
CloseCon($conn);
?>
