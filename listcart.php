<?php
    session_start();
    include "header.php";
    if(isset($_POST['update']))
    {
        if(isset($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $value){
                if($_POST['qty'.$value['id']] <=0)
                {
                    unset($_SESSION['cart'][$value['id']]);
                }
                else
                {
                    $_SESSION['cart'][$value['id']]['qty'] = $_POST['qty'.$value['id']];
                }
            }
        }
    }
 ?>
 
     
     
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
                <h2 style="text-align:center; color:red">Your Cart</h2>
                <br><br>
    <div>
         <form action="listcart.php" method="POST">
         <table border="1" cellspacing="0" cellpadding="5">
             <thead style="background-color:pink">
                 <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Image</th>
                     <th>Price</th>
                     <th>Quantily</th>
                     <th>Total money</th>
                     <th>Action</th>
                </tr>
             </thead>
             <tbody>
                 <?php
                    if(isset($_SESSION['cart'])):
                        foreach($_SESSION['cart'] as $value):
                            $tong =0;
                            $tong = $value['price']*$value['qty'];
                 ?>
                 <tr>
                     <td><?php echo $value['id']?></td>
                     <td><?php echo $value['name']?></td>
                     <td>
                        <div class="product-img">
							<img src="./img/<?php echo $value['image']  ?>" width="100px" alt="">
					    </div>
                    </td>
                     <td><?php echo number_format($value['price']) ?></td>
                     <td><input type="number" min="1" name="qty<?php echo $value['id'] ?>" value="<?php echo $value['qty'] ?>"></td>
                     <td><?php echo number_format($tong);?></td>
                     <td><a href="delcart.php?id=<?php echo $value['id']; ?>"> Delete</a></td>
                   
                </tr>
                <?php
                    endforeach;
                endif; 
                ?>
             </tbody>
         </table><br><br>
         <button style="background-color:pink" type="submit" name="update">UPDATE CART</button>
        </form>
        
     </div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
</div>
		<!-- /SECTION -->
 <?php include "footer.html" ?>