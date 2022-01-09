
<?php
    class DP{
        private static function connect_DB(){
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "qly_ban_hang_linh_kien";
            try{
                $conn= new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4",$username,$password,
                array(
                    PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_PERSISTENT =>false,
                    PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
                )
            );
            return $conn;
            }
            catch(PDOException $e){
                echo '<script> alert("Error: '. $e->getMessage().'")</script>';
                return null;
            }
        }

        private static function get_type($var){
            switch(gettype($var)){
                case 'integer':return PDO::PARAM_INT;
                case 'text':return PDO::PARAM_STR_CHAR;
                case 'boolean': return PDO::PARAM_BOOL;
                case 'NULL': return PDO::PARAM_NULL;
                default: return PDO::PARAM_STR;
            }
        }

        public static function run_query($query, $paras,$type){
            try{
                $conn = DP::connect_DB();
                $h = $conn->prepare($query);
                foreach($paras as $key=>$para){
                    $h->bindValue($key +1, $para,DP::get_type($para));
                }
                $h ->execute();
                //$result;
                switch($type)
                {
                    case 1: $result = true; break;
                    case 2: $result = $h->fetchAll(); break;
                    case 3: $result = $conn->lastInsertId(); break;
                }
                $conn = NULL;
                return $result;
            }
            catch(PDOException $e){
                echo '<script> alert("Error: '. $e->getMessage().'")</script>';
                return null;
            }
        }
    }
?>	