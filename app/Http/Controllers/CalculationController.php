<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculationController extends Controller
{
    public function calculate()
    {
        $num1 = request()->get('num1');
        $num2 = request()->get('num2');
        $sum = $num1 + $num2;

        $response = sprintf("The sum is %d", $sum);
        
        return response()->json($response);
    }
}
