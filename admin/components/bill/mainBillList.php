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
$result = $conenct->prepare('SELECT * FROM hoadon WHERE TRANGTHAI_HD <> 0 ORDER BY TRANGTHAI_HD ASC, LOAIHD');
$result->execute();
$row_sanpham = $result->fetchALL();

?>

<div class="row" style="margin: 0px;">
    <div class="col-11">

        <table class="table table-bordered dataList">
            <tr align="center">
                <th scope="col">Mã Hoá đơn</th>
                <th scope="col" class="align-middle th-sm">Mã Khách hàng (HD Bán)</th>
                <th scope="col" class="align-middle th-sm">Tổng tiền</th>
                <th scope="col" class="align-middle th-sm">Mã nhà cung cấp (HD Nhập)</th>
                <th scope="col" class="align-middle th-sm">Trạng thái</th>
                <th scope="col" class="align-middle th-sm">Loại Hoá đơn</th>
                <th scope="col" class="align-middle th-sm">Ngày lập</th>
                <th scope="col" colspan="2" class="align-middle th-sm">Chức năng </th>
            </tr>
            <?php
            foreach ($row_sanpham as $sp) {
                $trangthai = "";
                if ($sp['TRANGTHAI_HD'] == '0') $trangthai = "Đã Huỷ";
                if ($sp['TRANGTHAI_HD'] == '1') $trangthai = "Đã thanh toán";
                if ($sp['TRANGTHAI_HD'] == '2') $trangthai = "Đã giao hàng";
                if ($sp['TRANGTHAI_HD'] == '3') $trangthai = "Hoàn thành";
            ?>
                <tr align="center">
                    <td class="align-middle" scope="row"><?php echo $sp['MAHD']; ?></td>
                    <td class="align-middle" align="left"><?php echo $sp['MA_KH']; ?></td>
                    <td class="align-middle"><?php echo $sp['TONGTIEN']; ?></td>
                    <td class="align-middle"><?php echo $sp['MA_NCC']; ?></td>
                    <td class="align-middle"><?php echo $trangthai; ?></td>
                    <td class="align-middle"><?php echo $sp['LOAIHD']; ?></td>
                    <td class="align-middle moTa" align="left"><?php echo date('h:m:s d/m/Y', strtotime($sp['NGAYLAP_HD'])); ?></td>
                    <td class="align-middle update"><a href="<?php echo $level . pages_path . 'updateBill.php?id=' . $sp['MAHD']; ?>" style="padding: 100% 2px;"> <i class="bx bx-pencil update"></i></a></td>
                    <td class="align-middle delete"><?php if($sp['TRANGTHAI_HD']=='1'){?><a type="button" href="<?php echo $level . comp_path . 'bill/deleteBill.php?id=' . $sp['MAHD']; ?>" style="padding: 100% 2px;"> <i class="bx bx-check-circle delete"></i></a><?php }?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>