<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});

$botman->hears('こんにちは', function ($bot) {
    $bot->reply('こんにちは！');
});

$botman->hears('私の名は', function ($bot) {
    $bot->reply('秋山さん');
});

$botman->hears('Start conversation', BotManController::class.'@startConversation');
