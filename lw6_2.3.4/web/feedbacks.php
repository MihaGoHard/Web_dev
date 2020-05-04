<?
require_once('../src/common.inc.php'); 
if (checkPostMethod())
{ 
    searchUserData();
}
else
{  
    renderTemplate('feedback.tpl.php');
}