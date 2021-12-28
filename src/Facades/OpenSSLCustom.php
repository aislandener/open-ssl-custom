<?php

namespace AislanDener\OpenSSLCustom\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string encrypt(string $value)
 * @method static string decrypt(string $cipher)
 */
class OpenSSLCustom extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'OpenSSLCustom';
    }
}
