<?php
function addCategoryController()
{
    if (isset($_POST['themCate']) && ($_POST['themCate'])) {
    $ten_danhmuc = $_POST['ten_danhmuc'];
    insert_danhmuc( $ten_danhmuc);
    $thongbao = "them thanh cong";
    }
    include "../app/Views/category/addCategory.php";
}