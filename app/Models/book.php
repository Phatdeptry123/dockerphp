<?php
function loadall_book()
{
    $sql = "select * from book";
    $books = pdo_query($sql);
    return $books;
}
function delete_book($id_book)
{
    $id = $id_book;
    $sql = "delete from book where id_book = $id";
    pdo_execute($sql);
}
function insert_book($id_danhmuc, $bookname, $author, $hinh, $price, $rating, $mota, $nxb)
{
    $sql = "insert into book (id_danhmuc, bookname, author, hinh, price, rating, mota, nxb) values (?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $id_danhmuc, $bookname, $author, $hinh, $price, $rating, $mota, $nxb);
}

?>