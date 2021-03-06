<!DOCTYPE html>
<?php
include_once($level . "config.php");
include_once($level . comp_path . "headTag.php");
session_start();

?>

<body>

    <!-- SIDEBAR -->
    <?php include_once($level . comp_path . "sidebar.php"); ?>


    <!-- END SIDEBAR -->

    <!-- MAIN -->
    <div class="main">
        <!-- MAIN HEADER -->
        <?php include_once($level . comp_path . "mainHeader.php"); ?>
        <!-- END MAIN HEADER -->
        <!-- MAIN CONTENT -->
        <?php
        if ($isIndex == true) {
            include_once($level . comp_path . "mainIndex.php");
        }

        if ($isBillList == true) {
            include_once($level . comp_path . "bill/mainBillList.php");
        }

        if ($isUpdateBill == true) {
            include_once($level . comp_path . "bill/mainUpdateBill.php");
        }

        if ($isProductList == true) {
            include_once($level . comp_path . "product/mainProductList.php");
        }
        if ($isProductListSearch == true) {
            include_once($level . comp_path . "product/SearchProductList.php");
        }

        if ($isAddProduct == true) {
            include_once($level . comp_path . "product/mainAddProduct.php");
        }

        if ($isUpdateProduct == true) {
            include_once($level . comp_path . "product/mainUpdateProduct.php");
        }

        if ($isCategoriesList == true) {
            include_once($level . comp_path . "categories/mainCategoriesList.php");
        }

        if ($isAddCategories == true) {
            include_once($level . comp_path . "categories/mainAddCategories.php");
        }

        if ($isUpdateCategories == true) {
            include_once($level . comp_path . "categories/mainUpdateCategories.php");
        }

        if ($isAccountList == true) {
            include_once($level . comp_path . "account/mainAccountList.php");
        }

        if ($isAddAccount == true) {
            include_once($level . comp_path . "account/mainAddAccount.php");
        }

        if ($isUpdateAccount == true) {
            include_once($level . comp_path . "account/mainUpdateAccount.php");
        }

        if ($isStatic == true) { ?>
            <style>
                .mainclass {
                    width: 90%;
                    margin-top: 5%;
                    padding-left: 10%;
                }
            </style>

            <div class="mainclass">
                <form class="form-horizontal" action="statistic_result.php" method="GET" name="txt">
                    <select name="txt">
                        <option value="" selected="selected">Ch???n th??ng</option>
                        <option value="T1">Th??ng 1</option>
                        <option value="T2">Th??ng 2</option>
                        <option value="T3">Th??ng 3</option>
                        <option value="T4">Th??ng 4</option>
                        <option value="T5">Th??ng 5</option>
                        <option value="T6">Th??ng 6</option>
                        <option value="T7">Th??ng 7</option>
                        <option value="T8">Th??ng 8</option>
                        <option value="T9">Th??ng 9</option>
                        <option value="T10">Th??ng 10</option>
                        <option value="T11">Th??ng 11</option>
                        <option value="T12">Th??ng 12</option>
                    </select>
                    <button type="submit" style="padding: 3px 10px; border-radius: 5px;">L???c</button>
                </form>

                <form class="form-horizontal" action="statistic_result.php" method="GET" name="txt">
                    <h5 style="display: inline">S??? l?????ng b??n nhi???u nh???t theo </h5>
                    <select name="txt" style="display: inline">
                        <option value="0" selected="selected">Ch???n qu??</option>
                        <option value="Q1">Qu?? 1</option>
                        <option value="Q2">Qu?? 2</option>
                        <option value="Q3">Qu?? 3</option>
                        <option value="Q4">Qu?? 4</option>
                    </select>
                    <button type="submit" style="padding: 3px 10px; border-radius: 5px;">L???c</button>
                </form>
                <form class="form-horizontal" action="statistic_result.php" method="GET" name="txt">
                    <select name="txt">
                        <option value="" selected="selected">Ch???n n??m</option>
                        <option value="N2019">N??m 2019</option>
                        <option value="N2020">N??m 2020</option>
                        <option value="N2021">N??m 2021</option>
                    </select>
                    <button type="submit" style="padding: 3px 10px; border-radius: 5px;">L???c</button>
                </form>
                </form>
                <table cellspacing='0' border='1' id='MA_HD' align="center">
                    <tr align="center">
                        <th>M?? s???n ph???m</th>
                        <th>T??n s???n ph???m</th>
                        <th>Tr???ng th??i</th>
                        <th>M?? lo???i</th>
                        <th>S??? l?????ng b??n</th>
                    </tr>
                    <?php
                    foreach ($row_thongke as $tke) {
                    ?>
                        <tr align="center">
                            <td><?php echo $tke['MASP']; ?></td>
                            <td><?php echo $tke['TENSP']; ?></td>
                            <td><?php echo $tke['TRANGTHAI_SP']; ?></td>
                            <td><?php echo $tke['MALOAI']; ?></td>
                            <td><?php echo $tke['SOLUONG']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>

                </table>
            </div>
        <?php

        }

        if ($isStatic_result == true) {
            $loai = substr($_GET['txt'], 0, 1);
            $value = (int)substr($_GET['txt'], 1);

            if ($loai == "T") {
                $sql = "SELECT SUM(SOLUONG) tong,TENSP,MA_SP FROM chitiet_hoadon,hoadon,sanpham WHERE MA_HD=MAHD AND LOAIHD='X' AND MA_SP=MASP AND MONTH(NGAYLAP_HD) = '" . $value . "' GROUP BY MA_SP ORDER BY SUM(SOLUONG) DESC ";
            } else if ($loai == "Q") {
                if ($value == 1) {
                    $sql = "SELECT SUM(SOLUONG) tong,TENSP,MA_SP FROM chitiet_hoadon,hoadon,sanpham WHERE MA_HD=MAHD AND LOAIHD='X' AND MA_SP=MASP AND MONTH(NGAYLAP_HD) BETWEEN 1 AND 3 GROUP BY MA_SP ORDER BY SUM(SOLUONG) DESC";
                } else if ($value == "2") {
                    $sql = "SELECT SUM(SOLUONG) tong,TENSP,MA_SP FROM chitiet_hoadon,hoadon,sanpham WHERE MA_HD=MAHD AND LOAIHD='X' AND MA_SP=MASP AND MONTH(NGAYLAP_HD) BETWEEN 4 AND 6 GROUP BY MA_SP ORDER BY SUM(SOLUONG) DESC";
                } else if ($value == "3") {
                    $sql = "SELECT SUM(SOLUONG) tong,TENSP,MA_SP FROM chitiet_hoadon,hoadon,sanpham WHERE MA_HD=MAHD AND LOAIHD='X' AND MA_SP=MASP AND MONTH(NGAYLAP_HD) BETWEEN 7 AND 9 GROUP BY MA_SP ORDER BY SUM(SOLUONG) DESC";
                } else {
                    $sql = "SELECT SUM(SOLUONG) tong,TENSP,MA_SP FROM chitiet_hoadon,hoadon,sanpham WHERE MA_HD=MAHD AND LOAIHD='X' AND MA_SP=MASP AND MONTH(NGAYLAP_HD) BETWEEN 10 AND 12 GROUP BY MA_SP ORDER BY SUM(SOLUONG) DESC";
                }
            } else if ($loai == "N") {
                $sql = "SELECT SUM(SOLUONG) tong,TENSP,MA_SP FROM chitiet_hoadon,hoadon,sanpham WHERE MA_HD=MAHD AND LOAIHD='X' AND MA_SP=MASP AND YEAR(NGAYLAP_HD) = '" . $value . "' GROUP BY MA_SP ORDER BY SUM(SOLUONG) DESC";
            }
            $result1 = $conenct->prepare($sql);
            $result1->execute();
            $row = $result1->fetchALL();

        ?> <style>
                .mainclass {
                    width: 90%;
                    margin-top: 5%;
                    padding-left: 10%;
                }
            </style>

            <div class="mainclass">
                <form class="form-horizontal" action="statistic_result.php" method="GET" name="txt">
                    <select name="txt">
                        <option value="" selected="selected">Ch???n th??ng</option>
                        <option value="T1">Th??ng 1</option>
                        <option value="T2">Th??ng 2</option>
                        <option value="T3">Th??ng 3</option>
                        <option value="T4">Th??ng 4</option>
                        <option value="T5">Th??ng 5</option>
                        <option value="T6">Th??ng 6</option>
                        <option value="T7">Th??ng 7</option>
                        <option value="T8">Th??ng 8</option>
                        <option value="T9">Th??ng 9</option>
                        <option value="T10">Th??ng 10</option>
                        <option value="T11">Th??ng 11</option>
                        <option value="T12">Th??ng 12</option>
                    </select>
                    <button type="submit" style="padding: 3px 10px; border-radius: 5px;">L???c</button>
                </form>

                <form class="form-horizontal" action="statistic_result.php" method="GET" name="txt">
                    <h5 style="display: inline">S??? l?????ng b??n nhi???u nh???t theo </h5>
                    <select name="txt" style="display: inline">
                        <option value="0" selected="selected">Ch???n qu??</option>
                        <option value="Q1">Qu?? 1</option>
                        <option value="Q2">Qu?? 2</option>
                        <option value="Q3">Qu?? 3</option>
                        <option value="Q4">Qu?? 4</option>
                    </select>
                    <button type="submit" style="padding: 3px 10px; border-radius: 5px;">L???c</button>
                </form>
                <form class="form-horizontal" action="statistic_result.php" method="GET" name="txt">
                    <select name="txt">
                        <option value="" selected="selected">Ch???n n??m</option>
                        <option value="N2019">N??m 2019</option>
                        <option value="N2020">N??m 2020</option>
                        <option value="N2021">N??m 2021</option>
                    </select>
                    <button type="submit" style="padding: 3px 10px; border-radius: 5px;">L???c</button>
                </form>
                </form>
                <table cellspacing='0' border='1' id='MA_HD' align="center">
                    <tr align="center">
                        <th>M?? s???n ph???m</th>
                        <th>T??n s???n ph???m</th>
                        <th>Tr???ng th??i</th>
                        <th>M?? lo???i</th>
                        <th>S??? l?????ng b??n</th>
                    </tr>
                    <?php
                    foreach ($row as $tke) {
                    ?>
                        <tr align="center">
                            <td><?php echo $tke['MASP']; ?></td>
                            <td><?php echo $tke['TENSP']; ?></td>
                            <td><?php echo $tke['TRANGTHAI_SP']; ?></td>
                            <td><?php echo $tke['MALOAI']; ?></td>
                            <td><?php echo $tke['SOLUONG']; ?></td>
                        </tr>
                    <?php
                    }
                    ?> <?php
                    } ?>
                </table>
            </div>
            <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->

    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- APP JS -->
    <script src="<?php echo $level . js_path . "app.js" ?>"></script>

</body>

</html>