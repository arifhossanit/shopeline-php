<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4c9f93ac06.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="shopline.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light top-nav border-bottom border-primary border-3">
        <div class="container-md top-bar">
            <i class="fas fa-bars text-primary"></i>
          <a class="navbar-brand" href="index.php">
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
              <a href="signup.php" class="btn btn-primary sub-btn-1"><i class="fas fa-user-plus"></i> Sign-up</a>
              <a href="login.php" class="btn btn-primary sub-btn-1 me-0"><i class="fas fa-user-lock"></i> Log-in</a>
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
                <a href="signup.php" class="btn btn-primary sub-btn-1"><i class="fas fa-user-plus"></i> Sign-up</a>
              </div>
              <div class="row justify-content-center">
                <a href="login.php" class="btn btn-primary sub-btn-1"><i class="fas fa-user-lock"></i> Log-in</a>
              </div>
          </div>
        </div>
      </div>
    </div>