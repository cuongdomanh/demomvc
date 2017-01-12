<?php
class database {
    protected  $conn = null;
    public function __construct()
    {
        $this->conn = mysql_connect('localhost','root','');
        if(!$this->conn){
            die('can not connect to database ...!');
        }
        mysql_select_db('demomvc', $this->conn) or die('Could not select database.');
    }
}
?>