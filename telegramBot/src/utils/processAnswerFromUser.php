<?php
function checkPostMethod(): bool
{
    return ($_SERVER['REQUEST_METHOD'] === 'POST');
}

function checkCallback(): bool
{
    $requestArr = getUserRequestArr();
    return array_key_exists('callback_query', $requestArr);
}

function getUserRequestArr(): array
{
    $request = file_get_contents('php://input');
    if ($request != null)
    {
        $res = json_decode($request, 1);
    }
    else
    {
        $res = [];
    }
    return $res ;
}

function getUserRequestParam(string $param): string
{
    $request = getUserRequestArr();
    if (checkCallback())
    {
        if ($param === CHAT_ID)
        {
            return $request['callback_query']['message']['chat']['id'];
        }
        if ($param === USER_MESSAGE_ANSWER)
        {
            return $request['callback_query']['message']['text'];
        }
        if (($param === USER_BUTTON_ANSWER) || ($param === 'time'))
        {
            return $request['callback_query']['data'];
        }
    }
    else
    {
        if ($param === CHAT_ID)
        {
            return $request['message']['chat']['id'];
        }
        if ($param === USER_MESSAGE_ANSWER)
        {
            return $request['message']['text'];
        }
        if ($param === USER_BUTTON_ANSWER)
        {
            return 'mistake';
        }
    }
}