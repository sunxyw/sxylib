<?php

namespace Sunxyw\SXYLib;

use Sunxyw\SXYLib\Handlers\DataConvertHandler;
use Sunxyw\SXYLib\Handlers\RequestHandler;

class SXYLib
{
    public function dataConvert()
    {
        return new DataConvertHandler();
    }

    public function request($key = null)
    {
        $rh = new RequestHandler();

        if (!empty($key)) {
            return $rh->all($key);
        }

        return $rh;
    }
}