<?php include 'header1.php';
 
?>

        <!-- carousel -->
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide carousel-fade col-md-10 " data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
              <img src="img/New Project(0).jpg" class="d-block w-100 carousel-img" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="img/New Project(1).jpg" class="d-block w-100 carousel-img" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="img/New Project(2).jpg" class="d-block w-100 carousel-img" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
      </div>
      
      <!-- Content -->
        <div class="container">
          <div class="my-2">
            <div class=" title-header">
              <h5 class="title">Featured Product</h5>
              <hr class="title-bottom">
            </div>
          </div>
          <div class="row product-link">
          <?php
          include 'database_sql.php';
          $data = new Database();
            $product_sql = "SELECT * FROM products order by id desc";
            $products = $data->getData($product_sql);
            foreach ($products as $product) {
                $product_id = $product['id'];
                $product_name = $product['product_name'];
                $product_img = $product['product_img'];
                $product_price = $product['product_price'];
          ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-0 my-1">
              <div class="border rounded m-1 p-1 img-btn h-100">
                <img src="product_pic/<?php echo $product_img ?>" alt="" class="card-img">
                <div class="overly">
                  <button class="heart btn">
                      <i class="far fa-heart text-danger"></i>
                  </button>
                  <button class="add-cart btn btn-primary" onclick="addProduct(<?php echo $product_id ?>,1,'addition')">
                      <i class="fa fa-shopping-cart"> add cart</i>
                  </button>
                </div>
                <a href="product-page.php?product=<?php echo $product_id ?>">
                  <div class="ratings text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                    <i class="fa fa-star-o"></i>
                    (2)
                  </div>
                  <h5 class=""><?php echo $product_name ?></h5>
                  <p class="text-danger">৳ <?php echo $product_price ?></p>
                </a>
              </div>
                
            </div>
            <?php
            }
            ?>
          </div>
          <div class="my-2">
              <div class=" title-header">
                <h5 class="title">Men's Collection</h5>
                <hr class="title-bottom">
              </div>
          </div>
          <div class="row product-link">
            <?php
              $men_product_sql = "SELECT * FROM products WHERE product_type_id ='1' order by id desc";
              $men_products = $data->getData($men_product_sql);
              foreach ($men_products as $product) {
                  $mproduct_id = $product['id'];
                  $mproduct_name = $product['product_name'];
                  $mproduct_img = $product['product_img'];
                  $mproduct_price = $product['product_price'];
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-0 my-1">
              <div class="border rounded m-1 p-1 img-btn h-100">
                <img src="product_pic/<?php echo $mproduct_img ?>" alt="" class="card-img">
                <div class="overly">
                  <button class="heart btn">
                      <i class="far fa-heart text-danger"></i>
                  </button>
                  <button class="add-cart btn btn-primary" onclick="addProduct(<?php echo $mproduct_id ?>,1,'addition')">
                      <i class="fa fa-shopping-cart"> add cart</i>
                  </button>
                </div>
                <a href="product-page.php?product=<?php echo $mproduct_id ?>">
                  <div class="ratings text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                    <i class="fa fa-star-o"></i>
                    (2)
                  </div>
                  <h5 class=""><?php echo $mproduct_name ?></h5>
                  <p class="text-danger">৳ <?php echo $mproduct_price ?></p>
                </a>
              </div>
              
            </div>
            <?php
            }
            ?> 
          </div>
          <div class="my-2">
            <div class=" title-header">
              <h5 class="title">Women's Collection</h5>
              <hr class="title-bottom">
            </div>
          </div>
          <div class="row product-link">
            <?php
              $women_product_sql = "SELECT * FROM products WHERE product_type_id ='2' order by id desc";
              $women_products = $data->getData($women_product_sql);
              foreach ($women_products as $product) {
                  $wproduct_id = $product['id'];
                  $wproduct_name = $product['product_name'];
                  $wproduct_img = $product['product_img'];
                  $wproduct_price = $product['product_price'];
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-0 my-1">
              <div class="border rounded m-1 p-1 img-btn h-100">
                <img src="product_pic/<?php echo $wproduct_img ?>" alt="" class="card-img">
                <div class="overly">
                  <button class="heart btn">
                      <i class="far fa-heart text-danger"></i>
                  </button>
                  <button class="add-cart btn btn-primary" onclick="addProduct(<?php echo $mproduct_id ?>,1,'addition')">
                      <i class="fa fa-shopping-cart"> add cart</i>
                  </button>
                </div>
                <a href="product-page.php?product=<?php echo $wproduct_id ?>">
                  <div class="ratings text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                    <i class="fa fa-star-o"></i>
                    (2)
                  </div>
                  <h5 class=""><?php echo $wproduct_name ?></h5>
                  <p class="text-danger">৳ <?php echo $wproduct_price ?></p>
                </a> 
                </div>
              
            </div>
            <?php
            }
            ?>          
          </div>
        </div>
  <?php include 'footer.php' ?>