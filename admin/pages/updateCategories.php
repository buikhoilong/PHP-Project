<?php
$level = "../";
include_once($level . "config.php");
include_once($level . "dbConnection.php");

$isIndex = false;
$isBillList = false;
$isUpdateBill = false;
$isProductList = false;
$isAddProduct = false;
$isProductListSearch = false;
$isUpdateProduct = false;
$isCategoriesList = false;
$isAddCategories = false;
$isUpdateCategories = true;
$isAccountList = false;
$isAddAccount = false;
$isUpdateAccount = false;
$isProductListSearch = false;
$isStatic = false;
$isStatic_result = false;
$isStatic = false;
$isStatic_result = false;

if ($id = $_GET['id'] != '') {
    include_once($level . "layout.php");
} else {
?>
    <script>
        window.location = "categoriesList.php";
        setTimeout(window.alert("Chưa chọn loại sản phẩm"), 1000);
    </script>
<?php
}
?>