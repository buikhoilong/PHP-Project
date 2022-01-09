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

    .add {
        background-color: green;
        display: inline-block;
        color: whitesmoke;

        margin: 20px;
        border-radius: 20px;
    }

    .add a {
        padding: 10px 20px;
        border-radius: 20px;
    }

    .add a:hover {
        color: whitesmoke;
        background-color: #2bb72b;
        border: #0652dd 3px solid;
    }
</style>

<?php

include 'database/db.php';
$result = $conenct->prepare('SELECT * FROM loaisanpham');
$result->execute();
$row_loaisanpham = $result->fetchALL();


?>
<div class="row" style="margin: auto;">
    <div class="col-11">
        <div class="add">
            <a href="<?php echo $level . pages_path . "addCategories.php" ?>">Thêm Loại Sản Phẩm</a>
        </div>
    </div>
    <table id='dsLoaiSanPham' class="table table-bordered dataList" style="min-width: 20%; width: 50%; margin: auto;">
        <tr align="center">
            <th scope="col" class="align-middle th-sm">Mã loại sản phẩm</th>
            <th scope="col" class="align-middle th-sm">Tên loại sản phẩm</th>
            <th scope="col" colspan="2" class="align-middle th-sm">Chức năng </th>
        </tr>
        <?php
        foreach ($row_loaisanpham as $lsp) {
        ?>
            <tr align="center">
                <td class="align-middle" scope="row"><?php echo $lsp['MALOAISP']; ?></td>
                <td class="align-middle" scope="row"><?php echo $lsp['TENLOAISP']; ?></td>
                <td class="align-middle" scope="row"><a href="<?php echo $level . pages_path . 'updateCategories.php?id=' . $lsp['MALOAISP']; ?>" style="padding:  2px;"> <i class="bx bx-pencil update"></i></a></td>
                <td class="align-middle" scope="row"><a href="<?php echo $level . pages_path . 'deleteCategories_process.php?id=' . $lsp['MALOAISP']; ?>" style="padding:  2px;"> <i class="bx bx-x delete"></i></a></td>
            </tr>
        <?php
        }
        ?>
    </table></br></br>
</div>