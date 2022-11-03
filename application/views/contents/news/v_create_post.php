	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Organic Information</p>
						<h1>News Article</h1>
						<br />
						<a href="<?= base_url()?>index.php/news/create_post" class="bordered-btn">View Post</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Share a Post</h2>
						<p>Share a new Post to other people around the world!</p>
					</div>
					<div class="contact-form">
						<form method="post" id="fruitkha-contact" action="<?= base_url() ?>index.php/news/store_post" enctype="multipart/form-data">
							<p>
								<input type="text" placeholder="Title" name="title" id="title">
							</p>
							<p><textarea name="content" id="content" cols="30" rows="10" placeholder="Content"></textarea></p>
							<p>
								<span style="margin-right: 20px;">Images</span>
								<input type="file" name="images" id="images">
							</p>
							<p>
								<input type="submit" value="Submit"  style="margin-top: 20px">
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->