<?php namespace App\Helpers;

class WelcomeHelper
{
    /**
     * @return string
     */
    public static function welcomeString()
    {
        $strings = [
            '#todo write my website',
            '#todo write website my',
            '#todo website write my',
            '#todo website my write',
            '#todo my write website',
            '#todo my website write',
        ];

        return array_random_elem($strings);
    }
}