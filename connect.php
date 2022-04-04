!DOCTYPE html>
<html>
<body>

<?php
 	$sql="select flag from users";
 	$result=mysqli_query($conn,$sql);
 	$rows=mysqli_num_rows($result);
 	$counter=0;
	if($rows>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
 			$flag=$row["flag"] 
 			if($flag==1)
 			{
 				$counter=1;	
 			}
 					
 		}
 	}
 	function connect()
 	{
 		if($counter=0)
 		{
 			return 0;
 		}
 	}
?>
</body>
</html>