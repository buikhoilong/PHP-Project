    <?php $result = $conenct->prepare('SELECT MALOAISP FROM loaisanpham');
    $result->execute();
    $row_loaisp = $result->fetchALL();

    $result = $conenct->prepare('SELECT MANCC FROM nhacungcap');
    $result->execute();
    $row_NCC = $result->fetchALL(); ?>
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
            text-align: left;
        }
        .form-group input {
            /* width: 100%; */
            align-self: center;
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
        <form action="<?php echo $level . comp_path . 'product/addProduct_process.php' ?> " method="POST" enctype="multipart/form-data" style="">
            <div class="form-group">
                <label for="txtmasanpham">Mã sản phẩm</label> <br>
                <input type="text" name="txtmasanpham">
            </div>
            <div class="form-group">
                <label for="txttensanpham">Tên sản phẩm</label> <br>
                <input type="text" name="txttensanpham">
            </div>
            <div class="form-group">
                <label for="txtgianhap">Giá nhập</label> <br>
                <input type="numner_format" name="txtgianhap">
            </div>
            <div class="form-group">
                <label for="txtgiaban">Giá bán</label> <br>
                <input type="numner_format" name="txtgiaban">
            </div>
            <div class="form-group">
                <label for="txtsoluong">Số lượng</label> <br>
                <input type="text" name="txtsoluong">
            </div>
            <div class="form-group">
                <label for="txttrangthai">Trạng thái</label> <br>
                <select name="txttrangthai">
                    <option value="0">Hết hàng</option>
                    <option value="1">Còn hàng</option>
                    <option value="2">Ngưng bán</option>
                </select>
            </div>
            <div class="form-group">
                <label for="txtmaloaisanpham">Mã loại sản phẩm</label> <br>
                <select name="txtmaloaisanpham">
                    <?php foreach ($row_loaisp as $loaisp) {
                    ?>
                        <option value="<?php echo $loaisp['MALOAISP']; ?> ">
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
                    ?>
                        <option value="<?php echo $NCC['MANCC']; ?>">
                            <?php echo $NCC['MANCC']; ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="txtmota">Mô tả Sản phẩm</label> <br>
                <input type="text" name="txtmota">
            </div>
            <div class="form-group">
                <label for="hinhanh">Hình Sản phẩm</label> <br>
                <input type="file" name="hinhanh">
            </div>

            <button class="button" type="submit"> Thêm </button>
            
        </form>
    </div>