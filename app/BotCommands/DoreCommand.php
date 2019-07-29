<?php

namespace App\BotCommands;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;
use Telegram\Bot\Laravel\Facades\Telegram;

class DoreCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = "dore";

    /**
     * @var string Command Description
     */
    protected $description = "dore Command to response you list amo in dore";

    /**
     * @inheritdoc
     */
    public function handle($arguments)
    {
        // This will send a message using `sendMessage` method behind the scenes to
        // the user/chat id who triggered this command.
        // `replyWith<Message|Photo|Audio|Video|Voice|Document|Sticker|Location|ChatAction>()` all the available methods are dynamically
        // handled when you replace `send<Method>` with `replyWith` and use the same parameters - except chat_id does NOT need to be included in the array.
//        $this->replyWithMessage(['text' => 'SaLaM bar to']);

//        $this->replyWithPhoto([
//            'photo' => resource_path('download.png'),
//            'caption' => '@eqtedarmeli'
//        ]);


        $this->replyWithMessage(['text' => "args: " . $arguments]);
//        $this->replyWithMessage(['text' => "id: " . $this->update->getMessage()->getChat()->getId()]);

        $keyboard = [
            ['7', '8', '9'],
            ['4', '5', '6'],
            ['1', '2', '3'],
            ['/salam mess 2']
        ];

        $reply_markup = Telegram::replyKeyboardMarkup([
            'keyboard' => $keyboard,
            'resize_keyboard' => true,
            'one_time_keyboard' => true
        ]);

//        $response = Telegram::sendMessage([
//            'chat_id' => $this->update->getMessage()->getChat()->getId(),
//            'text' => 'Hello World',
//            'reply_markup' => $reply_markup
//        ]);

        $response = $this->replyWithMessage([
            'chat_id' => $this->update->getMessage()->getChat()->getId(),
            'text' => 'Hello World',
            'reply_markup' => $reply_markup
        ]);

//        $messageId = $response->getMessageId();

        // This will update the chat status to typing...
//        $this->replyWithChatAction(['action' => Actions::TYPING]);

    }
}