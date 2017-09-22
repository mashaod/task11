<?php

class MyTest
{
    private $mySql;
    private $key;
    private $data;
    private $find;

    
    public function __construct()
    {
        $this->mySql = new MySql();
    }

    public function setKey($key)
    {
    	if(!empty($key))
    		$this->key = $key;
    }

    public function setData($data)
    {
    	if(!empty($data))
    		$this->data = $data;
    }
  
    public function find($key)
    {
        $result = $this->mySql->select('data')->from('MY_TEST')->whereOrOn('key', $key)->exec();
        $data = mysql_fetch_row($result);
        $this->find = $key;       
        return $data[0];
    } 

    public function delete()
    {
        $result = $this->mySql->delete('MY_TEST')->whereOrOn('key', 'user_01')->exec();
        return "Data deleted";
    } 

    public function save()
    {
    	if($this->find)
    	{
    		if($this->find($this->find))
    		{
    			$this->mySql->update('MY_TEST')->set('data', $this->data)->whereOrOn('key', $this->find)->exec();
    			return "Data updated";
    		}
    		else
    			return "Data doesn't exist";
    	}
    	else
    	{
    		if(!$this->find($this->key))
    		{
    			$this->mySql->insert('MY_TEST','key','data')->values($this->key, $this->data)->exec();
    			return "Data inserted";
    		}
    		else
    			return "Data exist";
    	}
    }
}
