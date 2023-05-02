#!/usr/bin/env php
<?php

// (A) COMMAND LINE ONLY
require_once 'cli-check.php';

// (B) SETTINGS
const CYCLE_PAUSE = 5; // Wait 5s between cycles

// (C) RUN - INFINITE LOOP
while (true) {
    echo 'It works!' . PHP_EOL;

    sleep(CYCLE_PAUSE);
}
