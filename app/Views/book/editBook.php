






<h1>Edit Book</h1>
<h2><? //=$book['bookname'];?></h2>


<div class="row mr-2">
    <div class="row frmtile ">
        <form action="index.php?act=updateBook" method="post" enctype="multipart/form-data">
            <div class="row mb-2">
                <label>Tên sách</label><br>

                <input type="text" name="bookname" class="mr-1 col-3" value="<?=$book['bookname']?>">
            </div>
            <div class="row mb-2">
                <label>Tên danh mục</label><br>
                    <input type="text" name="danhmuc" class="mr-1 col-3">
                </div>
            <div class="row mb-2">
            <label>Mô tả sách</label>
                <input type="text" name="mota" class="mr-1 col-3" value="<?=$book['mota']?>">
            </div>
            <div class="row mb-2">
            <label>Rating</label>
                <input type="text" name="rating" class="mr-1 col-3" value="<?=$book['rating']?>">
            </div>
            <div class="row mb-2">
            <label>Nhà xuất bản</label>
                 <br>
                <input type="text" name="nxb" class="mr-1 col-3" value="<?=$book['nxb']?>">
            </div>
            <div class="row mb-2">
            <label>Tác Giả</label>
                 <br>
                <input type="text" name="author" class="mr-1 col-3" value="<?=$book['author']?>">
            </div>
            <div class="row mb-2">
            <label>Giá</label>
                 <br>
                <input type="text" name="price" class="mr-1 col-3" value="<?=$book['price']?>">
            </div>
            <div class="row mb-2">
            <label>Hình ảnh</label>
                 <br>
                <img src="../uploads/<?=$book['hinh']?>" class="card-img-top" alt="..." style="width: 200px; height: 200px;">
                <input type="file" name="hinh" class="mr-1 col-5" value="<?=$book['hinh']?>">
            </div>
            <div class="row mb-2">

            <div class="row">
                <div class="d-flex">
                    <input type="hidden" name="id_book" value="<?=$book['id_book']?>">
                    <input type="submit" name="capnhat" value="Update" class="btn btn-primary col-3">
                    <input type="reset" value="Nhập lại" class="btn btn-primary col-3">
                </div>
            </div>
            <?php
if (isset($thongbao) && ($thongbao != "")) {
    echo $thongbao
    ;
}
?>
        </form>S
    </div>
</div>

<script>
document.querySelector('input[type="file"]').addEventListener('change', function(event) {
    var reader = new FileReader();
    reader.onload = function(event) {
        var imgElement = document.querySelector('img');
        imgElement.src = event.target.result;
    };
    reader.readAsDataURL(event.target.files[0]);
});
</script>