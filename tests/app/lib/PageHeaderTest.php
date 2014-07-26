<?php

namespace Transfluent\MobileApp\lib;

class PageHeaderTest extends \PHPUnit_Framework_TestCase
{
    private $header;
    
    protected function setUp()
    {
        $this->header = new PageHeader();
    }
    
    public function test_header_returns_transfluent_by_default()
    {
        $this->assertEquals('Transfluent', $this->header->__invoke(), 'If Header is not passed then the page Header is "Transfluent" by default');
    }
    
    public function test_passed_header_replaces_transfluent()
    {
        $this->assertEquals('My Cool Header', $this->header->__invoke('My Cool Header'), 'Any Page can contain seperate Header when passed');
    }
}
