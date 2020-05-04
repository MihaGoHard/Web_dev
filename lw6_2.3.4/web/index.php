<?
require_once('../src/common.inc.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{ 
    updateUserData();
}
else
{  
    formPage('form.tpl.php');
}