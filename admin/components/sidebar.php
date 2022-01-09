<div class="sidebar">
    <div class="sidebar-logo">
        <img src="<?php echo $level . img_path . "logo_nobackground.png" ?>" alt="Comapny logo" style="width:70%; height:max-content">
        <div class="sidebar-close" id="sidebar-close">
            <i class='bx bx-left-arrow-alt'></i>
        </div>
    </div>
    <div class="sidebar-user">
        <div class="sidebar-user-info">

            <div class="sidebar-user-name">
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
                //$var_dump($_SESSION['login']['ID_User']);
                 $data =$conenct->prepare("SELECT * FROM taikhoan where MATAIKHOAN = '".$_SESSION['login']['ID_User']."' ");
                 $data->execute();
                 $username = $data->fetchALL()[0]['USERNAME'];
                echo $username;
                ?>
            </div>
        </div>
        <a href="<?php echo $level.pages_path.'logout.php'?>">
            <button class="btn btn-outline">
                <i class='bx bx-log-out bx-flip-horizontal'></i>
            </button>
        </a>
    </div>
    <!-- SIDEBAR MENU -->
    <ul class="sidebar-menu">
        <li>
            <a href="<?php echo $level ?>" <?php if ($isIndex == true) { ?>class="active" <?php } ?>>
                <i class='bx bx-home'></i>
                <span>Tổng quan</span>
            </a>
        </li>
        <li class="sidebar-submenu ">
            <a href="#" class="sidebar-menu-dropdown ">
                <i class='bx bx-dollar-circle'></i>
                <span>Hoá đơn</span>
                <div class="dropdown-icon <?php if ($isBillList == true || $isUpdateBill) { ?> active <?php } ?>"></div>
            </a>
            <ul class="sidebar-menu sidebar-menu-dropdown-content <?php if ($isBillList == true || $isUpdateBill) { ?> active" style="height: 90px;" <?php } else echo "\"" ?>>
                <li>
                    <a href="<?php echo $level . pages_path . "billList.php"; ?>" <?php if ($isBillList == true) { ?> class="active" <?php } ?>>
                        Danh sách Hoá đơn
                    </a>
                </li>
                <li>
                    <a href="<?php echo $level . pages_path . "updateBill.php"; ?>" <?php if ($isUpdateBill == true) { ?> class="active" <?php } ?>>
                        Cập nhật Hoá đơn
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar-submenu ">
            <a href="#" class="sidebar-menu-dropdown ">
                <i class='bx bx-shopping-bag'></i>
                <span>Sản phẩm</span>
                <div class="dropdown-icon <?php if ($isProductList == true || $isAddProduct == true || $isUpdateProduct == true) {
                                                echo "active";
                                            } ?>"></div>
            </a>
            <ul class="sidebar-menu sidebar-menu-dropdown-content <?php if ($isProductList == true || $isAddProduct == true || $isUpdateProduct == true || $isProductListSearch == true) { ?> active" style="height: 135px;" <?php } else echo "\"" ?>>
                <li>
                    <a href="<?php echo $level . pages_path . "productList.php"; ?>" <?php if ($isProductList == true || $isProductListSearch == true) { ?> class="active" <?php } ?>>
                        Danh sách Sản Phẩm
                    </a>
                </li>
                <li>
                    <a href="<?php echo $level . pages_path . "addProduct.php"; ?>" <?php if ($isAddProduct == true) { ?> class="active" <?php } ?>>
                        Thêm sản phẩm
                    </a>
                </li>
                <li>
                    <a href="<?php echo $level . pages_path . "updateProduct.php"; ?>" <?php if ($isUpdateProduct == true) { ?> class="active" <?php } ?>>
                        Cập nhật Sản Phẩm
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar-submenu ">
            <a href="#" class="sidebar-menu-dropdown ">
                <i class='bx bx-category'></i>
                <span>Loại Sản Phẩm</span>
                <div class="dropdown-icon <?php if ($isCategoriesList == true || $isAddCategories == true || $isUpdateCategories == true) { ?> active <?php } ?>"></div>
            </a>
            <ul class="sidebar-menu sidebar-menu-dropdown-content <?php if ($isCategoriesList == true || $isAddCategories == true || $isUpdateCategories == true) { ?> active" style="height: 135px;" <?php } else echo "\"" ?>>
                <li>
                    <a href="<?php echo $level . pages_path . "categoriesList.php"; ?>" <?php if ($isCategoriesList == true) { ?>class="active" <?php } ?>>
                        Danh sách Loại Sản Phẩm
                    </a>
                </li>
                <li>
                    <a href="<?php echo $level . pages_path . "addCategories.php"; ?>" <?php if ($isAddCategories == true) { ?>class="active" <?php } ?>>
                        Thêm Loại sản phẩm
                    </a>
                </li>
                <li>
                    <a href="<?php echo $level . pages_path . "updateCategories.php"; ?>" <?php if ($isUpdateCategories == true) { ?>class="active" <?php } ?>>
                        Cập nhật loại Sản Phẩm
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar-submenu">
            <a href="#" class="sidebar-menu-dropdown">
                <i class='bx bx-user-circle'></i>
                <span>Quản lý tài khoản</span>
                <div class="dropdown-icon <?php if ($isAccountList == true || $isAddAccount == true || $isUpdateAccount == true) { ?> active" <?php } else echo "\"" ?>></div>
            </a>
            <ul class="sidebar-menu sidebar-menu-dropdown-content <?php if ($isAccountList == true || $isAddAccount == true || $isUpdateAccount == true) { ?> active" style="height: 135px;" <?php } else echo "\"" ?>>

                <li>
                    <a href="<?php echo $level . pages_path . "accountList.php"; ?>" <?php if ($isAccountList == true) { ?> class="active" <?php } ?>>
                        Danh sách tài khoản
                    </a>
                </li>
                <li>
                    <a href="<?php echo $level . pages_path . "addAccount.php"; ?>" <?php if ($isAddAccount == true) { ?> class="active" <?php } ?>>
                        Thêm tài khoản
                    </a>
                </li>
                <li>
                    <a href="<?php echo $level . pages_path . "updateAccount.php"; ?>" <?php if ($isUpdateAccount == true) { ?> class="active" <?php } ?>>
                        Cập nhật tài khoản
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?php echo $level . pages_path . "static.php"; ?>" <?php if ($isStatic == true||$isStatic_result == true) { ?> class="active" <?php } ?>>
                <i class='bx bx-chart'></i>
                <span>Thống kê</span>
            </a>
        </li>
        <!-- <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-category'></i>
                    <span>e-commerce</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="#">
                            list product
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            add product
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            orders
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-mail-send'></i>
                    <span>mail</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-chat'></i>
                    <span>chat</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-calendar'></i>
                    <span>calendar</span>
                </a>
            </li> -->
        <li class="sidebar-submenu">
            <a href="#" class="sidebar-menu-dropdown">
                <i class='bx bx-cog'></i>
                <span>Thiết đặt</span>
                <div class="dropdown-icon"></div>
            </a>
            <ul class="sidebar-menu sidebar-menu-dropdown-content">
                <li>
                    <a href="#" class="darkmode-toggle" id="darkmode-toggle">
                        Chế độ Ban Đêm
                        <span class="darkmode-switch"></span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- END SIDEBAR MENU -->
</div>