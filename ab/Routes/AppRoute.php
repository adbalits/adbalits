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

    public function paramStr()
    {
        $params = $this->params;

        if(is_null($params))
        {
            return '';
        }

        $result = '?';
        foreach($params as $key => $value)
        {
            $result.= ($result==='?')
                ? sprintf('%s=%s', $key, $value)
                : sprintf('&%s=%s', $key, $value);
        }
        return $result;
    }

    public function route()
    {
        $paramStr = $this->paramStr();

        return $this->route.$paramStr;
    }

    public function url()
    {
        $paramStr = $this->paramStr();

        return secure_url($this->route.$paramStr);
    }
}