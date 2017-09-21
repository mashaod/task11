<?php

class MyTest
{
    public $dbMy;
    public $mySql;
   // public $sql;
    
    public function __construct()
    {
        $this->mySql = new MySql();

        $this->dbMy = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD_MY)
    		    or die ("<br/>Error MySQL");
        $connect = mysql_select_db('user1', $this->dbMy)
    		    or die ("<br/>Error DB");
    }
  
    public function find($key)
    {
        //  $sql = $this->mySql->select('data')->from('MY_TEST')->where('key', 'user')->exec();
        $sql = "SELECT * from `MY_TEST`";
        $result = mysql_query($sql, $this->dbMy);
        var_dump($result);
       // $result = mysql_query($sql, $this->dbMy);
      //  return $result;
    } 
}
