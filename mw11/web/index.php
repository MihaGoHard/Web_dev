<?php
require_once('../src/common.inc.php');
if (checkPostMethod())
{
    validateUserData();
}
else
{
    renderTemplate('form.tpl.php');
}
