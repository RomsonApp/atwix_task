<?php
namespace Atwix\Logger;

interface ILogger
{
    public function info($message, $line = NULL);

    public function warning($message, $line = NULL);

    public function error($message, $line = NULL);
}