<?
function getPOSTParameter(string $ident): ? string
{
    return isset($_POST[$ident]) ? (string)$_POST[$ident] : null;
}

