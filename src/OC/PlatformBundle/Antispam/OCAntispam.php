<?php

namespace OC\PlatformBundle\Antispam;

class OCAntispam
{
    /**
     * @param $text
     * @return bool
     */
    public function isSpam($text)
    {
        return strlen($text) < 50;
    }
}