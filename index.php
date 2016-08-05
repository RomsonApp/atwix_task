<?php
use Atwix\Example;

require_once __DIR__ . "/vendor/autoload.php";

define('LOG_FILE', 'log.txt');

$names = array(
    'Tim  Wagner',
    'Yaroslav Rogoza',
    'Donald Trump',
    'Viacheslav Kravchuk',);

$example = new Example($names);

printf("<strong>Sorted List:</strong><p>%s</p>",
    $example->renderNames()
);

printf("<strong>%s:</strong><pre>%s</pre>",
    LOG_FILE,
    file_get_contents(LOG_FILE)
);
