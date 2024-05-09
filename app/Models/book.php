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
};

function getOneBook ($id_book){
    $sql = "select * from book where id_book = ?";
    $book = pdo_query_one($sql, $id_book);
    return $book;
}
function update_book($id_book, $id_danhmuc, $bookname, $author, $hinh, $price, $rating, $mota, $nxb)
{
    $sql = "update book set id_danhmuc = ?, bookname = ?, author = ?, hinh = ?, price = ?, rating = ?, mota = ?, nxb = ? where id_book = ?";
    pdo_execute($sql, $id_danhmuc, $bookname, $author, $hinh, $price, $rating, $mota, $nxb, $id_book);
}

function searchBook($search)
{
    $sql = "select * from book where bookname like '%$search%'";
    $books = pdo_query($sql);
    return $books;
}

function fillterBook($id_danhmuc)
{
    $sql = "select * from book where id_danhmuc = $id_danhmuc";
    $books = pdo_query($sql);
    return $books;
}
