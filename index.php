<?php
require_once 'vendor/autoload.php';

use Telegram\Bot\Api;

$token = '6807989948:AAG-GQbh0FG3ah9Nkmv-Iki-I31ZUWQV7EM';

$telegram = new Api($token);

$update = $telegram->getWebhookUpdate();

$chatId = $update->getMessage()->getChat()->getId();

$response = $telegram->sendMessage([
    'chat_id' => $chatId,
    'text' => 'Привет, это ваш первый телеграм-бот на Telegram Bot SDK for PHP!'
]);

print_r($response);
