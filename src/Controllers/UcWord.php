<?php

namespace Yangguoqi\Test\Controllers;

class UcWord
{
    public function make($word='yangzie')
    {
        return ucwords($word);
    }
}