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

<?php if ($id = $_GET['id'] != '') {
    $result3 = $conenct->prepare('SELECT MANCC FROM nhacungcap');
    $result3->execute();
    $row_NCC = $result3->fetchALL();

    $result2 = $conenct->prepare('SELECT * FROM loaisanpham');
    $result2->execute();
    $row_loaisp = $result2->fetchALL();

    $maSP = $_GET['id'];
    $sanphamchitiet = $conenct->prepare("SELECT * FROM sanpham where MASP = '" . $maSP . "'");
    $sanphamchitiet->bindValue(':maSP', $maSP, PDO::PARAM_INT);
    $sanphamchitiet->execute();
    $sanphamchitiet_rowsdata = $sanphamchitiet->fetchALL();
} else {
?>
    <script>
        window.location = "productList.php";
        setTimeout(window.alert("Chưa chọn sản phẩm"), 1000);
    </script>
<?php
}
?>

<div class="addForm">
    <form action="<?php echo $level . comp_path . 'product/updateProduct_process.php' ?> " method="POST" enctype="multipart/form-data" style="">
        <div class="form-group">
            <label for="txtmasanpham">Mã sản phẩm</label> <br>
            <input type="text" name="txtmasanpham" hidden="true" value="<?php echo $sanphamchitiet_rowsdata[0]['MASP']; ?>">
            <?php echo $sanphamchitiet_rowsdata[0]['MASP']; ?>
        </div>
        <div class="form-group">
            <label for="txttensanpham">Tên sản phẩm</label> <br>
            <input type="text" name="txttensanpham" value="<?php echo $sanphamchitiet_rowsdata[0]['TENSP']; ?>">
        </div>
        <div class="form-group">
            <label for="txtgianhap">Giá nhập</label> <br>
            <input type="numner_format" name="txtgianhap" value="<?php echo $sanphamchitiet_rowsdata[0]['GIA_NHAP']; ?>">
        </div>
        <div class="form-group">
            <label for="txtgiaban">Giá bán</label> <br>
            <input type="numner_format" name="txtgiaban" value="<?php echo $sanphamchitiet_rowsdata[0]['GIA_BAN']; ?>">
        </div>
        <div class="form-group">
            <label for="txtsoluong">Số lượng</label> <br>
            <input type="text" name="txtsoluong" value="<?php echo $sanphamchitiet_rowsdata[0]['TONKHO']; ?>">
        </div>
        <div class="form-group">
            <label for="txttrangthai">Trạng thái</label> <br>
            <select name="txttrangthai" value="">
                <option value="0" <?php if ($sanphamchitiet_rowsdata[0]['TRANGTHAI_SP'] == "0") { ?> selected <?php } ?>>Hết hàng</option>
                <option value="1" <?php if ($sanphamchitiet_rowsdata[0]['TRANGTHAI_SP'] == "1") { ?> selected <?php } ?>>Còn hàng</option>
                <option value="2" <?php if ($sanphamchitiet_rowsdata[0]['TRANGTHAI_SP'] == "2") { ?> selected <?php } ?>>Ngưng bán</option>
            </select>
        </div>
        <div class="form-group">
            <label for="txtmaloaisanpham">Mã loại sản phẩm</label> <br>
            <select name="txtmaloaisanpham">
                <?php foreach ($row_loaisp as $loaisp) {
                    //echo ($loaisp['MALOAI']);
                ?>
                    <option value="<?php echo $loaisp['MALOAISP']; ?> " <?php if ($sanphamchitiet_rowsdata[0]['MALOAISP'] == $loaisp['MALOAISP']) { ?> selected <?php } ?>>
                        <?php echo $loaisp['MALOAISP']; ?>
                    </option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="txtmancc">Mã nhà cung cấp</label> <br>
            <select name="txtmancc">
                <?php foreach ($row_NCC as $NCC) {
                    //echo ($NCC['MANCC']);
                ?>
                    <option value="<?php echo $NCC['MANCC']; ?>" <?php if ($sanphamchitiet_rowsdata[0]['MANCC'] == $loaisp['MANCC']) { ?> selected <?php } ?>>
                        <?php echo $NCC['MANCC']; ?>
                    </option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="txtmota">Mô tả Sản phẩm</label> <br>
            <input type="text" name="txtmota" value="<?php echo $sanphamchitiet_rowsdata[0]['MO_TA_SP']; ?>">
        </div>
        <div class="form-group">
            <label for="hinhanh">Hình Sản phẩm</label> <br>
            <img src="<?php echo $level.'images/'.$sanphamchitiet_rowsdata[0]['TENFILE'];?>">
            <input type="hinhanh" name="hinhanh">
        </div>        
        

        <button class="button" type="submit"> Cập nhật </button>
        <!-- Hình ảnh <input type="file" name="hinhanh"> </br> </br> -->
    </form>
</div>