	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Organic Information</p>
						<h1>News Article</h1>
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
				<?php 
				foreach ($posts as $post) { ?>
					<div class="col-lg-4 col-md-6">
						<div class="single-latest-news">
							<a href="<?= base_url() ?>index.php/news/news_detail/<?= $post->id ?>"><div class="latest-news-bg" style="background-image : url('<?= base_url()?><?= $post->images ?>')"></div></a>
							<div class="news-text-box">
								<h3><a href="<?= base_url() ?>index.php/news/news_detail/<?= $post->id ?>"><?= $post->title ?></a></h3>
								<p class="blog-meta">
									<span class="author"><i class="fas fa-user"></i> <?= $post->username ?></span>
									<span class="date"><i class="fas fa-calendar"></i> 
										<?php 
											$created_date = strtotime($post->created_dtm);
											echo date("Y M d H:i:s", $created_date);
										?>
									</span>
								</p>
								<p class="excerpt"><?= $post->preview_content ?></p>
								<a href="<?= base_url() ?>index.php/news/news_detail/<?= $post->id ?>" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>

			<!-- <div class="row">
				<div class="container">
					<div class="row">
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
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<!-- end latest news -->