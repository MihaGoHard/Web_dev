<?php
function sendMessage(array $params)
{
    $urlSendMessage = TELEGRAM_URL_WITHOUT_PARAMS . http_build_query($params);
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

function makeSetTimeMessage(int $userInstalledTime): string
{
    return 'Иофрмация поступит в ' . $userInstalledTime . ':00';
}

function sendInfoToUsers()
{
    $recordsNum = countRecordsInDb();
    $mainInfo = getFuturesInfo();
    $currHour = getSyncHour();
    for($count = 1; $count <= $recordsNum; $count += AUTOINCREMENT_OFFSET)
    {
        $chatId = takeChatIdFromDb($count);
        if (checkSubscribe($chatId))
        {
            $userInfoTime = (int)getNoteTime($chatId);
            if ($userInfoTime === $currHour)
            {
                createParamsSendKeyboard($chatId, $mainInfo, UPDATE_DESCRIBE_KEYBOARD);
            }
        }
    }
}