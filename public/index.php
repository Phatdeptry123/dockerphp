<?php

session_start();
include "../app/Models/pdo.php";
include "../app/Models/book.php";
include "../app/Views/header.php";
include "../app/Controllers/book.php";
require __DIR__ . '/../vendor/autoload.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$books = loadall_book();
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
            
    }
} else {
    include "../app/Views/home.php";
}
include "../app/Views/footer.php";
