<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>See more Details</p>
						<h1>Single Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="<?= base_url() ?><?= $product->images ?>" alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3><?= $product->name ?></h3>
						<p class="single-product-pricing"><span>Per <?= $product->unit ?></span> Rp <?= number_format($product->price) ?></p>
						<p><?= $product->desc ?></p>
						<div class="single-product-form">
							<form action="<?= base_url()?>index.php/shop/addCart" method="post">
								<input type="hidden" name="product_id" value="<?= $product->id ?>">
								<input type="number" name="qty" placeholder="0 / <?= $product->stock ?>" max="<?= $product->stock ?>" required>
								<br />
								<button type="submit" class="boxed-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
							</form>
							<p style="margin-top: 20px;"><strong>Categories: </strong>Fruits, Organic</p>
						</div>
						<h4>Share:</h4>
						<ul class="product-share">
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single product