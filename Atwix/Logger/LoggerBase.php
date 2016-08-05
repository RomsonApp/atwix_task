<?php
namespace Atwix\Logger;

abstract class LoggerBase implements ILogger
{
    abstract protected function _log($logLevel, $message, $line = NULL);

    public function info($message, $line = NULL)
    {
        $this->_log(__FUNCTION__, $message, $line);
    }

    public function warning($message, $line = NULL)
    {
        $this->_log(__FUNCTION__, $message, $line);
    }

    public function error($message, $line = NULL)
    {
        $this->_log(__FUNCTION__, $message, $line);
    }
}