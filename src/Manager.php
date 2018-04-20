<?php

namespace naffiq\telegram\channel;

use Longman\TelegramBot\Request;
use Longman\TelegramBot\Telegram;

/**
 * Class that makes the magic happen!
 */
class Manager {
    /**
     * @var string bot api key, given by `@BotFather`
     */
    private $botApiKey;

    /**
     * @var string
     */
    private $botName;

    /**
     * @var string channel name
     */
    private $channelName;

    /**
     * @var Telegram telegram bot client instance
     */
    private $telegramClient;

    /**
     * Channel manager constructor
     * 
     * @var string $botApiKey
     * @var string $channelName
     * @var string|null $botName
     */
    function __construct($botApiKey, $channelName, $botName = null)
    {
        $this->botApiKey = $botApiKey;
        $this->channelName = $channelName;
        $this->botName = $botName;

        $this->telegramClient = new Telegram($this->botApiKey);
    }

    /**
     * Send message to your telegram channel
     *
     * @var string $message
     * @var string|null $attachmentPath
     */
    public function postMessage($message, $attachmentPath = null)
    {
        return Request::sendMessage([
            'chat_id' => $this->channelName,
            'text' => $message
        ]);
    }

    /**
     * Send photo to your telegram channel
     *
     * @var string $photoPath
     */
    public function postPhoto($photoPath,$caption=NULL)
    {
        return Request::sendPhoto([
            'chat_id' => $this->channelName,
            'photo'   => Request::encodeFile($photoPath),
            'caption' => $caption
        ]);
    }
}
