<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\EqtedarCommands\StartCommand;
use Illuminate\Support\Facades\Route;
use Telegram\Bot\Api;
use Telegram\Bot\Commands\HelpCommand;
use Telegram\Bot\Laravel\Facades\Telegram;

Route::get('/', function () {
    return view('welcome');
});

Route::any('/test', function (){
//    Telegram::sendPhoto(['chat_id' => '146541735', 'photo' => resource_path('download.png')]);
//    file_put_contents(public_path('has'), 'has');

        $text = Telegram::commandsHandler(true)->getMessage()->getText();

//        if(!empty($text)){
//            Telegram::sendMessage([
//                'text' => $text,
//                'chat_id' => '146541735'
//            ]);
//        }
//        $telegram
////            ->setAsyncRequest(true)
//            ->sendPhoto(['chat_id' => '146541735', 'photo' => resource_path('download.png')]);
//        return $telegram->getMe();
        return $text;
        return 'this is a test';
});
