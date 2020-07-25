<?php
function pressedSubscribe(string $userButtonAnswer): bool
{
    return $userButtonAnswer === SUBSCRIBE_BUTTON;
}

function pressedDescribe(string $userButtonAnswer): bool
{
    return $userButtonAnswer === DESCRIBE_BUTTON;
}

function pressedUpdate(string $userButtonAnswer): bool
{
    return $userButtonAnswer === UPDATE_BUTTON;
}

function pressedLookNow(string $userButtonAnswer): bool
{
    return $userButtonAnswer === LOOK_NOW_BUTTON;
}

function pressedLookOnce(string $userButtonAnswer): bool
{
    return $userButtonAnswer === LOOK_ONCE_BUTTON;
}

function pressedTimeButton(string $userButtonAnswer): bool
{
    return in_array($userButtonAnswer, TIME_ARR);
}

function sendedStart(string $userMessage): bool
{
    return $userMessage === START_COMMAND;
}