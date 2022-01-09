<?php

	 $host_name='localhost';
	 $db_name='qly_ban_hang_linh_kien';
	 $user_name='root';
	 $password='root';
	 try{
		 $conenct = new PDO("mysql:host=$host_name;dbname=$db_name",$user_name,$password);
		 $conenct->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	 }
	 catch(PDOException $e)  {
		 echo $e->getMessage();
	 }

        $resultTK=$conenct->prepare("SELECT MAKH,TENKH, SDT_KH, DC_KH,EMAIL_KH FROM khachhang WHERE MAKH = '".$_SESSION['login']['ID_User']."' ");
        $resultTK->execute();
        $rowdataTK = $resultTK->fetchALL();        
    ?>
<div class="page-head_agile_info_w3l">

</div>

<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="<?php echo $level?>index.php">Trang Chủ</a>
						<i>|</i>
					</li>
                    <?php
                        foreach($rowdataTK as $MaTK)
                        {
                            ?>
                                <li>Thông tin Tài Khoản</li>
                            <?php
                        }
                    ?>
				</ul>
			</div>
		</div>
</div>

<style>

#tieude{
    text-align: center;
    width:100%;
    border: 1px solid black;
    border-collapse: collapse; 
    height:100px; 
}

table{
	width: 70%;	
	margin: 5% auto;
    margin-bottom:  10px;
}

tr{
    text-align: center;
    width:100%;
    border: 1px solid black;
    border-collapse: collapse; 
    height:50px; 
}

tr, th {
    text-align: center;

    width:16%;
    border: 1px solid black;
    border-collapse: collapse; 
    height:50px; 
}
tr ,td{
    text-align: center;
    width:16%;
    border: 1px solid black;
    border-collapse: collapse; 
    height:50px; 
}

.nut a{
    background-color: green;
        display: inline-block;
        color: whitesmoke;

        
        border-radius: 20px;
        padding: 10px 20px;
}
.nut{
    margin: 10px auto;
    text-align: center;
    margin-bottom: 5% ;
}



</style>

<div class="main">
    <table align="center" cellspacing='0' border='1' id = 'dsSanPham'>
        <tr align="center">
            <th>Tên Tài Khoản</th>
            <th>Số Điện Thoại</th>
            <th>Địa Chỉ</th>
            <th>Email</th>
        </tr>
        <?php 
        foreach ($rowdataTK as $tk)
            {
        ?>
                <tr align="center">
                    <td><?php echo $tk['TENKH'];?></td>
                    <td><?php echo $tk['SDT_KH'];?></td>
                    <td><?php echo $tk['DC_KH'];?></td>
                    <td><?php echo $tk['EMAIL_KH'];?></td>
                </tr>
        <?php
            }
        ?>
    </table>
    <div class="nut">
<a href="<?php echo $level.comp_path.'account/updateAccount.php?id='.$MaTK['MAKH'];?>">Thay Đổi Thông Tin</a>
</div>
</div>