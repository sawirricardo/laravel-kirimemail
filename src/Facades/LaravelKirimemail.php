<?php

namespace Sawirricardo\LaravelKirimemail\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Illuminate\Http\Client\PendingRequest transactionalClient()
 *
 * @see \Sawirricardo\LaravelKirimemail\LaravelKirimemail
 */
class LaravelKirimemail extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sawirricardo\LaravelKirimemail\LaravelKirimemail::class;
    }
}
