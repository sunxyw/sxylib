<?php

namespace Sunxyw\SXYLib\Handlers;

class DataConvertHandler
{
    public function arr2obj($arr)
    {
        foreach ($arr as $k => $v) {
            if (gettype($v) == 'array' || getType($v) == 'object') {
                $arr[$k] = (object)$this->arr2obj($v);
            }
        }

        return (object)$arr;
    }

    public function obj2arr($obj)
    {
        $obj = (array)$obj;
        foreach ($obj as $k => $v) {
            if (gettype($v) == 'resource') {
                break;
            }
            if (gettype($v) == 'object' || gettype($v) == 'array') {
                $obj[$k] = (array)$this->obj2arr($v);
            }
        }

        return $obj;
    }
}