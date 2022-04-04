<?php
session_start();
include 'test.php';
$conn = OpenCon(); 
$userid=$_SESSION["User_id"];
$iname=$_POST["item_name"];
$istock=$_POST["add"];
$price=$_POST["amount"];
$sql="select * from cart where user_id='".$userid."'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($result);	
if($rows>0)
{
	$sql1="select * from cart where user_id='".$userid."' AND cart_item='".$iname."'";
	$result1=mysqli_query($conn,$sql1);
	$rows1=mysqli_num_rows($result1);	
	if($rows1>0)
	{
		while($row=mysqli_fetch_assoc($result1))
		{
			$sql2="update cart set cart_stock=cart_stock+1 where user_id='".$userid."' and cart_item='".$iname."'";
			$result2=mysqli_query($conn,$sql2);
			$sql3="update cart set cart_price=cart_stock*cart_price where user_id='".$userid."' and cart_item='".$iname."'";
			$result3=mysqli_query($conn,$sql3);
			echo '<script> alert("'.$userid.' Your Stock is updated") </script>';	
			?>
			<script>
			location.href="index.html"
			</script>
			<?php
		}	
	}
	else
	{
		$sql3="INSERT INTO cart (user_id,cart_item,cart_stock,cart_price)
	  	VALUES ('".$userid."','".$iname."','".$istock."','".$price."')";
		$result3=mysqli_query($conn,$sql3);	
		if($result3)
		{
			echo '<script> alert("'.$userid.' Item Added to your cart") </script>';	
			?>
		<script>
		location.href="index.html"
		</script>
		<?php
		}	
		else
		{
			echo "Error".$sql. "" .mysqli_error($conn);
		}					
		?>
		<?php
	}
}
else
{
		$sql4="INSERT INTO cart (user_id,cart_item,cart_stock,cart_price)
	  	VALUES ('".$userid."','".$iname."','".$istock."','".$price."')";
		$result4=mysqli_query($conn,$sql4);		
		if($result4)
		{
			echo '<script> alert("'.$userid.' Item Added to your cart") </script>';		
		}
		else
		{
			echo "Error".$sql. "" .mysqli_error($conn);
		}				
		?>
		<script>
		location.href="index.html"
		</script>
		<?php
}
CloseCon($conn);
?>

