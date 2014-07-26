<?php

namespace Transfluent\MobileApp\model;

use Transfluent\BackendClient\BackendClient;

class LanguageTest extends \PHPUnit_Framework_TestCase
{

    private $language;

    protected function setUp()
    {
        $client = new BackendClient();
        $this->language = new Language($client);
    }

    public function test_british_english_language_is_supported()
    {
        $this->assertEquals(1, $this->language->getLanguages()[1]['id']);
        $this->assertEquals('English (United Kingdom)', $this->language->getLanguages()[1]['name']);
        $this->assertEquals('en-gb', $this->language->getLanguages()[1]['code']);
    }
    
    public function test_language_received_contains_array_of_name_id_and_code()
    {
        foreach ($this->language->getLanguages() as $value) {
            $this->assertArrayHasKey('id', $value);
            $this->assertArrayHasKey('name', $value);
            $this->assertArrayHasKey('code', $value);
        }
    }

}
