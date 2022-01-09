<?php
include_once($level . "config.php");
?>

<style>
    * {
        box-sizing: border-box;
    }

    table {
        display: table;
        border-collapse: separate;
        box-sizing: border-box;
        text-indent: initial;
        border-spacing: 2px;
        border-color: black;
        width: 70%;
        max-width: 100%;
        margin-bottom: 1rem;
        background-color: transparent;
        border-collapse: collapse;
        margin: auto;   
        margin-top: 5%;    
        border-radius:5px; 
    }

    tbody {
        display: table-row-group;
        vertical-align: middle;
    }

    tr {
        display: table-row;
        vertical-align: inherit;
        text-align: inherit;
    }

    th {
        padding: 20px 0;
        text-align: inherit;
    }
    td,
    th {
        padding: .75rem;
        vertical-align: top;
        border: 1px solid black;
    }

    i.delete {
        font-size: 2rem;
    }

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
</style>

<?php
session_start();
if (isset($_POST['submit'])) {
    foreach ($_POST as $idSP => $soluong) {
        if (($soluong == 0) and (is_numeric($soluong))) {
            unset($_SESSION['cart'][$idSP]);
        } elseif (($soluong > 0) and (is_numeric($soluong))) {
            $_SESSION['cart'][$idSP]['soluong'] = $soluong;
        }
    }
}
?>

<?php
$isCheckout = false;
$total = 0;
$SoLuongTonKho = 0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $k) {
        if (isset($k)) {
            $isCheckout = true;
        }
    }
}

if ($isCheckout == true) {

?>
    <form action="Checkout.php" method="POST">
        <table id="dataList">
            <tr>
                <th scope="col" class="align-middle th-sm">SST</th>
                <th cope="col" class="align-middle th-sm">Mã Sản Phẩm</th>
                <th scope="col" class="align-middle th-sm">Sản Phẩm</th>
                <th scope="col" class="align-middle th-sm">Nhà Cung Cấp</th>
                <th scope="col" class="align-middle th-sm">Số Lượng</th>
                <th scope="col" class="align-middle th-sm">Tên Sản Phẩm</th>
                <th scope="col" class="align-middle th-sm">Giá</th>
                <th scope="col" class="align-middle th-sm">Xóa</th>
            </tr>
            <?php
            foreach ($_SESSION['cart'] as $cartitem) {
                $SoLuongTonKho = $cartitem["TONKHO"];
                $i = 0;
                (int)$i = (int)$i + 1;
            ?>
                <tr>
                    <td scope="col" class="align-middle th-sm"><?php echo $i; ?></td>
                    <td scope="col" class="align-middle th-sm"><?php echo $cartitem['MASP']; ?></td>
                    <td align="center" scope="col" class="align-middle th-sm"><img style="width: 40%; background-size: contain;" src=" <?php echo '../images/' ?><?php echo $cartitem["TENFILE"] ?>" alt=""></td>
                    <td scope="col" class="align-middle th-sm"><?php echo $cartitem['MA_NCC']; ?></td>
                    <td scope="col" class="align-middle th-sm">
                        <input style="" type="text" name="<?php echo $cartitem['MASP']; ?>" size='5' value="<?php
                                                                                                                                    if ($cartitem['soluong'] > $cartitem['TONKHO']) {
                                                                                                                                        echo $cartitem['TONKHO'];
                                                                                                                                    } else {
                                                                                                                                        echo $cartitem['soluong'];
                                                                                                                                    }
                                                                                                                                    ?>">
                    </td>
                    <td scope="col" class="align-middle th-sm"><?php echo $cartitem['TENSP'] ?></td>
                    <td scope="col" class="align-middle th-sm"><?php echo number_format($cartitem['GIA_BAN'], 3) . "VNĐ"; ?></td>
                    <td scope="col" class="align-middle th-sm"><a href="delcartid.php?id=<?php echo $cartitem['MASP']; ?>"><i class="bx bx-x delete"></i></a></td>
                </tr>


            <?php
                if ($cartitem['soluong'] > $cartitem['TONKHO']) {
                    $total += $cartitem['TONKHO'] * $cartitem['GIA_BAN'];
                } else {
                    $total += $cartitem['soluong'] * $cartitem['GIA_BAN'];
                }
            } ?>
        </table>
        <div class="pro" align='right' style='margin: 2% 7%'>
            <b>Tổng Tiền:
                <font color='red'><?php echo number_format($total, 3) . "VNĐ" ?>
                </font>
            </b>
        </div>
        <div class="pro" align="center">
            <b><a href="../index.php"> Mua Tiếp</a> ----- <a href="delcart.php?id=0"> Xóa Hết</a></b>
            <br />
            <b><a href="../components/addBill.php">Thanh Toán </a></b>
        </div>
    <?php
} else {
    echo "<div class='pro'>";
    echo "<p align ='center'>Hiện Tại Không Có Sản Phẩm Nào Trong Giỏ Hàng <br/><a href='../index.php'>Mua Sản Phẩm</a></p>";
    echo "</div>";
}
    ?>
    <?php
    //include_once ($level."layout.php");
    ?>