<?php
function sendMessage(array $params)
{
    $urlSendMessage = 'https://api.telegram.org/bot' . TOKEN . '/sendMessage?' . http_build_query($params);
    file_get_contents($urlSendMessage);
}

function createParamsSendKeyboard(string $chatId, string $text, array $keyboard)
{
    $keyboard = json_encode($keyboard);
    $params = [
        'chat_id' => $chatId,
        'text' => $text,
        'reply_markup' => $keyboard
    ];
    sendMessage($params);
}

function createParamsSendMessage(string $chatId, string $text)
{
    $params = [
        'chat_id' => $chatId,
        'text' => $text
    ];
    sendMessage($params);
}

function sendInfoToUsers()
{
    $recordsNum = countRecordsInDb();
    $mainInfo = getFuturesInfo();
    $currHour = getSyncHour();
    for($count = 1; $count < $recordsNum; $count += 10)
    {
        $chatId = takeChatIdFromDb($count);
        if (checkSubscribe($chatId))
        {
            $userInfoTime = (int)getNoteTime($chatId);
            if ($userInfoTime == $currHour)
            {
                createParamsSendKeyboard($chatId, $mainInfo, UPDATE_DESCRIBE_KEYBOARD);
            }
        }
    }
}

function testSending()
{
    $recordsNum = countRecordsInDb();
    $mainInfo = getFuturesInfo();
    $currHour = getSyncHour();
    for($count = 1; $count < $recordsNum; $count += 10)
    {
        $chatId = takeChatIdFromDb($count);
        if (checkSubscribe($chatId))
        {
            $userInfoTime = (int)getNoteTime($chatId);
            $test_info = $currHour . ' ' . $userInfoTime;
            createParamsSendKeyboard($chatId, $test_info, UPDATE_DESCRIBE_KEYBOARD);
        }
    }
}
