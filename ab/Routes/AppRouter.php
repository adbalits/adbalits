<?php namespace AB\Routes;

use App\User;

class AppRouter
{
    public function about()
    {
        return $this->process('about');
    }

    public function books()
    {
        return $this->process('books');
    }

    public function process($route, $params = null)
    {
        return new AppRoute($route, $params);
    }
}