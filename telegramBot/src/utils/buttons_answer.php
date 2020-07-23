<?php
function pressedSubscribe(string $userButtonAnswer): bool
{
    return $userButtonAnswer === 'pressed_subscribe' ? true : false;
}

function pressedDescribe(string $userButtonAnswer): bool
{
    return $userButtonAnswer === 'dislike_describe' ? true : false;
}

function pressedUpdate(string $userButtonAnswer): bool
{
    return $userButtonAnswer === 'update_time' ? true : false;
}

function pressedLookNow(string $userButtonAnswer): bool
{
    return $userButtonAnswer === 'looking_now' ? true : false;
}

function pressedLookOnce(string $userButtonAnswer): bool
{
    return $userButtonAnswer === 'look_once' ? true : false;
}

function sendedStart(string $userMessage): bool
{
    return $userMessage === '/start' ? true : false;
}

