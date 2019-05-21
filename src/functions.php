<?php

namespace Sunxyw\SXYLib;

function request($key = null)
{
    return (new SXYLib())->request($key);
}

function dataConvert()
{
    return (new SXYLib())->dataConvert();
}