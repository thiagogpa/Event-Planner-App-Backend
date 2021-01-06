<?php
class Database{

    public $conn;

    // get the database connection
    public function getConnection(){

        $this->conn = null;

        try{
            $cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
            $cleardb_server   = $cleardb_url["host"];
            $cleardb_username = $cleardb_url["user"];
            $cleardb_password = $cleardb_url["pass"];
            $cleardb_db       = substr($cleardb_url["path"],1);

            $active_group = 'default';
            $query_builder = TRUE;
            
            $this->conn = new PDO("mysql:host=" . $cleardb_server . ";dbname=" . $cleardb_db, $cleardb_username, $cleardb_password);
            $this->conn->exec("set names utf8");
            
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
