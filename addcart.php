<?php session_start();
    include "header.php";    
?>

<body>
	<h1>Your cart</h1>
<?php
$cart = array();
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		if(isset($_SESSION['cart'][$id])){
			$_SESSION['cart'][$id]++;
		}
		else
		{
			$_SESSION['cart'][$id] = 1;
		}
	}
	
		$cart =$_SESSION['cart'];
	
?>
<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>#id</th>
		<th>Name</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Action</th>
	</tr>
	<?php
	$getProductByID = $product->getProductById($id);
	
	foreach($cart as $key=>$qty):
		foreach($getProductByID as $value):
			if($key = $value['id']):
	?>
	<tr>
		<td><?php echo $key ?></td>
		<td><img src="./img/<?php echo $value['image']?>" alt=""></td>
		<td><?php echo $value['name'] ?></td>	
		<td><?php echo $qty ?></td>
		<td><?php echo $value['price'] ?></td>
		<td><a href="delete.php?id=<?php echo $key?>">Delete</a></td>
	</tr>
	<?php 
	endif;
	endforeach;
endforeach;

	?>
	</table>
<?php include "footer.html" ?>
