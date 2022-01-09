<?php include 'database/db.php'; 
$maLoaiSP=$_GET['id'];
$loaisanpham=$conenct->prepare('SELECT * FROM loaisanpham where MALOAISP = :maLoaiSP');
$loaisanpham ->bindValue(':maLoaiSP',$maLoaiSP,PDO::PARAM_STR);
$loaisanpham->execute();
$loaisanpham_rowsdata = $loaisanpham->fetchALL();
?>
<style>
    .addForm {
        text-align: center;
        display: flex;
        justify-content: space-around;
        font-family: "Roboto", sans-serif;
        margin: 3% 35%;
        padding: 50px;
        background-color: #ffffff;
        border-radius: 20px;
    }

    .form-group {
        text-align: left;
    }

    .form-group label {
        font-weight: bold;

    }

    .button {
        padding: 5px 20px;
        border-radius: 7px;
    }

    .button:hover {
        color: #0652dd;
        border-color: #0652dd;
    }
</style>
<div class="addForm">
    <form action="<?php echo $level . comp_path . 'categories/updateCategories_process.php' ?> " method="POST" enctype="multipart/form-data" style="">
    <div class="form-group">
            <label for="txtmasanpham">Mã Loại sản phẩm</label> <br>
            <input type="text" name="txtmaloaisanpham" value = "<?php echo $loaisanpham_rowsdata[0]['MALOAISP'];?>">
        </div>
        <div class="form-group">
            <label for="txttensanpham">Tên Loại sản phẩm</label> <br>
            <input type="text" name="txttenloaisanpham" value = "<?php echo $loaisanpham_rowsdata[0]['TENLOAISP'];?>">
        </div>

        <button class="button" type="submit"> Cập nhật </button>
        <!-- Hình ảnh <input type="file" name="hinhanh"> </br> </br> -->
    </form>
</div>