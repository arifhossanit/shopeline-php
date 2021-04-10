<?php include 'header.php' ?>

      <!-- Product-page -->

      <?php
        include 'database_sql.php';
        $data = new Database();
        $product_id = $_GET['product'];
          $product_sql = "SELECT * FROM products WHERE id= $product_id";
          $products = $data->getData($product_sql);
          foreach ($products as $product) {
              $product_name = $product['product_name'];
              $product_details = $product['product_details'];
              $product_img = $product['product_img'];
              $product_stock = $product['unit_stock'];
              $product_price = $product['product_price'];
      ?>
        <Div class="row my-4 container">
            <div class="col-12 col-md-6 bg-light">
                <img src="product_pic/<?php echo $product_img ?>" alt="" class="card-img"> 
            </div>
            <div class="col-12 col-md-6 bg-light">
                <h4><?php echo $product_name ?></h4> 
                <div class="ratings text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                    <i class="fa fa-star-o"></i>
                    (2)
                </div>
                <p><b>Brand: </b> Sony</p>
                <p><b>Ability: </b> In-stock(<?php echo $product_stock ?>)</p>
                <p><b>Price: </b>৳ <?php echo $product_price ?></p>
                <p><b><label for="qu">Quantity: </label> </b> <input type="text" value="1" id="qu" class="form-control-sm text-center" > <button href="#" class="btn btn-primary" type="button" id="button-addon1" onclick="addProduct(<?php echo $product_id ?>,document.getElementById('qu').value)">Add To Cart</button></p> 
            </div>
            <div class="col-12 bg-light mt-3">
                <div class="p-3 details-2 ">
                    <h4 class="fw-bold">Product Details</h3>
                    <p>
                    <?php echo $product_details ?>
                    </p>
                </div>
            </div>
        </Div>
    <?php
    }
    ?>
  <!-- footer -->
  <?php include 'footer.php' ?>