<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4c9f93ac06.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="shopline.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <nav class="navbar navbar-expand-lg bg-light top-nav border-bottom border-primary border-3">
          <div class="container-md top-bar">
              <i class="fas fa-bars text-primary"></i>
            <a class="navbar-brand" href="index.html">
              <img src="shopline.png" alt="" width="100%" height="60px" class="d-inline-block">
            </a>
            
            <form class="d-flex s-box">
              <input class="form-control border-primary rounded-0 rounded-start " type="search" placeholder="Search" aria-label="Search">
              <button type="submit" class="btn bg-primary text-white border border-primary rounded-0 rounded-end">
                <i class="fas fa-search"></i>
              </button>
            </form> 
          </div>
          <!-- Button trigger modal -->
          <button type="button" class="btn text-dark modal1" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-ellipsis-v"></i>
          </button>
            <div class="btn-group btn-1" role="group">
                <a href="#" class="btn btn-primary sub-btn-1"><i class="fas fa-cart-arrow-down"></i> Chart</a>
                <a href="#" class="btn btn-primary sub-btn-1"><i class="fas fa-user-plus"></i> Sign-up</a>
                <a href="#" class="btn btn-primary sub-btn-1 me-0"><i class="fas fa-user-lock"></i> Log-in</a>
            </div>
      </nav>
      
        <!-- vertical nav -->
        
      <div class="row carousel-row">
          <ul class="nav flex-column d-inline-flex bg-light col-md-2 side-bar" id="v-nav">
            <li class="nav-item">
              <a class="nav-link ver-link" aria-current="page" href="#">Fashion <i class="fas fa-angle-right ver-icon"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link ver-link" href="#">Electric devices <i class="fas fa-angle-right ver-icon"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link ver-link" href="#">Home Appliance <i class="fas fa-angle-right ver-icon"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link ver-link" href="#" tabindex="-1" aria-disabled="true">Others <i class="fas fa-angle-right ver-icon"></i></a>
            </li>
          </ul>
      

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                  <a href="#" class="btn btn-primary sub-btn-1"><i class="fas fa-cart-plus"></i> Chart</a>
                </div>
                <div class="row justify-content-center">
                  <a href="#" class="btn btn-primary sub-btn-1"><i class="fas fa-user-plus"></i> Sign-up</a>
                </div>
                <div class="row justify-content-center">
                  <a href="#" class="btn btn-primary sub-btn-1"><i class="fas fa-user-lock"></i> Log-in</a>
                </div>
            </div>
          </div>
        </div>
      </div>

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
                <p><b><label for="qu">Quantity: </label> </b> <input type="text" value="1" id="qu" class="form-control-sm text-center"> <a href="#" class="btn btn-primary" type="button" id="button-addon1">Add To Cart</a></p> 
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
  <footer class="bg-dark">
    <div class="text-center footer1">
      <a class="m-2" href="index.html">
        <img src="shopline.png" alt="" width="100px" height="60px" class="d-inline-block">
      </a>
      <select class="btn btn-dark px-4 border text-light border-light m-2">
        <option value="volvo">English</option>
        <option value="saab">Bangla</option>
        <option value="mercedes">Urdu</option>
        <option value="audi">Arabic</option>
      </select>
      <select class="btn btn-dark px-4 border text-light border-light m-2">
        <option value="volvo">৳ TK-BD</option>
        <option value="saab">$ USD-U.S. Dollar</option>
        <option value="mercedes">€ EUP-Euro</option>
      </select>
      <select class="btn btn-dark px-4 border text-light border-light m-2">
        <option value="volvo">Bangladesh</option>
        <option value="saab">UK</option>
        <option value="mercedes">USA</option>
        <option value="audi">China</option>
      </select>
    </div>
    <div class="footer2">
      <div class="row pt-4 text-white mx-5">
        <div class="col-md-4 follow">
            <h4 class="border-bottom border-light border-2 mx-2">Follow Us</h4>
            <a href="#"><i class="fab fa-facebook-square text-white fs-1 p-2"></i></a>
            <a href="#"><i class="fab fa-twitter-square text-white fs-1 p-2"></i></a>
            <a href="#"><i class="fab fa-instagram-square text-white fs-1 p-2"></i></a>
            <a href="#"><i class="fab fa-linkedin text-white fs-1 p-2"></i></a>
        </div>
        <div class="col-md-4 services">
            <h4 class="border-bottom border-light border-2 mx-2">Services</h4>
            <ul>
                <li><a href="#">Affiliate</a></li>
                <li><a href="#">Suppliers</a></li>
                <li><a href="#">Vendors</a></li>
            </ul>
        </div>
        <div class="col-md-4 Contact text-white">
            <h4 class="border-bottom border-light border-2 mx-2">Contact Us</h4>
            <p class="px-2">Helpline: 16xxx</p>
            <p class="px-2">Email: helpline@ourbazar.com</p>
            <p class="px-2">Kutub Ail, Fatullah, Narayanganj</p>
        </div>
      </div>
    </div>
  </footer>
        
        
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <script src="scripts.js"></script>

</body>
</html>