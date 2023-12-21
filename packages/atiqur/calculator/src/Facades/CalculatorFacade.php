<?php
namespace Atiq\Calculator\Facades;
use Illuminate\Support\Facades\Facade;

class CalculatorFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'calculator';
    }
}
