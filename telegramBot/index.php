<?php
require_once('src/common.inc.php');

if (checkPostMethod())
{
    $chatId = getUserRequestParam(CHAT_ID);
    $userMessage = getUserRequestParam(USER_MESSAGE_ANSWER);
    $userButtonAnswer = getUserRequestParam( USER_BUTTON_ANSWER);

    if (sendedStart($userMessage))
    {
        checkChatInDb($chatId) ? resetButtons($chatId) : createNewChatInDb();
        createParamsSendKeyboard($chatId, START_KEYBOARD_TEXT, START_KEYBOARD);
        invertDbButtonState($chatId, SUBSCRIBE_BUTTON);
    }

    if (!checkCallback() && !sendedStart($userMessage))
    {
       if(checkChatInDb($chatId) && checkSubscribe($chatId))
       {
           createParamsSendKeyboard($chatId, WRONG_COMMAND_TEXT, UPDATE_DESCRIBE_KEYBOARD);
       }
       if(!checkChatInDb($chatId) || (checkChatInDb($chatId) && !checkSubscribe($chatId)))
       {
           createParamsSendMessage($chatId, DESCRIBE_MESSAGE_TEXT);
       }
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

    if (pressedTimeButton($userButtonAnswer) && isInStateOne($chatId, TIME_BUTTON))
    {
        setChatNoteTime($chatId, $userButtonAnswer);
        $setTimeMessage = makeSetTimeMessage($userButtonAnswer);
        createParamsSendKeyboard($chatId, $setTimeMessage, UPDATE_DESCRIBE_KEYBOARD);
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
}