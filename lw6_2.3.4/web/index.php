<?
require_once('../src/common.inc.php');
if (checkPostMethod())
{
    updateUserData();
}
else
{
    renderTemplate('form.tpl.php');
}
