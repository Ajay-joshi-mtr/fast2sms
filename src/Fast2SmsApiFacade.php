<?php
namespace Ajayjoshi\Fast2sms;

use Illuminate\Support\Facades\Facade;

class Fast2SmsApiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'fast2sms';
    }
}