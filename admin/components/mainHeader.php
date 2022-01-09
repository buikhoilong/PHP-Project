<div class="main-header">
    <div class="mobile-toggle" id="mobile-toggle">
        <i class='bx bx-menu-alt-right'></i>
    </div>
    <div class="main-title">
        <?php
        if ($isIndex == true) {
            echo "Tổng quan";
        }

        if ($isBillList == true) {
            echo "Danh Sách Hoá Đơn";
        }

        if ($isUpdateBill == true) {
            echo "Cập Nhật Hoá Đơn";
        }

        if ($isProductList == true) {
            echo "Danh Sách Sản Phẩm";
        }

        if ($isProductListSearch == true) {
            echo "Danh Sách Sản Phẩm";
        }

        if ($isAddProduct == true) {
            echo "Thêm Sản Phẩm";
        }

        if ($isUpdateProduct == true) {
            echo "Cập Nhật Sản Phẩm";
        }

        if ($isCategoriesList == true) {
            echo "Danh Sách Loại Sản Phẩm";
        }

        if ($isAddCategories == true) {
            echo "Thêm Loại Sản Phẩm";
        }

        if ($isUpdateCategories == true) {
            echo "Cập Nhật Loại Sản Phẩm";
        }

        if ($isAccountList == true) {
            echo "Danh Sách Tài Khoản";
        }

        if ($isAddAccount == true) {
            echo "Thêm Tài Khoản";
        }

        if ($isUpdateAccount == true) {
            echo "Cập Nhật Tài Khoản";
        }

        if($isStatic == true || $isStatic_result == true){
            echo "Thống kê sản phẩm bán chạy nhất";
        }
        ?>
    </div>
</div>