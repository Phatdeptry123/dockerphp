<?php
session_start();
echo "Hello World";
include "../app/Models/pdo.php";
include "../app/Model/sanpham.php";
require __DIR__ . '/../vendor/autoload.php';

// Thực hiện truy vấn SQL
$sql = "SELECT * FROM book"; // Thay "products" bằng tên bảng sản phẩm thực tế của bạn
$books = pdo_query($sql);

foreach ($books as $book) {
    echo $book['bookname'];
    echo "<br>";

}
?>