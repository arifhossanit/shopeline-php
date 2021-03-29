<?php include 'header.php' ?>
<?php
include 'database_sql.php';
$data = new Database();
if (isset($_SESSION['id'])) {
        $email=$_SESSION['email'];
        $name=$_SESSION['name'];

        $user_sql="SELECT * FROM users WHERE email = '$email' and name = '$name'";
        $user_data = $data->getData($user_sql);
        $user_info =$user_data->fetch_assoc();
        $id = $user_info['id'];
        $name = $user_info['name'];
        $email = $user_info['email'];
        $mobile = $user_info['mobile'];
        $gender = $user_info['gender'];
        $address = $user_info['address'];
        
    }
?>
<div class="card mt-3 m-auto" style="width: 18rem;">
  <img src="user_img/Capture2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $name?></h5>
    <p class="card-text"></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Gender: <?php echo $gender?></li>
    <li class="list-group-item">Mobile: <?php echo $mobile?></li>
    <li class="list-group-item">E-mail: <?php echo $email?></li>
    <li class="list-group-item">Address: <?php echo $address?></li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Change password</a>
    <a href="#" class="card-link">Edit Profile</a>
  </div>
</div>
<?php include 'footer.php' ?>