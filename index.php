<?php
include('config.php');
include('lib/Sql.php');
include('lib/MySql.php');
include('lib/MyTest.php');

try
{
    if($_POST['Insert'])
    {
        $sqlInsert = $mySql->insert('MY_TEST','key','data')->values('User01', 'someText')->exec();
        $mySql->restartVal();
    }
    elseif($_POST['Update'])
    {
        $sqlUpdate = $mySql->update('MY_TEST')->set('data', 'newText')->where('key', 'User01')->exec();
        $mySql->restartVal();
    }
    elseif($_POST['Delete'])
    {
        $sqlDelete = $mySql->delete('MY_TEST')->where('key', 'User01')->exec();
        $mySql->restartVal();
    }  

$myTest = new MyTest();
    
$result = $myTest->find('User1');

   // $myTest->setKey('User01');
   // $myTest->setData('Task11');
   // $myTest->save();

   // $result = $mySql->select('data')->from('MY_TEST')->where('key', 'User01')->exec();
}
catch(Exception $error)
{
    $msgMy = $error->getMessage();
}

include('templates/index.php');
