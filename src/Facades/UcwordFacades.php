<?php
namespace Yangguoqi\Test\Facades;

use Illuminate\Support\Facades\Facade;

class UcwordFacades extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ucword';
    }
}