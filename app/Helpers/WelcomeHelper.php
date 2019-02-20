<?php namespace App\Helpers;

class WelcomeHelper
{
    /**
     * @return string
     */
    public static function welcome()
    {
        $originalParts = [
            '#todo',
            'write',
            'my',
            'website',
        ];

        $parts = collect($originalParts);

        $key1 = array_rand($parts->toArray());
        $val1 = $parts->pull($key1);
        $parts->forget($key1);

        $key2 = array_rand($parts->toArray());
        $val2 = $parts->pull($key2);
        $parts->forget($key2);

        $key3 = array_rand($parts->toArray());
        $val3 = $parts->pull($key3);
        $parts->forget($key3);

        $key4 = array_rand($parts->toArray());
        $val4 = $parts->pull($key4);
        $parts->forget($key4);

        return sprintf('%s %s %s %s', $val1, $val2, $val3, $val4);
    }

    /**
     * @return string
     */
    public static function color()
    {
        $colors = [
            'blue'      => '#3490dc',
            'indigo'    => '#6574cd',
            'purple'    => '#9561e2',
            'pink'      => '#f66D9b',
            'red'       => '#e3342f',
            'orange'    => '#f6993f',
            'yellow'    => '#ffed4a',
            'green'     => '#38c172',
            'teal'      => '#4dc0b5',
            'cyan'      => '#6cb2eb',
        ];

        return array_random_elem($colors);
    }
}