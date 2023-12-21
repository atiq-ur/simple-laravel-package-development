<?php

namespace Atiq\Calculator\Controllers;


use App\Http\Controllers\Controller;
use Atiq\Calculator\Facades\CalculatorFacade;

class CalculatorController extends Controller
{
    public function add($a, $b)
    {
        $result = $a + $b;
        return view('calculator::add', ['result' => $result]);
    }

    public function subtract($a, $b)
    {
        $result = $a - $b;
        return view('calculator::subtract', ['result' => $result]);
    }

    public function loadFacadeInfo()
    {
        return CalculatorFacade::index();
    }
}
