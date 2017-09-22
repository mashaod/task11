<?php
Class MySql extends Sql
{
    public $dbMy;
    
    public function __construct()
    {
        $this->dbMy = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD_MY)
    		or die ("<br/>Error MySQL");
        $connect = mysql_select_db('user1', $this->dbMy)
    		or die ("<br/>Error DB");
    }

    public function exec()
    {
         parent::exec();
        
         $result = mysql_query($this->data['sql'], $this->dbMy);

         if(isset($result) && !empty($result))
             return $result;
         else
             throw new Exception("Wrong values");
    }
}
?>
