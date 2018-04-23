<?php

use Longman\TelegramBot\Entities\ServerResponse;
use naffiq\telegram\channel\Manager;
use PHPUnit\Framework\TestCase;

class ManagerTest extends TestCase
{
    public function testPostMessage()
    {
        $apiToken = getenv('TELEGRAM_BOT_API_TOKEN');
        $channelName = getenv('TELEGRAM_CHANNEL_NAME');

        $manager = new Manager($apiToken, $channelName);

        $response = $manager->postMessage('Hello, world!');

        $this->assertInstanceOf(ServerResponse::class, $response);
        $this->assertTrue($response->ok);
    }

    public function testPostPhoto()
    {
        $apiToken = getenv('TELEGRAM_BOT_API_TOKEN');
        $channelName = getenv('TELEGRAM_CHANNEL_NAME');

        $manager = new Manager($apiToken, $channelName);

        $response = $manager->postPhoto(__DIR__ . '/photo.jpeg', 'Thats photo with label!');

        $this->assertInstanceOf(ServerResponse::class, $response);
        $this->assertTrue($response->ok);
    }
}
