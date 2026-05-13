<!DOCTYPE html>
<html lang="en">
  <?php include 'include/header.inc.php'; ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
  <body>

  	<?php include 'include/navbar.inc.php'; ?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/banner-product.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Products <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Products</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Our Delightful offerings</span>
            <h2>Tastefully Yours</h2>
          </div>
        </div>
				<div class="row">
					<div class="col-md-3 d-flex">
						<div class="product ftco-animate">
							<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/monster.png);">
								<div class="desc">
									<p class="meta-prod d-flex">
										<a href="product-single-monster.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
										<a href="product-single-monster.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
									</p>
								</div>
							</div>
							<div class="text text-center">
								<span class="category">Energy Drink</span>
								<h2>Monster Drinks</h2>
								<p><a href="product-single-monster.php" class="btn btn-primary btn-sm">Read More</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex">
						<div class="product ftco-animate">
							<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/redbull.png);">
								<div class="desc">
									<p class="meta-prod d-flex">
										<a href="product-single-redbull.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
										<a href="product-single-redbull.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
									</p>
								</div>
							</div>
							<div class="text text-center">
								<span class="category">Energy Drink</span>
								<h2>Red Bull</h2>
								<p><a href="product-single-redbull.php" class="btn btn-primary btn-sm">Read More</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex">
						<div class="product ftco-animate">
							<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/coke.png);">
								<div class="desc">
									<p class="meta-prod d-flex">
										<a href="product-single-coke.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
										<a href="product-single-coke.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
									</p>
								</div>
							</div>
							<div class="text text-center">
								<span class="category">Soft Drink</span>
								<h2>Coke</h2>
								<p><a href="product-single-coke.php" class="btn btn-primary btn-sm">Read More</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex">
						<div class="product ftco-animate">
							<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/water.png);">
								<div class="desc">
									<p class="meta-prod d-flex">
										<a href="product-single-water.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
										<a href="product-single-water.php" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
									</p>
								</div>
							</div>
							<div class="text text-center">
								<span class="category">Drinking Water</span>
								<h2>Drinking Water</h2>
								<p><a href="product-single-water.php" class="btn btn-primary btn-sm">Read More</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <?php include 'include/categories.inc.php'; ?><br><br>

    <?php include 'include/footer.inc.php'; ?>
    
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <?php include 'include/script.inc.php'; ?>
    
  </body>
</html>