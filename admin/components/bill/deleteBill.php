<?php  
     include_once('../database/db.php');

    $id=$_GET['id'];
    $r =$conenct->prepare("SELECT LOAIHD FROM hoadon WHERE MAHD = '".$id."'");
    $r->execute();
    $loaihd = $r->fetchAll()[0][0];
    var_dump($loaihd);
    $sql2 = " UPDATE hoadon SET TRANGTHAI_HD = 3 where MAHD = '".$id."' ";    
    $count = $result=$conenct->prepare($sql2);
    $result->execute();
    
    var_dump($count);
    
    $sql = "select SOLUONG, MA_SP from chitiet_hoadon where MAHD = '".$id."'";
    
    $sanpham = $connect->prepare($sql);
    $sanpham ->execute();
    $sanpham_row = $sanpham->fetchAll();
    var_dump($countsp);
    
    foreach ($sanpham_row as $sp){
        //$sqlsp ="";
        if($loaihd == 'X'){
            $sqlsp = "update sanpham SET TONKHO = TONKHO - ".$sp['SOLUONG']." WHERE MASP ='" . $sp['MA_SP'] . "' ";
        }
        else {
            $sqlsp = "update sanpham SET TONKHO = TONKHO + ".$sp['SOLUONG']." WHERE MASP ='" . $sp['MA_SP'] . "' ";
        }

        $update = $conenct->prepare($sqlsp);
        $update->execute();
        $countsp = $update->rowCount();
        
        
    }

    if ($count) { ?>
        <script>
            window.alert("Duyệt hoá đơn thành công");
            window.location = "../../pages/billList.php";
        </script>
    <?php
    } else { ?>
        <script>
            window.alert("<?php echo "Lỗi: " . $sql . "    " . $connect->error; ?>");
            window.location = "../../pages/billList.php";
        </script> <?php
                }; ?>
?>