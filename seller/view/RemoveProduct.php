<?php 
require('header.php');

require('../model/userModel.php');
//$username=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="script.js"></script>

    <title>Product list for remove</title>
	<link rel="stylesheet" href="css/style.css">
</head>
</head>
<body>
<h2 align="center"><b>Product List for Remove</b></h2>
	<table class="cadmin" border="1" align="center" id="customers">
		<tr>
			<th>Product_ID</th>
			<th>Product_Name</th>
			<th>Product_Price</th>
			<th>Product_Made_In</th>
			<th>Entry_Date</th>
			<th>Action</th>
		</tr>

		<?php 
			$con = getConnection();
			$sql = "SELECT * FROM product";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td ><?=$row["Product_ID"]?></td>
			<td ><?=$row["Product_Name"]?></td>
			<td ><?=$row["Product_Price"]?></td>
			<td ><?=$row["Product_Made_In"]?></td>
            <td ><?=$row["Entry_Date"]?></td>
            
			
			<td>
				
				<a href="PrductRemove.php?id=<?=$row["Product_ID"]?>"> Remove </a> 
				</td>
		</tr>

		<?php 
				}
			}
			else
			{
				echo("<h2>The table is empty.....</h2>");
			}
		?>
	</table>
    <a class="register" href="home.php">Back</a> | 
		<a class="register" href="../controller/logout.php"> logout </a>
</body>
</html>