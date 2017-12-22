<?php
include 'Config.php';

  $_SESSION['c']=2;
class Database {
    public $db_name=Db_name;
    public $user=user;
    public $password=pass;
    public $host=host;
    public $error;
    public $connection;
    public function __construct() {
        $this->connection=new mysqli($this->host, $this->user, $this->password, $this->db_name);
        if($this->connection){
            return TRUE;
            
        } else {
            $this->error="Connection error".$this->connection->connect_error;
            return FALSE;
            
        }
    }
    public function connection(){
               $this->connection=new mysqli($this->host, $this->user, $this->password, $this->db_name);
        if($this->connection){
            return TRUE;
            
        } else {
            $this->error="Connection error".$this->connection->connect_error;
            return FALSE;
            
        }
    }

    public function insert($query){
        $result=$this->connection->query($query)or die($this->connection->error.__LINE__);
        if($result){
            return $result;
        } else {
            return FALSE;
            
        }
    }
    public function select($query){
        $result=$this->connection->query($query) or die($this->connection->error.__LINE__);
        if($result->num_rows>0){
            return $result;
        } else {
            return FALSE;
            
        }
    }
       public function update($query){
        $result=$this->connection->query($query) or die($this->connection->error.__LINE__);
        if($result){
            return $result;
        } else {
            return FALSE;
            
        }
    }

     
    public static function getin(){
     
        return ;
    }
}
