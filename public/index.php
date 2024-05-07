<?php
session_start();
include "../app/Models/pdo.php";
include "../app/Models/book.php";
include "../app/Views/header.php";
require __DIR__ . '/../vendor/autoload.php';


$books = loadall_book();
if (isset($_GET['act']) && ($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'addbook':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $id_danhmuc = $_POST['id_danhmuc'];
                $bookname = $_POST['bookname'];
                $author = $_POST['author'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    echo $bookname;
                    echo "them fail file";
                    // echo "Sorry, there was an error uploading your file.";
                }
                ;
                $price = $_POST['price'];
                $rating = $_POST['rating'];
                $mota = $_POST['mota'];
                $nxb = $_POST['nxb'];
                // echo $bookname, $author, $hinh, $price, $rating, $mota, $nxb;
                insert_book($id_danhmuc, $bookname, $author, $hinh, $price, $rating, $mota, $nxb);
                $thongbao = "them thanh cong";
            }
            include "../app/Views/book/addBook.php";
            break;
        case 'delete':
            delete_book($_GET['id_book']);
            header('Location: /');
            break;
        case 'edit':
            include "../app/Views/book/editBook.php";
            break;
        
    }
} else {
    include "../app/Views/home.php";
}
include "../app/Views/footer.php";
?>
