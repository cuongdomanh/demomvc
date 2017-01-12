<?php

class Post_m extends database{
    protected $table="post";

    public function __construct()
    {
        parent:: __construct();
    }

    public function getAll(){
        $query = "select * from  ".$this->table;
        $rs = mysql_query($query, $this->conn);
        $result = array();
        while($row = mysql_fetch_array($rs)){
            $result[]=array(
                'id'    =>$row['id'],
                'content'=>$row['content']
            );
        }
        return $result;
    }
    public function insert($content){
        $query = "insert into   ".$this->table."(content) value('".$content."')";
        $rs = mysql_query($query, $this->conn);
        return $rs;
    }
}
?>