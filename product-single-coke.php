<!DOCTYPE html>
<html lang="en">
  <?php include 'include/header.inc.php'; ?>
  <body>

  	<?php include 'include/navbar.inc.php'; ?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span><a href="product.php">Products <i class="fa fa-chevron-right"></i></a></span> <span>Product Single <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Coke</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/coke.png" class="image-popup prod-img-bg"><img src="images/coke.png" class="img-fluid" alt="Coke"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>Coke</h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
							</p>
						</div>
    				<p class="price"><span>Classic Refreshment</span></p>
    				<p>Coca-Cola is the most popular and biggest-selling soft drink in history, as well as one of the most recognizable brands in the world.</p>
    				<p>Created in 1886 in Atlanta, Georgia, by Dr. John S. Pemberton, Coca-Cola was first offered as a fountain beverage at Jacob's Pharmacy by mixing Coca-Cola syrup with carbonated water.</p>
						<div class="row mt-4">
							<div class="col-md-12">
	          		<p style="color: #000;">Universal soft drink</p>
	          	</div>
          	</div>
          	<p><a href="contact.php" class="btn btn-primary py-3 px-5 mr-2">Enquire Now</a></p>
    			</div>
    		</div>

    		<div class="row mt-5">
          <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Description</a>
            </div>
          </div>
          <div class="col-md-12 tab-wrap">
            <div class="tab-content bg-light" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
              	<div class="p-4">
	              	<h3 class="mb-4">Coke - Open Happiness</h3>
	              	<p>Experience the crisp, refreshing taste of the original Coca-Cola. Perfect for any occasion, from meals to parties, Coke is the beverage that brings people together.</p>
              	</div>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <?php include 'include/footer.inc.php'; ?>
    
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <?php include 'include/script.inc.php'; ?>
    
  </body>
</html>
