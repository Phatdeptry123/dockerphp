    <h1>sreach - BooksList</h1>
    <div class="container">
        <div class="row">
            <?php
foreach ($books as $book) {
    ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="../uploads/<?=$book['hinh']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?=$book['bookname']?></h5>
                            <p class="card-text"><?=$book['mota']?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="./index.php?act=detailBook&id_book=<?=$book['id_book']?>" class="btn btn-sm btn-outline-secondary">View</a>
                                    <a href="./index.php?act=editBook&id_book=<?=$book['id_book']?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    <a href="./index.php?act=delete&id_book=<?=$book['id_book']?>" class="btn btn-sm btn-outline-secondary">Delete</a>
                                </div>
                                <small class="text-muted"><?=$book['price']?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
}
?>
        </div>
    </div>

