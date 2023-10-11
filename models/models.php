<?php 
    require_once "./config.php";

    class Model {

        public $table;

        function connectdb(){
            global $dbserver, $dbuser, $dbpass, $dbname;
            if($conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname))
                return $conn;
            die("Kết nối không thành công");
            return;
        }
    
        function getAll($limit = 10, $start = 0){
            $sql = "select * from {$this->table} order by id desc limit $start,$limit";
            $conn = $this->connectdb();
            $rs = mysqli_query($conn, $sql);
            if(mysqli_num_rows($rs)>0)
                return $rs;
            return null;
        }
    
        function getById( $id){
            $sql = "select * from {$this->table} where id = $id";
            $conn = $this->connectdb();
            $rs = mysqli_query($conn, $sql);
            if(mysqli_num_rows($rs)>0)
                return mysqli_fetch_array($rs);
            return null;
        }
    
        function insert( $data){
            $fields = implode(',',array_keys($data));
            $values = implode("','",$data);
            $values= "'".$values;
            $values.="'";		
            $sql = "insert into {{$this->table}}({$fields}) values({$values})";
            return mysqli_query(connectdb(),$sql);
        }
        function update( $data){
            $sql = "update {$this->table} set ";
            $id = $data["id"];
            foreach($data as $field => $value){
                $sql.=" $field = '$value',";
            }
            $sql[strlen($sql)-1] =" ";
            $sql.=" where id = $id";
            return mysqli_query(connectdb(),$sql);
        }
    
        function delete($id){
            $sql = "delete from {$this->table} where id = $id";
            return mysqli_query(connectdb(),$sql);
        }
    
        function exe_query($sql){
            return mysqli_query(connectdb(),$sql);
        }

    }
?>