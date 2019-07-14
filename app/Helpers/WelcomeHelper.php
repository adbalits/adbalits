<?php namespace App\Helpers;

class WelcomeHelper
{
    protected static $colors = [
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
    
    protected static $colorsRgb = [
        'blue'      => 'rgb(52,144,220)',
        'indigo'    => 'rgb(101,116,205)',
        'purple'    => 'rgb(149,97,226)',
        'pink'      => 'rgb(246,109,155)',
        'red'       => 'rgb(227,52,47)',
        'orange'    => 'rgb(246,153,63)',
        'yellow'    => 'rgb(255,237,74)',
        'green'     => 'rgb(56,193,114)',
        'teal'      => 'rgb(77,192,181)',
        'cyan'      => 'rgb(108,178,235) '
    ];

    protected static $greetings = [
        'Hello',
        'Bonjour',
        'Hola',
        'Привет',
        'Здравствуйте',
        'Ciao',
        'Aloha',
    ];

    /**
     * @return string
     */
    public static function greeting()
    {
        $stable = env('HELLO_STABLE', false);
        $random = array_random(self::$greetings);

        return ($stable)
            ? 'Привет'
            : $random;
    }

    /**
     * @return string
     */
    public static function welcome()
    {
        $stable = env('HELLO_STABLE', false);
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

        return ($stable)
            ? '#todo write my website'
            : sprintf('%s %s %s %s', $val1, $val2, $val3, $val4);
    }

    /**
     * @return string
     */
    public static function color()
    {
        $colors = self::$colors;

        return array_random($colors);
    }
}