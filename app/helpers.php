<?php

if ( ! function_exists('isProductionEnv') )
{
    function isProductionEnv()
    {
        return env('APP_ENV') === 'production';
    }
}

if ( ! function_exists('isLocalEnv') )
{
    function isProductionEnv()
    {
        return env('APP_ENV') === 'local';
    }
}

if ( ! function_exists('array_random_elem') )
{
    function array_random_elem($array)
    {
        $random_key = array_rand( $array );

        $random_elem = $array[ $random_key ];

        //
        return $random_elem;
    }
}