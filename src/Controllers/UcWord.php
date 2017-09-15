<?php

namespace Yangguoqi\Test\Controllers;

class UcWord
{
    public function make($word='yangzie')
    {
        return view('mview::uc', ['ago' => $word, 'now' => ucwords($word)]);
    }
}