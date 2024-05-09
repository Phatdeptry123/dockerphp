<h1>Add Category
</h1>
<div class="row mr-2">
    <div class="row frmtile ">
        <form action="index.php?act=addCategory" method="post">
            <div class="row mb-2">
                <label>Tên danh mục</label><br>
                <input type="text" name="ten_danhmuc" class="mr-1 col-3">
            </div>
            <div class="row">
                <div class="d-flex">
                    <input type="submit" name="themCate" value="Thêm Danh Mục" class="btn btn-primary col-3">
                    <input type="reset" value="Nhập lại" class="btn btn-primary col-3">
                </div>
            </div>
            <?php 
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao
            ?>
        </form>
    </div>
</div>

