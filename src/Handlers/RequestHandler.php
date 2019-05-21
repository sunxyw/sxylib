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

    public function file($key = null, $obj = false)
    {
        if (isset($key)) {
            return $_FILES[$key];
        }

        if ($obj) {
            $data = $this->dch->arr2obj($_FILES);
        } else {
            $data = $_FILES;
        }

        return (object)$data;
    }
}