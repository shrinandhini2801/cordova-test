<?php

namespace Transfluent\MobileApp\model;

use Transfluent\BackendClient\BackendClient;

/**
 * Description of Language
 *
 * @author rajib
 */
class Language
{

   /**
     * Object which Instantiate Transfluent BackendClient
     * @var object 
     */
     protected $client;
     
    /**
     * Gets all the languages from Transfluent API and stores here
     * @var array 
     */
    protected $languages = [];
    
    /**
     * Retreiving languages is Dependent on calling the Transfluent API
     * 
     * @param \Transfluent\BackendClient\BackendClient $client
     */
    public function __construct(BackendClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retreives the set of all supported Languages by Transfluent API
     * 
     * @return array
     */
    public function getLanguages()
    {
        foreach ($this->client->languages() as $lang) {
            foreach ($lang as $key => $languages) {
                $this->languages[$key]['name'] = $languages['name'];
                $this->languages[$key]['code'] = $languages['code'];
                $this->languages[$key]['id'] = $languages['id'];
            }
        }
        return $this->languages;
    }

}
