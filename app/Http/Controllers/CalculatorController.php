<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Interfaces\IOperations as IOperations;
use App\CustomClasses\Calculator as Calculator;


class CalculatorController extends Controller
{


    public function showCalculatorView()
    {
        return view("calculator");
    }

    public function getResult(Request $request)
    {
       $operation = "App\CustomClasses\\".$request['operation'];
       $calculator = new Calculator(new $operation($request["num1"],$request["num2"]));
       $result= $calculator->calculate();
       return view('calculator')->with("Result","The result is = ".$result);
    }
}
