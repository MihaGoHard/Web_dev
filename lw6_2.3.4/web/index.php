<?
require_once('../src/common.inc.php'); 
$_POST ? updateUserData() : formPage('form.tpl.php');
