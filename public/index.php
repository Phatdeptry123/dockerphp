<?php

session_start();
include "../app/Models/pdo.php";
include "../app/Models/book.php";
include "../app/Models/category.php";
include "../app/Models/auth.php"; 
include "../app/Controllers/book.php";
include "../app/Controllers/category.php";
include "../app/Controllers/auth.php";

require __DIR__ . '/../vendor/autoload.php';

$users = loadall_user();
$danhmucs = loadall_danhmuc();
$books = loadall_book();

if (isset($_SESSION['user'])) {
$currentUser = $_SESSION['user'];
$ten_user = $currentUser['ten_user'];
}

setcookie('user', $ten_user, time() + 3600, '/');
if (isset($_COOKIE['user'])) {
    $user = $_COOKIE['user'];
} else {
    $user = "Guest";
}   
 

include "../app/Views/header.php";
if (isset($_GET['act']) && ($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'addbook':
            addBookController();
            break;
        case 'delete':
            delete_book($_GET['id_book']);
            header('Location: /');
            break;
        case 'editBook':
            $book = getOneBook($_GET['id_book']);
            include "../app/Views/book/editBook.php";
            break;
        case 'detailBook':
            $book = getOneBook($_GET['id_book']);
            include "../app/Views/book/detailBook.php";
            break;
        case "updateBook":
            editBookController();
            break;
        case "searchBook":
            searchBookController();
            break;
        case "fillterBook":
            fillterBookController();
            break;
        case "addCategory":
            addCategoryController();
            break;
        case "listCategory":
            include "../app/Views/category/listCategory.php";
            break;
        case "deleteCategory":
            delete_danhmuc($_GET['id_danhmuc']);
            break;
        case "signup":
            signupController();
            break;
        case "login":
            loginController();
            break;
        case "logout":
            session_destroy();
            header('Location: /');
            break;
    }
} else {
    include "../app/Views/home.php";
}
include "../app/Views/footer.php";
