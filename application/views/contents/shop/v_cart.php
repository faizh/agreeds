<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$total_payment = 0;
								$total_product = 0;
								foreach ($products as $product) { ?>
									<tr class="table-body-row">
										<td class="product-remove"><a onclick="confirmDelete(<?= $product->cart_id ?>)"><i class="fa fa-trash"></i></a></td>
										<td class="product-image"><img src="<?= base_url() ?><?= $product->images ?>" alt=""></td>
										<td class="product-name"><?= $product->name ?></td>
										<td class="product-price">
											Rp <?= number_format($product->price) ?>
											<input type="hidden" name="unit-price[]" value="
											<?= $product->price ?>" id="unit-price-<?= $product->cart_id ?>">
										</td>
										<td class="product-quantity"><input type="number" placeholder="0" value="<?= $product->qty ?>" onchange="calculateTotalProduct(this)" cart_id="<?= $product->cart_id ?>"></td>
										<td class="product-quantity">
											<?php
											$sub_total_product 	= $product->price * $product->qty;
											$total_product 		+= $sub_total_product;

											?>
											<input type="number" placeholder="<?= $sub_total_product ?>" name="total_price-<?= $product->cart_id ?>" value="<?= $sub_total_product ?>" readOnly>	
										</td>
									</tr>	
								<?php } $total_payment += $total_product ?>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td>Rp <?= number_format($total_product) ?></td>
								</tr>
								<tr class="total-data">
									<td><strong>Shipping: </strong></td>
									<td>
										<?php 
										$total_shipping = 15000;
										$total_payment 	+= $total_shipping; 

										echo "Rp " . number_format($total_shipping);
										?>
									</td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td>Rp <?= number_format($total_payment) ?></td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="checkout.html" class="boxed-btn black">Check Out</a>
						</div>
					</div>

					<div class="coupon-section">
						<h3>Apply Coupon</h3>
						<div class="coupon-form-wrap">
							<form action="index.html">
								<p><input type="text" placeholder="Coupon"></p>
								<p><input type="submit" value="Apply"></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->


	<script>
		function confirmDelete(cart_id) {
			alert('confirm delete cart id : ' +cart_id);
		}

		function calculateTotalProduct(qty) {
			var new_qty 				= qty.value;
			var cart_id 				= qty.cart_id;
			var product_unit_price_id 	= "unit-price-"+cart_id;
			var unit_price 				= document.getElementById(product_unit_price_id);

			console.log(unit_price);
		}
	</script>