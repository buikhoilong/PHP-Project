<?php include '../database/db.php'; 
$maTK=$_GET['id'];
        $taikhoan=$conenct->prepare("SELECT * FROM taikhoan where MATAIKHOAN = '". $maTK."'");
        $taikhoan ->bindValue(':maTK',$maTK,PDO::PARAM_STR);
        $taikhoan->execute();
        $taikhoan_rowsdata = $taikhoan->fetchALL();?>
    
    <style>
        .addForm {
            text-align: center;
            display: flex;
            justify-content: space-around;
            font-family: "Roboto", sans-serif;
            margin: 3% 35%;
            padding: 50px;
            background-color: #ffffff;
            border-radius: 20px;
        }

        .form-group {
            text-align: left;
        }

        .form-group label {
            font-weight: bold;
            text-align: left;
        }
        .form-group input {
            /* width: 100%; */
            align-self: center;
        }

        .button {
            padding: 5px 20px;
            border-radius: 7px;
        }

        .button:hover {
            color: #0652dd;
            border-color: #0652dd;
        }
    </style>
    <div class="addForm">
        <form action="<?php echo $level . comp_path . 'account/updateAccount_process.php' ?> " method="POST" enctype="multipart/form-data" style="">
            <div class="form-group">
                <label for="txtmatk">Mã Tài khoản</label> <br>
                <input type="text" name="txtmatk" hidden="true" value = "<?php echo $taikhoan_rowsdata[0]['MATAIKHOAN'];?>">
            </div>            
            <div class="form-group">
                <label for="txttentk">Tên đăng nhập</label> <br>
                <input type="numner_format" name="txttentk" value = "<?php echo $taikhoan_rowsdata[0]['USERNAME'];?>">
            </div>
            <div class="form-group">
                <label for="txtmatkhau">Mật khẩu</label> <br>
                <input type="password" name="txtmatkhau" value = "<?php echo $taikhoan_rowsdata[0]['PASSWORD'];?>">
            </div>
            <div class="form-group">
                <label for="txtemail">Email</label> <br>
                <input type="text" name="txtemail" value = "<?php echo $taikhoan_rowsdata[0]['EMAIL'];?>">
            </div>
            <div class="form-group">
                <label for="txttrangthai">Trạng thái</label> <br>
                <select name="txttrangthai">
                    <option value="0" <?php if($taikhoan_rowsdata[0]['TRANGTHAI_TK']=="0")  echo "selected = 'selected'";?> >Ngưng hoạt động</option>
                    <option value="1" <?php if($taikhoan_rowsdata[0]['TRANGTHAI_TK']=="1")  echo "selected = 'selected'";?>>Hoạt động</option>                    
                </select>
            </div>
            <div class="form-group">
                <label for="txtloaitk">Mã loại Tài khoản</label> <br>
                <select name="txtloaitk">
                    <option value="ADMIN" <?php if($taikhoan_rowsdata[0]['LOAI_TK']=="ADMIN")  echo "selected = 'selected'";?>>Quản trị viên</option>
                    <option value="NV" <?php if($taikhoan_rowsdata[0]['LOAI_TK']=="NV")  echo "selected = 'selected'";?>>Nhân viên</option>                                                      
                </select>
            </div>            
            <div class="form-group">
                <label for="txtmota">Mô tả Tài khoản</label> <br>
                <input type="text" name="txtmota" value = "<?php echo $taikhoan_rowsdata[0]['MOTA_TK'];?>">
            </div>

            <button class="button" type="submit"> Thêm </button>
            
        </form>
    </div>