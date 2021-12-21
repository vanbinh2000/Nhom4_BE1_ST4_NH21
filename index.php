<?php 
session_start();
include "header.php";?>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessories<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Cameras<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab3">PC</a></li>
									<li><a data-toggle="tab" href="#tab4">Accessories</a></li>
									<li><a data-toggle="tab" href="#tab5">Tablet</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<?php foreach ($getLapTops as $value):?>
											
											

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image'] ?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name']?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price']) ?></h4>
												<div class="product-btns">
												<button data-id = "<?php echo $value['id']?>" class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"> quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<form action="addwishlist.php?id=<?php echo $value['id']?>" method ="POST">
													<button class="add-to-cart-btn" name="add_wish"><i class="fa fa-shopping-cart"></i>add to wishlist</button>
												</form>
										
											</div>
										</div>
										<?php endforeach;?>
									</div>
								
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
								
								<!-- tab -->
								<div id="tab2" class="tab-pane">
									<div class="products-slick" data-nav="#slick-nav-2">
										<?php foreach($getSmartPhone as $value): ?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image']?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name']?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price'])?></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												<button data-id = "<?php echo $value['id']?>" class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"> quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<form action="addwishlist.php?id=<?php echo $value['id']?>" method ="POST">
													<button class="add-to-cart-btn" name="add_wish"><i class="fa fa-shopping-cart"></i>add to wishlist</button>
												</form>
										
											</div>
										</div>
										<!-- /product -->
										<?php endforeach?>
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
								<!-- tab -->
								<div id="tab3" class="tab-pane">
									<div class="products-slick" data-nav="#slick-nav-3">
										<?php foreach($getPC as $value): ?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image']?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name']?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price'])?></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												<button data-id = "<?php echo $value['id']?>" class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"> quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<form action="addwishlist.php?id=<?php echo $value['id']?>" method ="POST">
													<button class="add-to-cart-btn" name="add_wish"><i class="fa fa-shopping-cart"></i>add to wishlist</button>
												</form>
										
											</div>
										</div>
										<!-- /product -->
										<?php endforeach?>
									</div>
									<div id="slick-nav-3" class="products-slick-nav"></div>
								</div>
								<!-- /tab --><!-- tab -->
								<div id="tab4" class="tab-pane">
									<div class="products-slick" data-nav="#slick-nav-4">
										<?php foreach($getAccessories as $value): ?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image']?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name']?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price'])?></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												<button data-id = "<?php echo $value['id']?>" class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"> quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<form action="addwishlist.php?id=<?php echo $value['id']?>" method ="POST">
													<button class="add-to-cart-btn" name="add_wish"><i class="fa fa-shopping-cart"></i>add to wishlist</button>
												</form>
										
											</div>
										</div>
										<!-- /product -->
										<?php endforeach?>
									</div>
									<div id="slick-nav-4" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
								<!-- tab -->
								<div id="tab5" class="tab-pane">
									<div class="products-slick" data-nav="#slick-nav-5">
										<?php foreach($getTablet as $value): ?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image']?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><?php echo $value['name']?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price'])?></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												<button data-id = "<?php echo $value['id']?>" class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"> quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<form action="addwishlist.php?id=<?php echo $value['id']?>" method ="POST">
													<button class="add-to-cart-btn" name="add_wish"><i class="fa fa-shopping-cart"></i>add to wishlist</button>
												</form>
										
											</div>
										</div>
										<!-- /product -->
										<?php endforeach?>
									</div>
									<div id="slick-nav-5" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top Selling</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
								<li class="active"><a data-toggle="tab" href="#taba">Laptops</a></li>
									<li><a data-toggle="tab" href="#tabb">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tabc">PC</a></li>
									<li><a data-toggle="tab" href="#tabd">Accessories</a></li>
									<li><a data-toggle="tab" href="#tabe">Tablet</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
<?php include "footer.html" ?>

