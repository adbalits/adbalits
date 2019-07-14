<?php namespace AB\Routes;

use App\User;

class AppRoute
{
    protected $route;
    protected $params;

    public function __construct($route, $params = [])
    {
        $this->route = $route;
        $this->params = $params;
    }

    public function get()
    {
        return $this->route;
    }

    public function url()
    {
        return secure_url($this->route);
    }
}