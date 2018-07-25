<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});

$botman->hears('こんにちは', function ($bot) {
    $bot->reply('こんにちは！');
});

$botman->hears('Start conversation', BotManController::class.'@startConversation');
