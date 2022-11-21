<?php

namespace QuickLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * QuickLaravel[Facade]
 */
class QuickLaravel extends Facade
{

    /**
     * 获取[Facade]访问器
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'QuickLaravel';
    }

}