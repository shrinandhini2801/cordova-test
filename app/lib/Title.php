<?php

namespace Transfluent\MobileApp\lib;

/**
 * Formats the Title
 *
 */
class Title
{
    /**
     * Sets the Static title of the page
     * 
     * @var string Main Title of the page 
     */
    private $title = 'Transfluent';

    /**
     * Takes the string value as title and appends it with main page title
     * 
     * @param string $title
     * @return string
     */
    public function __invoke($title = '')
    {
        if ($title) {
            $this->title = $title . ' | ' . $this->title ;
        }

        return $this->title;
    }

}
