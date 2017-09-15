<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/15 0015
 * Time: 下午 1:55
 */

namespace Yangguoqi\Test\Controllers;


class UcWord
{
    public function make($word)
    {
        return ucwords($word);
    }
}