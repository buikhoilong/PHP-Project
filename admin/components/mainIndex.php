<div class="row">
    <div class="col-3 col-md-6 col-sm-12">
        <div class="box box-hover">
            <!-- COUNTER -->
            <div class="counter">
                <div class="counter-title">
                    tổng hoá đơn bán
                </div>
                <div class="counter-info">
                    <div class="counter-count">
                        <?php $host_name = 'localhost';
                        $db_name = 'qly_ban_hang_linh_kien';
                        $user_name = 'root';
                        $password = 'root';
                        try {
                            $conenct = new PDO("mysql:host=$host_name;dbname=$db_name", $user_name, $password);
                            $conenct->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        } catch (PDOException $e) {
                            echo $e->getMessage();
                        }
                        
                        $r = $conenct->prepare("Select sum(mahd) from hoadon where loaihd = 'X'");
                        $r->execute();
                        $d = $r->fetchAll();
                        $dd = $d[0][0];
                        echo $dd;

                        ?>
                    </div>
                    <i class='bx bx-shopping-bag'></i>
                </div>
            </div>
            <!-- END COUNTER -->
        </div>
    </div>
    <div class="col-3 col-md-6 col-sm-12">
        <div class="box box-hover">
            <!-- COUNTER -->
            <div class="counter">
                <div class="counter-title">
                    tỷ lệ hoành thành đơn
                </div>
                <div class="counter-info">
                    <div class="counter-count">
                        <?php 
                        $r = $conenct->prepare("Select mahd from hoadon where loaihd = 'X'");
                        $r->execute();                        
                        $d = $r->rowCount();
                        $r = $conenct->prepare("Select mahd from hoadon where loaihd = 'X' and TRANGTHAI_HD <> 0");
                        $r->execute();
                        $dd = $r->rowCount();
                        echo  ((float)$dd/(float)$d *100)."%";
                         ?>
                    </div>
                    <i class='bx bx-chat'></i>
                </div>
            </div>
            <!-- END COUNTER -->
        </div>
    </div>
    <div class="col-3 col-md-6 col-sm-12">
        <div class="box box-hover">
            <!-- COUNTER -->
            <div class="counter">
                <div class="counter-title">
                    tổng doanh thu
                </div>
                <div class="counter-info">
                    <div class="counter-count">
                   <?php $r = $conenct->prepare("Select sum(tongtien) from hoadon where loaihd = 'X'");
                        $r->execute();
                        $d = $r->fetchAll();
                        $dd = $d[0][0];
                        echo number_format($dd) . "đ";
                        ?>
                    </div>
                    <i class='bx bx-line-chart'></i>
                </div>
            </div>
            <!-- END COUNTER -->
        </div>
    </div>
    <div class="col-3 col-md-6 col-sm-12">
        <div class="box box-hover">
            <!-- COUNTER -->
            <div class="counter">
                <div class="counter-title">
                    tổng số lượng khách hàng
                </div>
                <div class="counter-info">
                    <div class="counter-count">
                    <?php $r = $conenct->prepare("Select makh from khachhang");
                        $r->execute();
                        $dd = $r->rowCount();
                        
                        echo number_format($dd);
                        ?>                    
                    </div>
                    <i class='bx bx-user'></i>
                </div>
            </div>
            <!-- END COUNTER -->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-3 col-md-6 col-sm-12">
        <!-- TOP PRODUCT -->
        <div class="box f-height">
            <div class="box-header">
                Mặt hàng tiêu biểu
            </div>
            <div class="box-body">
                <ul class="product-list">
                    <li class="product-list-item">
                        <div class="item-info">
                            <img src="./images/sp-GTX-1660OC-01.jpg" alt="product image">
                            <div class="item-name">
                                <div class="product-name">Card đồ họa GIGABYTE GeForce GTX 1660 OC 6G</div>
                                <div class="text-second">Card Màn Hình</div>
                            </div>
                        </div>
                        <div class="item-sale-info">
                            <div class="text-second">Doanh thu</div>
                            <div class="product-sales">51,160,000đ</div>
                        </div>
                    </li>
                    <li class="product-list-item">
                        <div class="item-info">
                            <img src="./images/sp-i9-10850KA-01.jpg" alt="product image">
                            <div class="item-name">
                                <div class="product-name">Intel Core i9 10850KA/20MB/3.6GHz/10 nhân 20 luồng/LGA 1200</div>
                                <div class="text-second">CPU</div>
                            </div>
                        </div>
                        <div class="item-sale-info">
                            <div class="text-second">Doanh thu</div>
                            <div class="product-sales">45,560,000đ</div>
                        </div>
                    </li>
                    <li class="product-list-item">
                        <div class="item-info">
                            <img src="./images/sp-Dominator-01.png" alt="product image">
                            <div class="item-name">
                                <div class="product-name">Corsair Dominator Platinum RGB CL16-18-18-36 16G DDR4 2x8G 3200</div>
                                <div class="text-second">RAM</div>
                            </div>
                        </div>
                        <div class="item-sale-info">
                            <div class="text-second">Doanh thu</div>
                            <div class="product-sales">40,900,000đ</div>
                        </div>
                    </li>
                    <li class="product-list-item">
                        <div class="item-info">
                            <img src="./images/sp-970EvoPlus.jpg" alt="product image">
                            <div class="item-name">
                                <div class="product-name">SSD Samsung 970 Evo Plus 250GB M.2 NVMe</div>
                                <div class="text-second">SSD M.2 NVMe</div>
                            </div>
                        </div>
                        <div class="item-sale-info">
                            <div class="text-second">Doanh thu</div>
                            <div class="product-sales">39,800,000đ</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- TOP PRODUCT -->
    </div>
    <div class="col-4 col-md-6 col-sm-12">
        <!-- CATEGORY CHART -->
        <div class="box f-height">
            <div class="box-body">
                <div id="category-chart"></div>
            </div>
        </div>
        <!-- END CATEGORY CHART -->
    </div>
    <div class="col-5 col-md-12 col-sm-12">
        
    </div>
</div>