<?php

namespace App\Providers\NewCode;

use Illuminate\Support\ServiceProvider;

class GetDataFromDB extends ServiceProvider
{
    protected $res;
    protected $len;

    public function __construct($result)
    {
        $this->res = $result;
        $this->len = sizeof($result);
    }

    public function getData($id)
    {
        if(isset($this->res[$id]))
        {
            return $this->res[$id];
        }
        return null;
    }

    public function getLen()
    {
        return $this->len;
    }
}