<?php include('../config.php') ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
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
        ?> | Quản Trị Viên
    </title>
    <link rel="shortcut icon" href="<?php echo $level . img_path . "logo-mb.png" ?>" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $level . css_path . "grid.css" ?>">
    <link rel="stylesheet" href="<?php echo $level . css_path . "app.css" ?>">
</head>