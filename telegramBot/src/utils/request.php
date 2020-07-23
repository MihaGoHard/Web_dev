<?php
function checkPostMethod(): bool
{
    return ($_SERVER['REQUEST_METHOD'] === 'POST') ? true : false;
}

function checkCallback(): bool
{
    $requestArr = getUserRequestArr();
    return array_key_exists('callback_query', $requestArr) ? true : false;
}

function getUserRequestArr(): array
{
    $request = file_get_contents('php://input');
    $res = json_decode($request, 1);
    return $res;
}

function getUserRequestParam(string $param): string
{
    $request = getUserRequestArr();
    if (checkCallback())
    {
        if ($param === 'chat_id')
        {
            return $request['callback_query']['message']['chat']['id'];
        }
        if ($param === 'user_message')
        {
            return $request['callback_query']['message']['text'];
        }
        if (($param === 'user_button_answer') || ($param === 'time'))
        {
            return $request['callback_query']['data'];
        }
    }
    else
    {
        if ($param === 'chat_id')
        {
            return $request['message']['chat']['id'];
        }
        if ($param === 'user_message')
        {
            return $request['message']['text'];
        }
        if ($param === 'user_button_answer')
        {
            return 'mistace';
        }
    }
}



