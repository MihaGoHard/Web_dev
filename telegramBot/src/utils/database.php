<?php
function database(): PDO
{
    try
    {
        static $connection = null;
        if ($connection === null) {
            $connection = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
        }
        return $connection;
    }
    catch (PDOException $Exception)
    {
        $chatId = getUserRequestParam(CHAT_ID);
        createParamsSendMessage($chatId, DB_MISTAKE_TEXT);
        exit();
    }
}

function checkChatInDb(int $chatId): bool
{
    $pdo = database();
    $chatId = $pdo->quote($chatId);
    $response = $pdo->query("SELECT start_time FROM chat_info WHERE chat_id = ${chatId}");
    $response = $response->fetchAll();
    return $response != null;
}

function createNewChatInDb()
{
    $pdo = database();
    $chatId = $pdo->quote(getUserRequestParam('chat_id'));
    $pdo->query("INSERT INTO chat_info (chat_id, start_time, subscribe_button, describe_button, time_button, update_button)
                          VALUES (${chatId}, '-1', '0', '0', '0', '0')");
}

function checkSubscribe(string $chatId): bool
{
    $pdo = database();
    $value = $pdo->query("SELECT start_time FROM chat_info WHERE chat_id = ${chatId}");
    $value = $value->fetch(PDO::FETCH_ASSOC);
    $value = (int)$value['start_time'];
    return $value === -1 ? false : true;
}

function setChatNoteTime(string $chatId, int $startTime)
{
    $pdo = database();
    $pdo->query("UPDATE chat_info SET start_time = '${startTime}' WHERE chat_id = ${chatId}");
}

function throwChatNoteTime(string $chatId)
{
    $pdo = database();
    $pdo->query("UPDATE chat_info SET start_time = '-1' WHERE chat_id = ${chatId}");
}

function getNoteTime(string $chatId): int
{
    $pdo = database();
    $value = $pdo->query("SELECT start_time FROM chat_info WHERE chat_id = ${chatId}");
    $value = $value->fetch(PDO::FETCH_ASSOC);
    return (int)$value['start_time'];
}

function countRecordsInDb(): int
{
    $pdo = database();
    $res = $pdo->query("SELECT COUNT(*) FROM chat_info");
    $res = $res->fetch(PDO::FETCH_ASSOC);
    $res = (int)$res['COUNT(*)'];
    return ($res > 1) ? ($res * AUTOINCREMENT_OFFSET) : $res;
}

function takeChatIdFromDb(int $count): int
{
    $pdo = database();
    $res = $pdo->query("SELECT chat_id FROM chat_info WHERE main_id = ${count}");
    $res = $res->fetch(PDO::FETCH_ASSOC);
    return (int)$res['chat_id'];
}

function isInStateOne(string $chatId, string $buttonName): bool
{
    $pdo = database();
    $value = $pdo->query("SELECT ${buttonName} FROM chat_info WHERE chat_id = ${chatId}");
    $value = $value->fetch(PDO::FETCH_ASSOC);
    return (int)$value[$buttonName] === 1;
}

function invertDbButtonState(string $chatId, string $buttonName)
{
    $pdo = database();
    $oldValue = $pdo->query("SELECT ${buttonName} FROM chat_info WHERE chat_id = ${chatId}");
    $oldValue = $oldValue->fetch(PDO::FETCH_ASSOC);
    if ((int)$oldValue[$buttonName] === 0)
    {
        $pdo->query("UPDATE chat_info SET ${buttonName} = '1' WHERE chat_id = ${chatId}");
    }
    if ((int)$oldValue[$buttonName] === 1)
    {
        $pdo->query("UPDATE chat_info SET ${buttonName} = '0' WHERE chat_id = ${chatId}");
    }
}

function resetButtons(string $chatId)
{
    $pdo = database();
    $pdo->query("UPDATE chat_info SET start_time = '-1', subscribe_button = '0',describe_button = '0',
                         time_button = '0', update_button = '0' WHERE chat_id = ${chatId}");
}