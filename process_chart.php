<?php 
include 'database_sql.php';
session_start();
$data = new Database();

if (isset($_GET['product_id']) && $_GET['product_id'] !== '') {
    $id = $_GET['product_id'];
    $pd_sql = "SELECT * FROM products where id = '$id'";
    $product = $data->getData($pd_sql);
    $pd_data = $product->fetch_assoc();
    // $jsProduct = json_encode($pd_data);
    echo '{"id":"'.$pd_data['id'].'","ptitle":"'.$pd_data['product_name'].'","pimage":"'.$pd_data['product_img'].'","pprice":"'.$pd_data['product_price'].'"}';
}

?>