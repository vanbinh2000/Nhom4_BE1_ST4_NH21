<?php
    session_start();
	include "header.php";
?>


<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				
<h2 style="text-align:center; color:red">Your Whishlist</h2>
     <br>
	 <br>
     <div>
         <form action="listcart.php" method="POST">
         <table border="1" cellspacing="0" cellpadding="5">
             <thead style="background-color:pink">
                 <tr>
                     <th style="text-align:center">ID</th>
                     <th>Name</th>
                     <th>Image</th>
                     <th>Price</th>
					 <th>Description</th>
					 <th>Quanlity</th>
					 
                     <th>Action</th>
                </tr>
             </thead>
             <tbody>
                 <?php
                    if(isset($_SESSION['wish'])):
                        foreach($_SESSION['wish'] as $value):
                          
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
					 <td><?php echo  substr($value['description'],0,200)?>...</td>
					 <td><?php echo $value['qty'] ?></td>
					 <td><a href="delwish.php?id=<?php echo $value['id']; ?>"> Delete</a></td>
                   
                </tr>
                <?php
                    endforeach;
                endif; 
                ?>
             </tbody>
         </table>
        </form>
        
     </div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
</div>
		<!-- /SECTION -->
<?php include "footer.html" ?>