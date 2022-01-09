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
$result = $conenct->prepare('SELECT * FROM taikhoan ');
$result->execute();
$row_sanpham = $result->fetchALL();
?>

<div class="row" style="margin: 0px;">
    <div class="col-11">
        <div class="addProduct">
            <a href="<?php echo $level . pages_path . "addAccount.php" ?>">Thêm Tài khoản</a>
        </div>        
        <table class="table table-bordered dataList">
            <tr align="center">
                <th scope="col">Mã Tài khoản</th>
                <th scope="col" class="align-middle th-sm">Tên đăng nhập</th>
                <th scope="col" class="align-middle th-sm">Mật khẩu</th>
                <th scope="col" class="align-middle th-sm">Email</th>
                <th scope="col" class="align-middle th-sm">Mô tả</th>
                <th scope="col" class="align-middle th-sm">Trạng thái</th>
                <th scope="col" class="align-middle th-sm">Loại tài khoản</th>               
                <th scope="col" colspan="2" class="align-middle th-sm">Chức năng </th>
            </tr>
            <?php
            foreach ($row_sanpham as $sp) {
            ?>
                <tr align="center">
                    <td class="align-middle" scope="row"><?php echo $sp['MATAIKHOAN']; ?></td>
                    <td class="align-middle" align="left"><?php echo $sp['USERNAME']; ?></td>
                    <td class="align-middle"><?php echo $sp['PASSWORD']; ?></td>
                    <td class="align-middle"><?php echo $sp['EMAIL']; ?></td>
                    <td class="align-middle moTa" align="left"><?php echo mb_substr($sp['MO_TA_SP'], 0, 100, 'UTF-8') . ((strlen($sp['MOTA_TK']) < 100) ? "" : "..."); ?></td>
                    <td class="align-middle"><?php echo $sp['TRANGTHAI_TK']; ?></td>
                    <td class="align-middle"><?php echo $sp['LOAI_TK']; ?></td>                    
                    <td class="align-middle update"><a href="<?php echo $level . pages_path . 'updateAccount.php?id=' . $sp['MATAIKHOAN']; ?>" style="padding: 100% 2px;"> <i class="bx bx-pencil update"></i></a></td>
                    <td class="align-middle delete"><a type="button" href="<?php echo $level . comp_path . 'account/deleteAccount.php?id=' . $sp['MATAIKHOAN']; ?>" style="padding: 100% 2px;"> <i class="bx bx-lock delete"></i></a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>