<?php
function loadall_danhmuc()
{
    $sql = "select * from danhmuc";
    $listdanhmuc = pdo_query($sql);
    echo $listdanhmuc;
    return $listdanhmuc;
}
?>