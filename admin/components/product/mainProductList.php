<style>
    i.update,
    i.delete {
        font-size: 2rem;
    }

    td.update,
    td.delete {
        padding: 0;
    }

    .dataList tr {
        clear: both;
    }

    td.update:hover,
    td.delete:hover {
        background-color: whitesmoke;
        color: #0652dd;
    }

    .moTa {
        overflow: hidden;
    }

    .addProduct {
        background-color: green;
        display: inline-block;
        color: whitesmoke;

        margin: 20px;
        border-radius: 20px;
    }

    .addProduct a {
        padding: 10px 20px;
        border-radius: 20px;
    }

    .addProduct a:hover {
        color: whitesmoke;
        background-color: #2bb72b;
        border: #0652dd 3px solid;
    }
</style>

<?php
$result = $conenct->prepare('SELECT * FROM sanpham ');
$result->execute();
$row_sanpham = $result->fetchALL();
?>

<div class="row" style="margin: 0px;">
    <div class="col-11">
        <div class="addProduct">
            <a href="<?php echo $level . pages_path . "addProduct.php" ?>">Thêm Sản Phẩm</a>
        </div>
        <form class="form-inline" action="<?php echo $level . pages_path . "productListSearch.php"?>" method="get" name="txtMaLoai" style="margin: 10px 9%;">
            <input style="width:90%" name="txtMaLoai" class="form-control mr-sm-2" type="text" placeholder="Tìm Kiếm" aria-label="Search" required>
            <button class="btn my-2 my-sm-0" type="submit">Tìm Kiếm</button>            
        </form>
        <table class="table table-bordered dataList">
            <tr align="center">
                <th scope="col">Mã sản phẩm</th>
                <th scope="col" class="align-middle th-sm">Tên sản phẩm</th>
                <th scope="col" class="align-middle th-sm">Giá nhập</th>
                <th scope="col" class="align-middle th-sm">Giá bán</th>
                <th scope="col" class="align-middle th-sm">Số lượng</th>
                <th scope="col" class="align-middle th-sm">Trạng thái</th>
                <th scope="col" class="align-middle th-sm">Mã loại</th>
                <th scope="col" class="align-middle th-sm">Mã nhà cung cấp</th>
                <th scope="col" class="align-middle th-sm">Mô tả </th>
                <th scope="col" colspan="2" class="align-middle th-sm">Chức năng </th>
            </tr>
            <?php
            foreach ($row_sanpham as $sp) {
            ?>
                <tr align="center">
                    <td class="align-middle" scope="row"><?php echo $sp['MASP']; ?></td>
                    <td class="align-middle" align="left"><?php echo $sp['TENSP']; ?></td>
                    <td class="align-middle"><?php echo number_format($sp['GIA_NHAP']) . "đ"; ?></td>
                    <td class="align-middle"><?php echo number_format($sp['GIA_BAN']) . "đ"; ?></td>
                    <td class="align-middle"><?php echo number_format($sp['TONKHO']); ?></td>
                    <td class="align-middle"><?php echo $sp['TRANGTHAI_SP']; ?></td>
                    <td class="align-middle"><?php echo $sp['MALOAI']; ?></td>
                    <td class="align-middle"><?php echo $sp['MA_NCC']; ?></td>
                    <td class="align-middle moTa" align="left"><?php echo mb_substr($sp['MO_TA_SP'], 0, 100, 'UTF-8') . ((strlen($sp['MO_TA_SP']) < 100) ? "" : "..."); ?></td>
                    <td class="align-middle update"><a href="<?php echo $level . pages_path . 'updateProduct.php?id=' . $sp['MASP']; ?>" style="padding: 100% 2px;"> <i class="bx bx-pencil update"></i></a></td>
                    <td class="align-middle delete"><a type="button" href="<?php echo $level . comp_path . 'deleteProduct.php?id=' . $sp['MASP']; ?>" style="padding: 100% 2px;"> <i class="bx bx-x delete"></i></a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>