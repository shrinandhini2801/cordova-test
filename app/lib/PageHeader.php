<?php

namespace Transfluent\MobileApp\lib;

/**
 * Formats the Header of the Page
 *
 */
class PageHeader
{
    /**
     * Sets the Static Header of the page
     * 
     * @var string Header of the page 
     */
    private $header = 'Transfluent';

    /**
     * Takes the string value as page header and returns it
     * 
     * @param string $header
     * @return string
     */
    public function __invoke($header = null)
    {
        if ($header) {
            $this->header = $header;
        }

        return $this->header;
    }

}
