<?php

include 'database_sql.php';
session_start();
function check($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);

    return $data;
}
$data = new Database();

// for user sign-up 
if (isset($_POST['signup'])) {
    $name=check($_POST['name']);
    $mobile=check($_POST['mobile']);
    $address=check($_POST['address']);
    if (!isset($_POST['gender'])) {
        $gender=false;
    }else {
        $gender=check($_POST['gender']);
    }
    $password=md5($_POST['password']);
    $re_password=md5($_POST['re-password']);
    // time taken from php
    date_default_timezone_set("Asia/dhaka");
    $created_at = date("Y-m-d h:i:sa");
    if (isset($_POST['email'])) {
        $email=check($_POST['email']);
        $users_sql="SELECT * FROM users WHERE email = '$email'";
        $users_data = $data->getData($users_sql);
        
        if ($users_data->num_rows > 0) {
            $email="";
            header('location:signup.php?error=msg');
        } elseif (!empty($name) && !empty($mobile) && !empty($email) && !empty($address) && !empty($gender) && !empty($_POST['password']) && $password == $re_password){
        
        $user_sql = "INSERT INTO `users`(`name`, `mobile`, `email`,`address`,`gender`,`password`,`created_at`) VALUES ('$name','$mobile','$email','$address','$gender','$password','$created_at')";
        $data->sendData($user_sql);
        header('location:login.php');
        }else {
            header('location:signup.php');
        }
    }
    

   
}

    // for user log-in
if (isset($_POST['login']) ) {
    $email=check($_POST['email']);
    $password=md5($_POST['password']);
    $redirect = $_POST['redirect'];

    $user_sql="SELECT * FROM users WHERE email = '$email' and password = '$password'";
    $user_data = $data->getData($user_sql);
    $user_info =$user_data->fetch_assoc();
    $_SESSION['id'] = $user_info['id'];
    $_SESSION['email'] = $user_info['email'];
    $_SESSION['name'] = $user_info['name'];
    
    if (!empty($_SESSION['id'])) {
        if ($redirect =='signup.php' || $redirect =='login.php') {
            header('location: index.php');
            
        }elseif (!empty($redirect)) {
            header('location:'.$redirect);
        }
        else{
            header('location: index.php');
        }
        
    }else {
        header('location:login.php');
    }
    
}

    // for user log-out
    if (isset($_GET['logout']) && $_GET['logout'] == 'yes') {
        session_destroy();
        header('location:index.php');
    }

    // product addition to shopline
    if (isset($_POST['add'])) {
        $title = check(json_encode($_POST['title']));
        $description = check(json_encode($_POST['description']));
        $type = $_POST['type'];
        $weight = check(json_encode($_POST['weight']));
        $stock = $_POST['stock'];
        $price = $_POST['price'];
        $picture = $_FILES['picture']['name'];
        $tmp_picture = $_FILES['picture']['tmp_name'];
        $vendor_id = $_POST['vendor_id'];
        if ($title && $description && $type && $stock && $price && $picture && $vendor_id) {
           $product_add_sql = "INSERT INTO `products` (`id`, `vendor_id`, `product_name`, `product_details`, `product_type_id`, `unit_weight`, `unit_stock`, `product_price`, `product_img`, `updating_date`) VALUES (NULL, '$vendor_id', '$title', '$description', '$type', '$weight', '$stock', '$price', '$picture', NULL)";
            move_uploaded_file($tmp_picture,'product_pic/'.$picture);
            $data->sendData($product_add_sql);
            header('location:profile.php');
        }else {
            header('location:product_addition.php');
        }
        
        
    }
?>
