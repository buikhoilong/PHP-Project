<?php include '../database/db.php';
$result2 = $conenct->prepare('SELECT * FROM trangthai_hoadon');
$result2->execute();
$row_tt = $result2->fetchALL();

$result1 = $conenct->prepare('SELECT * FROM loaihoadon');
$result1->execute();
$row_lhd = $result1->fetchALL();

$result3 = $conenct->prepare('SELECT MANCC FROM nhacungcap');
$result3->execute();
$row_NCC = $result3->fetchALL();

$maHD = $_GET['id'];
$hoadon = $conenct->prepare('SELECT * FROM hoadon where MAHD = :maHD');
$hoadon->bindValue(':maHD', $maHD, PDO::PARAM_STR);
$hoadon->execute();
$hoadon_rowsdata = $hoadon->fetchALL(); ?>

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
    <form action="<?php echo $level . comp_path . 'bill/updateBill_process.php' ?> " method="POST" enctype="multipart/form-data" style="">
        <div class="form-group">
            <label for="loaihd">Loại Hoá Đơn</label> <br>
            <p><?php if ($hoadon_rowsdata[0]['LOAIHD'] == 'X') {
                    echo "Hoá đơn bán"; ?> <input type="text" name="txtloaihd" hidden="true" value="X"> <?php
                                                                                                } else {
                                                                                                    echo "Hoá đơn nhập"; ?>
                    <input type="text" name="txtloaihd" hidden="true" value="N"> <?php
                                                                                                } ?>
            </p>
        </div>
        <div class="form-group">
            <label for="txtmahd">Mã Hoá đơn</label> <br>
            <input type="text" name="txtmahd" hidden="true" value="<?php echo $hoadon_rowsdata[0]['MAHD']; ?>">
            <p><?php echo $hoadon_rowsdata[0]['MAHD']; ?></p>
        </div>
        <?php if ($hoadon_rowsdata[0]['LOAIHD'] == 'X') { ?>
            <div class="form-group">
                <label for="txtmakh">Mã Khách Hàng</label> <br>
                <input type="numner_format" name="txtmakh" value="<?php echo $hoadon_rowsdata[0]['MA_KH']; ?>">
            </div><?php
                } ?>
        <div class="form-group">
            <label for="tongtien">Tổng tiền</label> <br>
            <p><?php echo $hoadon_rowsdata[0]['TONGTIEN']; ?></p>
        </div>
        <?php if ($hoadon_rowsdata[0]['LOAIHD'] == 'N') { ?>
            <div class="form-group">
                <label for="txtmancc">Mã nhà chung cấp</label> <br>
                <select name="txtmancc">
                    <?php foreach ($row_NCC as $NCC) {
                        echo ($NCC['MANCC']);
                    ?>
                        <option value="<?php echo $NCC['MANCC']; ?>" <?php
                                                                        if ($NCC['MANCC'] == $hoadon_rowsdata[0]['MA_NCC'])
                                                                            echo "selected = 'selected'"; ?>>
                            <?php echo ($NCC['MANCC']); ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div><?php
                } ?>
        <div class="form-group">
            <label for="txttrangthai">Trạng thái</label> <br>
            <select name="txttrangthai">
                <?php foreach ($row_tt as $tt) {
                    echo ($tt['TRANGTHAI']);
                ?>
                    <option value="<?php echo $tt['TRANGTHAI']; ?>" <?php
                                                                    if ($tt['TRANGTHAI'] == $hoadon_rowsdata[0]['TRANGTHAI_HD'])
                                                                        echo "selected = 'selected'"; ?>>
                        <?php echo ($tt['TENTRANGTHAI']); ?>
                    </option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="txtmota">Ngày lập</label> <br>
            <p><?php echo date('h:m:s d/m/Y', strtotime($hoadon_rowsdata[0]['NGAYLAP_HD'])); ?></p>
        </div>

        <button class="button" type="submit"> Cập nhật </button>

    </form>
</div>