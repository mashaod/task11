<?php
include('config.php');
include('lib/Sql.php');
include('lib/MySql.php');
include('lib/MyTest.php');

try
{
    $msgMy;

    if($_POST['insert'])
    {
        $myTest = new MyTest();
        $myTest->setKey('user_01');
        $myTest->setData('some_text');
        $msgMy = $myTest->save();
    }
    elseif($_POST['update'])
    {
        $myTest = new MyTest();
        $myTest->find('user_01');
        $myTest->setData('new_text');
        $msgMy = $myTest->save();
    }
    elseif($_POST['delete'])
    {
        $myTest = new MyTest();
        $myTest->find('user_01');
        $msgMy = $myTest->delete();
    }  

    $myTest = new MyTest();
    $result = $myTest->find('user_01');

    !$result?$result = "No Data":true;
}
catch(Exception $error)
{
    $msgMy = $error->getMessage();
}

include('templates/index.php');
