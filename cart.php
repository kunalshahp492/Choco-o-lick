<html>
<body>
	<style>
		img{
			width: 250px;
			height: 200px;
		}
	</style>
<?php
include 'test.php';
$conn = OpenCon();
$pname=$_POST["Product"];
$sql="Select * from stock where product_name='".$pname."'";
$result1=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($result1);
?>
<table>
<?php
if($rows>0)
{
	while($row=mysqli_fetch_assoc($result1))
	{
		?>
		<td>
			<?php 
				$imagen="\"".$row["product_img"]."\"";				
			?> 
		<img src=<?php echo $imagen ?>>
		<?php $prname=$row["product_name"];?>
		<br>
		<?php echo "Product Name: ".$prname; 
		$prstock=$row["product_stock"];?>
		<br> 
		<?php echo "Available Stock: ".$prstock;
		$prprice=$row["product_price"]; ?>
		<br> 
		<?php echo "Product Price: ".$prprice;?>
		<br>
	</td>
	</tr>
	<?php

	}
}
?>
</table>
