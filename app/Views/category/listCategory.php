<a href="./index.php?act=addCategory" class="btn btn-sm btn-outline-secondary">Add New Category</a>

<?php
foreach ($danhmucs as $dm) {
    ?>
    <div class="d-flex align-items-center">
    <div class="btn-group">
            <a href="./index.php?act=deleteCategory&id_danhmuc=<?=$dm['id_danhmuc']?>" class="btn btn-sm btn-outline-secondary">Delete</a>
        </div>
        <h2 >
            <?=$dm['ten_danhmuc']?>
        </h2>
    </div>
<?php
}
?>