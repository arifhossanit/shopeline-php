<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4c9f93ac06.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="shopline.css">
</head>
<body onload="calculate()">
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
    <!--shopping_cart-->
    <div class="container my-5">

      <div class="row row-cols-4">
        <div class="col fs-3">
          Shopping Cart
        </div>
      </div>

      <div class="row row-cols-4 border-top py-3">
        <div class="col"><img src="img/pro1.jpg" alt="" width="200px"></div>
        <div class="col-6 fw-bold text-primary">
          <p class="fw-bold text-primary fs-5">PlayStation 4 Slim 1TB Gaming Console with 1x Wireless Controller</p>
          <p class="text-success ">in Stock</p>
          <div class="input-group pe-5">
            <p class="text-dark me-2">Quantity:</p>
            <button class="btn btn-primary" id="add" onclick="quantity('add','playConsole')">+</button>
            <input type="text" value="1" id="playConsole" class="form-control text-center">
            <button class="btn btn-primary" id="del" onclick="quantity('remove','playConsole')">-</button>
          </div>
        </div>
        <div class="col text-end">
          <p class="text-muted">Price</p>
          <div>$<span id="playConsole-price">200</span></div>
        </div>
      </div>

      <div class="row row-cols-4 border-top py-3">
        <div class="col"><img src="img/pic2.png" alt="" width="200px"></div>
        <div class="col-6 fw-bold text-primary">
          <p class="fw-bold text-primary fs-5">Casual T-shirt (red) for man collection</p>
          <p class="text-success ">in Stock</p>
          <div class="input-group pe-5">
            <p class="text-dark me-2">Quantity:</p>
            <button class="btn btn-primary" id="add" onclick="quantity('add','tShirt')">+</button>
            <input type="text" value="1" id="tShirt" class="form-control text-center">
            <button class="btn btn-primary" onclick="quantity('remove','tShirt')">-</button>
          </div>
        </div>
        <div class="col text-end">
          <div>$<span id="tShirt-price">100</span></div>
        </div>
      </div>

      <div class="row row-cols-4 border-top border-bottom py-3">
        <div class="col"><img src="img/pic3.png" alt="" width="200px"></div>
        <div class="col-6 fw-bold text-primary">
          <p class="fw-bold text-primary fs-5">A51 - Android 10; 6GB/128GB - Quad Camera Premium Silicone Case </p>
          <p class="text-success ">in Stock</p>
          <div class="input-group pe-5">
            <p class="text-dark me-2">Quantity:</p>
            <button class="btn btn-primary" onclick="quantity('add','mobile')">+</button>
            <input type="text" value="1" id="mobile" class="form-control text-center">
            <button class="btn btn-primary" onclick="quantity('remove','mobile')">-</button>
          </div>
        </div>
        <div class="col text-end">
          <div>$<span id="mobile-price">250</span></div>
        </div>
      </div>

      <div class="row row-cols-4 text-end">
        <div class="col-9 fs-5">
          Sub-Total :
        </div>
        <div class="col ">
          <div>$<span id="sum">600</span></div>
        </div>
      </div>

      <div class="row row-cols-4 text-end">
        <div class="col-9 fs-5">
          Vat (15%) :
        </div>
        <div class="col ">
          <div>$<span id="vat">600</span></div>
        </div>
      </div>

      <div class="row row-cols-4 text-end">
        <div class="col-9 fs-5">
          Total :
        </div>
        <div class="col ">
          <div>$<span id="total">600</span></div>
        </div>
      </div>
    </div>
    <!-- footer -->
  <footer class="bg-dark">
    <div class="text-center footer1">
      <a class="m-2" href="#">
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