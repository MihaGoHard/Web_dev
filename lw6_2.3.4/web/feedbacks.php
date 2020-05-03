<?
require_once('../src/common.inc.php'); 
$_POST ? searchUserData() : formPage('feedback.tpl.php');