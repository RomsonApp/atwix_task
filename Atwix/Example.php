<?php
namespace Atwix;

class Example
{
    protected $_names = array();

    public function __construct($names)
    {
        $this->setNames($names);
    }

    public function setNames($names)
    {
        $this->_names = $names;
    }

    public function getNames()
    {
        return $this->_names;
    }

    public function getSortedNames()
    {
        $names = $this->getNames();

        Sort::usort($names, Sort::SURNAME);

        $logger = Logger::getInstance();

        foreach ($names as $name) {
            $logger->info($name, __LINE__);
        }
        return $names;
    }

    public function renderNames()
    {
        return join(',', $this->getSortedNames());
    }
}