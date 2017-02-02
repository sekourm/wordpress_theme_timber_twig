<?php

Timber::$dirname = 'views';

// Load the settings.
foreach (glob(__DIR__ .'/settings{/,/*/}*.php', GLOB_BRACE) as $filename) {
    require_once $filename;
}