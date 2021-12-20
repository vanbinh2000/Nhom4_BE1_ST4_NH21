<?php 
session_start();
include "header.php" ?>
<?php 
$getProductById = $product -> getProductById($_GET['id']);
$getRelatedProducts = $product -> getRelatedProducts($_GET['type_id']);

if (isset($_GET['action'])) {
	var_dump($_POST);
}
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
							<li><a href="#"><?php	echo $getRelatedProducts[0]['type_name']?></a></li>
							<li class="active"><?php echo $getProductById[0]['name']  ?></li>
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
					<!-- Product main img -->
					<div class="col-md-6">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="./img/<?php echo $getProductById[0]['image'] ?>" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product details -->
					<div class="col-md-6">
						<div class="product-details">
							<h2 class="product-name"><?php echo $getProductById[0]['name'] ?></h2>
							<div>
								<h3 class="product-price"><?php echo number_format($getProductById[0]['price']) ?> VND</h3>
							</div>

							<div class="add-to-cart">
							<button name="addCart" class="add-to-cart-btn" onclick="addCart(<?php echo $getProductById[0]['id'];?>)"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
							<ul class="product-links">
								<li>Category:</li>
								<li><a href="#"><?php echo $getRelatedProducts[0]['type_name'] ?></a></li>
							</ul>
						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active">Description</li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<?php echo substr($getProductById[0]['description'],0,1000) ?>
										</p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div>

					<!-- product -->
					<div class="col-md-12">
					<div class="products-slick" data-nav="#slick-nav-1">
						<?php foreach ($getRelatedProducts as $value): ?>
						<div class="product">
							<div class="product-img">
								<img src="./img/<?php echo $value['image']?>" alt="">
							</div>
							<div class="product-body">
								<p class="product-category"><?php echo $value['type_name'] ?></p>
								<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name']?></a></h3>
								<h4 class="product-price"><?php echo number_format($value['price']) ?></h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
								<button data-id = "<?php echo $value['id']?>" class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"> quick view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
						<?php endforeach; ?>
						<div id="slick-nav-1" class="products-slick-nav"></div>
					</div>
					<!-- /product -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->
<?php include "footer.html" ?>