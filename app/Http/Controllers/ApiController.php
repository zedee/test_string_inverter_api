<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function invert(Request $request)
    {
        $this->validate($request, [
            'str1' => 'required',
            'str2' => 'required',
            'str3' => 'required',
            'str4' => 'required',
            'str5' => 'required'
        ]);

        $arrayOfStrings = $request->all();

        $reversed = array_map(function($userString) {
            return strrev($userString);
        }, $arrayOfStrings);

        $reversed = implode(' ', array_reverse($reversed));

        return response()->json([
            'result' => $reversed
        ]);
    }

    //
}
