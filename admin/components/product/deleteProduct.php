<?php
$level = "../";
include_once($level . "dbConnection.php");

$id = $_GET['id'];
$result = $conenct->prepare("DELETE from sanpham where MASP ='" . $id . "'");
if ($result->execute()) { ?>
    <script>
        window.location = "../../pages/product/productList.php";
        setTimeout(window.alert("Xoá thành công"), 1000);
    </script>
<?php
}
?>