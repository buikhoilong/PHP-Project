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
?>	