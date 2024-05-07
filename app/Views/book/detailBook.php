<div>
    <img src="" alt="">
    <h1>Chi tiết sách</h1>
    <?php
    // $id_book = $_GET['id_book'];
    // $book = getOneBook($id_book);
    // ?>
    <div class="row">
        <div class="col-6">
            <img src="../uploads/<?= $book['hinh'] ?>" alt="">
        </div>
        <div class="col-6">
            <h2><?= $book['bookname'] ?></h2>
            <p><?= $book['mota'] ?></p>
            <p><?= $book['price'] ?></p>
            <p><?= $book['author'] ?></p>
            <p><?= $book['nxb'] ?></p>
            <p><?= $book['rating'] ?></p>
        </div>
    <div>
</div>