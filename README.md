# Telegram Channel PHP
[![Build Status](https://travis-ci.org/naffiq/telegram-channel-php.svg?branch=master)](https://travis-ci.org/naffiq/telegram-channel-php)
[![Code Climate](https://codeclimate.com/github/naffiq/telegram-channel-php/badges/gpa.svg)](https://codeclimate.com/github/naffiq/telegram-channel-php)
[![Test Coverage](https://codeclimate.com/github/naffiq/telegram-channel-php/badges/coverage.svg)](https://codeclimate.com/github/naffiq/telegram-channel-php/coverage)

This little lib (1 class only!) helps you to push messages to your telegram channel via bot.

## Installation

In order to install use composer:
```
$ composer require naffiq/telegram-channel-php
```

## Usage

1. Create bot via [BotFather](https://t.me/botfather) and get `BOT_TOKEN` from it
2. Add it as an admin to your channel
3. Initialize the lib provided as follows:

```php
<?php

$manager = new \naffiq\telegram\channel\Manager(BOT_TOKEN, CHANNEL_NAME);

$manager->postMessage('Hello, fellas!');

```
