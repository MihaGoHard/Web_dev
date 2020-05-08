<?
function checkPostMethod(): bool
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}

function getPOSTParameter(string $ident): ? string
{
    return isset($_POST[$ident]) ? (string)$_POST[$ident] : null;
}

