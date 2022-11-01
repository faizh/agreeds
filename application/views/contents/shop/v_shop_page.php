<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<!-- <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".strawberry">Strawberry</li>
                            <li data-filter=".berry">Berry</li>
                            <li data-filter=".lemon">Lemon</li>
                        </ul>
                    </div>
                </div>
            </div> -->

			<div class="row product-lists">
				<?php 
				foreach ($products as $product) { ?>
					<div class="col-lg-4 col-md-6 text-center strawberry">
						<div class="single-product-item">
							<div class="product-image">
								<a href="<?= base_url() ?>index.php/shop/product/<?= $product->id ?>"><img src="<?= base_url() ?><?= $product->images ?>" alt=""></a>
							</div>
							<h3><?= $product->name ?></h3>
							<p class="product-price"><span>Per <?= $product->unit ?></span> Rp <?= number_format($product->price) ?></p>
							
							<form action="<?= base_url()?>index.php/shop/addCart" method="post">
								<input type="hidden" name="product_id" value="<?= $product->id ?>">
								<input type="hidden" name="qty" value="1">
								<br />
								<button type="submit" class="boxed-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
							</form>
						</div>
					</div>
				<?php } ?>
			</div>

			<!-- <div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<!-- end products -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->