<?php

include 'database_sql.php';
function check($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);

    return $data;
}
$data = new $database;
if (isset($_POST['signup'])) {
    $name=check($_POST['name']);
    $mobile=check($_POST['mobile']);
    $email=check($_POST['email']);
    $address=check($_POST['address']);
    $gender=check($_POST['gender']);
    $password=check($_POST['password']);
    $re_password=check($_POST['re_password']);

    if ($name && $mobile && $email && $address && $gender && $password && $password ==$re_password) {
        # code...
    }
}
?>
