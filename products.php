<?php include "header.php"; ?>
<?php
$getRelatedProducts = $product->getRelatedProducts($_GET['type_id']);
?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb-tree">
					<li><a href="index.php">Home</a></li>
					<li><a href="#"><?php echo $getRelatedProducts[0]['type_name']  ?></a></li>
				</ul>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- ASIDE -->
			<div id="aside" class="col-md-3">
				<!-- aside Widget -->

				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Top selling</h3>
					<div class="product-widget">
						<div class="product-img">
							<img src="./img/product01.png" alt="">
						</div>
						<div class="product-body">
							<p class="product-category">Category</p>
							<h3 class="product-name"><a href="#">product name goes here</a></h3>
							<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						</div>
					</div>

					<div class="product-widget">
						<div class="product-img">
							<img src="./img/product02.png" alt="">
						</div>
						<div class="product-body">
							<p class="product-category">Category</p>
							<h3 class="product-name"><a href="#">product name goes here</a></h3>
							<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						</div>
					</div>

					<div class="product-widget">
						<div class="product-img">
							<img src="./img/product03.png" alt="">
						</div>
						<div class="product-body">
							<p class="product-category">Category</p>
							<h3 class="product-name"><a href="#">product name goes here</a></h3>
							<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						</div>
					</div>
				</div>
				<!-- /aside Widget -->
			</div>
			<!-- /ASIDE -->

			<!-- STORE -->
			<div id="store" class="col-md-9">

				<!-- store products -->
				<div class="row">
					<!-- product -->
					<?php if (isset($_GET['type_id'])) :
						$type_id = $_GET['type_id'];
						$getProductByType = $product->getProductByType($type_id);
						//hiển thị 3 sp trên 1 trang
						$perPage = 3;
						//lấy số trang trên thanh địa chỉ
						$page = isset($_GET['page']) ? $_GET['page'] : 1;
						//tính tổng số dòng, ví dụ kết quả là 18
						$total = count($getProductByType);
						//lấy đường link dẫn file đến hiện hành
						$url = $_SERVER['PHP_SELF'] . "?type_id=" . $type_id;
						$get3ProductByType = $product->get3ProductByType($type_id, $page, $perPage);
						foreach ($get3ProductByType as $value) :
					?>
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="./img/<?php echo $value['image'] ?>" alt="">
										<div class="product-label">

										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price']) ?> VND</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button data-id="<?php echo $value['id'] ?>" class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"> quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<form action="addwishlist.php?id=<?php echo $value['id'] ?>" method="POST">
											<button class="add-to-cart-btn" name="add_wish"><i class="fa fa-shopping-cart"></i>add to wishlist</button>
										</form>

									</div>
								</div>
							</div>
							<!-- /product -->
						<?php
						endforeach;
						?>
				</div>
				<!-- /store products -->

				<!-- store bottom filter -->
				<div class="store-filter clearfix">
					<span class="store-qty">Showing 20-100 products</span>
					<ul class="store-pagination">
						<?php echo $product->paginate($url, $total, $perPage) ?>
					</ul>
				</div>
				<!-- /store bottom filter -->
			<?php endif;  ?>
			</div>
			<!-- /STORE -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
<?php include "footer.html" ?>