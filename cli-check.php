<?php

function isCommandLineInterface(): bool
{
    if (defined('STDIN')) {
        return true;
    }

    if (PHP_SAPI === 'cli') {
        return true;
    }

    if (array_key_exists('SHELL', $_ENV)) {
        return true;
    }

    if (empty($_SERVER['REMOTE_ADDR']) && !isset($_SERVER['HTTP_USER_AGENT']) && count($_SERVER['argv']) > 0) {
        return true;
    }

    if (!array_key_exists('REQUEST_METHOD', $_SERVER)) {
        return true;
    }

    return false;
}

if (!isCommandLineInterface()) {
    exit('Please run this in the command line.');
}
