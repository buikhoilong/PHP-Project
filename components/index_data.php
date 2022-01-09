<?php
    include "./db2.php";
    $listsp = DP::run_query("SELECT * from sanpham order by MASP desc",[],2);
?>