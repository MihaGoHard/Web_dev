<?
require_once('../src/common.inc.php'); 
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{ 
    searchUserData();
}
else
{  
    formPage('feedback.tpl.php');
}