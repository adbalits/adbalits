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
    function isLocalEnv()
    {
        return env('APP_ENV') === 'local';
    }
}

if ( ! function_exists('array_random') )
{
    function array_random($array)
    {
        $random_key = array_rand( $array );

        $random_elem = $array[ $random_key ];

        //
        return $random_elem;
    }
}

if ( ! function_exists('abbook') )
{
    function abbook($id)
    {
        return \App\Book::find($id);
    }
}

if ( ! function_exists('approuter') )
{
    function approuter()
    {
        return new \AB\Routes\AppRouter();
    }
}

if ( ! function_exists('arty') )
{
    function arty()
    {
        return new \App\Helpers\Arty();
    }
}