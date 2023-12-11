<?php

require_once __DIR__ . 'vendor/autoload.php';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/funcs.php';

use Telegram\Bot\Api;

$telegram = new Api(TOKEN);

$update = $telegram->getWebhookUpdate();

log_updates($update);