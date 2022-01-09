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
                        <option value="" selected="selected">Chọn tháng</option>
                        <option value="T1">Tháng 1</option>
                        <option value="T2">Tháng 2</option>
                        <option value="T3">Tháng 3</option>
                        <option value="T4">Tháng 4</option>
                        <option value="T5">Tháng 5</option>
                        <option value="T6">Tháng 6</option>
                        <option value="T7">Tháng 7</option>
                        <option value="T8">Tháng 8</option>
                        <option value="T9">Tháng 9</option>
                        <option value="T10">Tháng 10</option>
                        <option value="T11">Tháng 11</option>
                        <option value="T12">Tháng 12</option>
                    </select>
                    <button type="submit" style="padding: 3px 10px; border-radius: 5px;">Lọc</button>
                </form>

                <form class="form-horizontal" action="statistic_result.php" method="GET" name="txt">
                    <h5 style="display: inline">Số lượng bán nhiều nhất theo </h5>
                    <select name="txt" style="display: inline">
                        <option value="0" selected="selected">Chọn quý</option>
                        <option value="Q1">Quý 1</option>
                        <option value="Q2">Quý 2</option>
                        <option value="Q3">Quý 3</option>
                        <option value="Q4">Quý 4</option>
                    </select>
                    <button type="submit" style="padding: 3px 10px; border-radius: 5px;">Lọc</button>
                </form>
                <form class="form-horizontal" action="statistic_result.php" method="GET" name="txt">
                    <select name="txt">
                        <option value="" selected="selected">Chọn năm</option>
                        <option value="N2019">Năm 2019</option>
                        <option value="N2020">Năm 2020</option>
                        <option value="N2021">Năm 2021</option>
                    </select>
                    <button type="submit" style="padding: 3px 10px; border-radius: 5px;">Lọc</button>
                </form>
                </form>
                <table cellspacing='0' border='1' id='MA_HD' align="center">
                    <tr align="center">
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Trạng thái</th>
                        <th>Mã loại</th>
                        <th>Số lượng bán</th>
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
                        <option value="" selected="selected">Chọn tháng</option>
                        <option value="T1">Tháng 1</option>
                        <option value="T2">Tháng 2</option>
                        <option value="T3">Tháng 3</option>
                        <option value="T4">Tháng 4</option>
                        <option value="T5">Tháng 5</option>
                        <option value="T6">Tháng 6</option>
                        <option value="T7">Tháng 7</option>
                        <option value="T8">Tháng 8</option>
                        <option value="T9">Tháng 9</option>
                        <option value="T10">Tháng 10</option>
                        <option value="T11">Tháng 11</option>
                        <option value="T12">Tháng 12</option>
                    </select>
                    <button type="submit" style="padding: 3px 10px; border-radius: 5px;">Lọc</button>
                </form>

                <form class="form-horizontal" action="statistic_result.php" method="GET" name="txt">
                    <h5 style="display: inline">Số lượng bán nhiều nhất theo </h5>
                    <select name="txt" style="display: inline">
                        <option value="0" selected="selected">Chọn quý</option>
                        <option value="Q1">Quý 1</option>
                        <option value="Q2">Quý 2</option>
                        <option value="Q3">Quý 3</option>
                        <option value="Q4">Quý 4</option>
                    </select>
                    <button type="submit" style="padding: 3px 10px; border-radius: 5px;">Lọc</button>
                </form>
                <form class="form-horizontal" action="statistic_result.php" method="GET" name="txt">
                    <select name="txt">
                        <option value="" selected="selected">Chọn năm</option>
                        <option value="N2019">Năm 2019</option>
                        <option value="N2020">Năm 2020</option>
                        <option value="N2021">Năm 2021</option>
                    </select>
                    <button type="submit" style="padding: 3px 10px; border-radius: 5px;">Lọc</button>
                </form>
                </form>
                <table cellspacing='0' border='1' id='MA_HD' align="center">
                    <tr align="center">
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Trạng thái</th>
                        <th>Mã loại</th>
                        <th>Số lượng bán</th>
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