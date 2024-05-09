<?php
function insert_user($account, $password, $ten_user)
{
    $sql = "insert into nguoidung (ten_user, password, account, role) values (?,?,?, 0)";
    pdo_execute($sql, $ten_user, $password, $account);
}

function loadall_user()
{
    $sql = "select * from nguoidung";
    $users = pdo_query($sql);
    return $users;
}
function check_account($account)
{
    $sql = "select * from nguoidung where account = ?";
    $user = pdo_query_one($sql, $account);
    return $user;
}
function check_user($account, $password)
{
    $sql = "select * from nguoidung where account = ? and password = ?";
    $user = pdo_query_one($sql, $account, $password);
    echo $user;
    return $user;
}