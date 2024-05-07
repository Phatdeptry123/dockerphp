<?php
function addBookController()
{
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
            echo "";
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
}
function editBookController(
)
{
    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $id_book = $_POST['id_book'];
        $id_danhmuc = $_POST['id_danhmuc'];
        $bookname = $_POST['bookname'];
        $author = $_POST['author'];
        $hinh = $_FILES['hinh']['name'];
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
        } else {
            // echo "Sorry, there was an error uploading your file.";
        }
        ;
        $price = $_POST['price'];
        $rating = $_POST['rating'];
        $mota = $_POST['mota'];
        $nxb = $_POST['nxb'];
        update_book($id_book, $id_danhmuc, $bookname, $author, $hinh, $price, $rating, $mota, $nxb);
        $thongbao = "Cap nhat thanh cong";
    header('Location: /');

    }
}


?>