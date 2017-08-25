<?php 

if (implode(DIRECTORY_SEPARATOR, [__DIR__, '..', '.env'])) {
    $dotenv = new Dotenv\Dotenv(__DIR__ . DIRECTORY_SEPARATOR . '..');
    $dotenv->load();
}

require(implode(DIRECTORY_SEPARATOR, [__DIR__, '..', 'vendor', 'autoload.php']));