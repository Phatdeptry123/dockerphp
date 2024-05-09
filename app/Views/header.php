<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../asset/style.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>PT Store</title>
</head>

<body class="container bg">
    <header class="">
    <div class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?act=addbook">Add Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?act=listCategory">Manager category</a>
                    </li>
                    <?php
                    foreach ($danhmucs as $dm) {
                    ?>
                        <li class="nav-item">   
                            <a class="nav-link" href="./index.php?act=fillterBook&id_danhmuc=<?= $dm['id_danhmuc'] ?>"><?= $dm['ten_danhmuc'] ?></a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <form class="d-flex ml-auto" action="index.php?act=searchBook" method="post">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <input type="submit" name="sreach" value="Tìm kiếm" class="btn btn-primary col-3">
            </form>
            <?php if (isset($_SESSION['user'])) { ?>
                <a><?=$ten_user?></a>
                <a class="nav-link" href="./index.php?act=logout">Logout</a>
            <?php } else {?>
            <a class="nav-link" href="./index.php?act=login"><i class="bi bi-person"></i></a>
            <?php } ?>
        </div>
    </div>
</div>
    </header>
