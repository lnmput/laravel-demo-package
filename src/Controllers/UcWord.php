<?php

namespace Yangguoqi\Test\Controllers;

class UcWord
{
    public function make($word='yangzie')
    {
        $word = config('uc.default');
        return view('test::uc', ['ago' => $word, 'now' => ucwords($word)]);
    }
}