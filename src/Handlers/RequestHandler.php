<?php

namespace Sunxyw\SXYLib\Handlers;

class RequestHandler
{
    protected $dch;

    public function __construct()
    {
        $this->dch = new DataConvertHandler();
    }

    public function all($key = null)
    {
        if (!empty($key)) {
            return $_REQUEST[$key];
        }

        $data = $this->dch->arr2obj($_REQUEST);

        return (object)$data;
    }

    public function get($key = null)
    {
        if (isset($key)) {
            return $_GET[$key];
        }

        $data = $this->dch->arr2obj($_GET);

        return (object)$data;
    }

    public function post($key = null)
    {
        if (isset($key)) {
            return $_POST[$key];
        }

        $data = $this->dch->arr2obj($_POST);

        return (object)$data;
    }
}