<?php 
    $level = "../";
    include 'database/db.php';
    //Nếu không phải là sự kiện đăng ký thì không xử lý
    if(isset($_POST['Tendangnhap'])){
        exit("Đăng kí thất bại");// hoặc dùng hàm die("Thất bại");
    }

    $tenDangNhap = $_POST['txttendangnhap'];
    $email = $_POST['txtemail'];
    $matKhau = $_POST['txtmatkhau'];
    $xacNhanMatkhau = $_POST['txtxacnhanmatkhau'];
    //kiểm tra nhập dữ liệu
    if(!$tenDangNhap||!$email||!$matKhau)
    {
        echo "Vui lòng nhập đầy đủ thông tin.";
        exit();
    }
    //hàm mã hóa mật khẩu
    //$matKhau=md5($matKhau);
    //$xacNhanMatkhau=md5($xacNhanMatkhau);
    //kiểm tra tồn tại
    $result1 = $conenct ->prepare("SELECT USERNAME FROM taikhoan WHERE USERNAME =:tenDangNhap ");
    $result1->bindValue(':tenDangNhap',$tenDangNhap,PDO::PARAM_STR);
    $result1->execute();
    $count1=$result1->rowCount();
    if($count1>1)
    {
        echo 'Tên đăng nhập tồn tại. Vui lòng chọn tên khác.';
        exit();
    }
    
    $result2= $conenct ->prepare("SELECT EMAIL FROM taikhoan WHERE EMAIL = :email");
    $result2->bindValue(':email',$email,PDO::PARAM_STR);
    $result2->execute();
    $count2=$result2->rowCount();
    if($count2>1)
    {
        echo 'Email đã có người sử dụng. Vui lòng chọn Email khác.';
        exit();
    }
    if($matKhau!=$xacNhanMatkhau){
        echo 'Mật khẩu không trùng khớp. Vui lòng nhập lại.';
        exit();
    }
    // thêm câu insert cho bảng khách hàng : email,
    $result3= $conenct ->prepare("INSERT  INTO khachhang (EMAIL_KH) VALUES (:email)");
    $result3->bindValue(':email',$email,PDO::PARAM_STR);
    $result3->execute();
    // lấy mã khách hàng của email vừa tạo
    $result4= $conenct ->prepare("SELECT MAKH FROM khachhang WHERE EMAIL_KH = :email");
    $result4->bindValue(':email',$email,PDO::PARAM_STR);
    $result4->execute();
    $result4_row = $result4->fetchALL();
    $maTK = $result4_row[0][0];
    // insert mã tài khoản vào bảng mã khách hàng. (mã tài khoản trong tài khoản = với mã kh trong bảng khách hàng)
    // 
    if($result=$conenct->prepare(" INSERT INTO taikhoan (MATAIKHOAN,USERNAME,PASSWORD,EMAIL,TRANGTHAI_TK,LOAI_TK) VALUES ('".$maTK."',:tenDangNhap, :matKhau, :email,1,KH)"))
    {
        echo 'Đăng kí thành công';
    }else{
        echo 'Thất bại';
    }
    $result->bindValue(':maTK',$maTK,PDO::PARAM_STR);
    $result->bindValue(':tenDangNhap',$tenDangNhap,PDO::PARAM_STR);
    $result->bindValue(':matKhau',$matKhau,PDO::PARAM_STR);
    $result->bindValue(':email',$email,PDO::PARAM_STR);
    $result->execute();
?>
