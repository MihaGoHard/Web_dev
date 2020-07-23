<?php
require_once('src/common.inc.php');

if (checkPostMethod())
{
    $fullRequestArr = getUserRequestArr();
    $chatId = getUserRequestParam('chat_id');
    $userMessage = getUserRequestParam('user_message');
    $userButtonAnswer = getUserRequestParam( 'user_button_answer');

    if (sendedStart($userMessage))
    {
        checkChatInDb($chatId) ? resetButtons($chatId) : createNewChatInDb($fullRequestArr);
        createParamsSendKeyboard($chatId, START_KEYBOARD_TEXT, START_KEYBOARD);
        invertDbButtonState($chatId, SUBSCRIBE_BUTTON);
    }

    if (pressedSubscribe($userButtonAnswer) && isInStateOne($chatId, SUBSCRIBE_BUTTON))
    {
        createParamsSendKeyboard($chatId, TIME_KEYBOARD_TEXT, TIME_KEYBOARD);
        invertDbButtonState($chatId, TIME_BUTTON);
        invertDbButtonState($chatId, SUBSCRIBE_BUTTON);
    }

    if (pressedLookOnce($userButtonAnswer) && !isInStateOne($chatId, TIME_BUTTON) && !checkSubscribe($chatId))
    {
        $mainInfo = getFuturesInfo();
        createParamsSendKeyboard($chatId, $mainInfo, START_KEYBOARD);
    }

    if (pressedLookNow($userButtonAnswer) && !isInStateOne($chatId, DESCRIBE_BUTTON) && !isInStateOne($chatId, TIME_BUTTON))
    {
        $mainInfo = getFuturesInfo();
        createParamsSendKeyboard($chatId, $mainInfo, UPDATE_DESCRIBE_KEYBOARD);
    }

    if (in_array($userButtonAnswer, TIME_ARR) && isInStateOne($chatId, TIME_BUTTON))
    {
        setChatNoteTime($chatId, $userButtonAnswer);
        $nodeMessageText = 'ИНФОРМАЦИЯ ПОСТУПИТ В ' . $userButtonAnswer . ':00';
        createParamsSendKeyboard($chatId, $nodeMessageText, UPDATE_DESCRIBE_KEYBOARD);
        invertDbButtonState($chatId, TIME_BUTTON);
    }

    if (pressedUpdate($userButtonAnswer) && !isInStateOne($chatId, DESCRIBE_BUTTON))
    {
        createParamsSendKeyboard($chatId, TIME_KEYBOARD_TEXT, TIME_KEYBOARD);
        resetButtons($chatId);
        invertDbButtonState($chatId, TIME_BUTTON);
    }

    if (pressedDescribe($userButtonAnswer) && !isInStateOne($chatId, DESCRIBE_BUTTON))
    {
        createParamsSendMessage($chatId, DESCRIBE_MESSAGE_TEXT);
        invertDbButtonState($chatId, DESCRIBE_BUTTON);
        throwChatNoteTime($chatId);
    }

    exit();
}