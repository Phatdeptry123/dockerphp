<?php
function loadall_danhmuc()
{
    $sql = "select * from danhmuc";
    $danhmucs = pdo_query($sql);
    return $danhmucs;
}
function delete_danhmuc($id_danhmuc)
{
    $id = $id_danhmuc;
    $sql = "delete from danhmuc where id_danhmuc = $id";
    pdo_execute($sql);
}
function insert_danhmuc($ten_danhmuc)
{
    $sql = "insert into danhmuc ( ten_danhmuc) values ( ?)";
    pdo_execute($sql, $ten_danhmuc);
};

function getOnedanhmuc ($id_danhmuc){
    $sql = "select * from danhmuc where id_danhmuc = ?";
    $danhmuc = pdo_query_one($sql, $id_danhmuc);
    return $danhmuc;
}
function update_danhmuc($id_danhmuc, $ten_danhmuc)
{
    $sql = "update danhmuc set id_danhmuc = ?, ten_danhmuc = ?, where id_danhmuc = ?";
    pdo_execute($sql, $id_danhmuc, $ten_danhmuc);
}
