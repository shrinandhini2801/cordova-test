<?php

namespace Transfluent\MobileApp\lib;

class TitleTest extends \PHPUnit_Framework_TestCase
{
    private $title;
    
    protected function setUp()
    {
        $this->title = new Title();
    }
    
    public function test_title_returns_transfluent_by_default()
    {
        $this->assertEquals('Transfluent', $this->title->__invoke(), 'If Title is not passed then the page Title is "Transfluent" by default');
    }
    
    public function test_transfluent_is_appended_in_the_title()
    {
        $this->assertEquals('My Cool Title | Transfluent', $this->title->__invoke('My Cool Title'), 'Every page contains Transfluent in the Title separated by | (pipe)');
    }
}
