<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class AjaxController extends Controller
{
    /**
     * Checks that the requested email does not
     * already exists in the User table.
     * 
     * @param  Request  $request The data to validate
     * @return string
     */
    public function validateUser(Request $request)
    {
        $response = Validator::make($request->all(), [
            'email' => 'unique:users|email',
        ]);

        $route = url( ($response->fails()) ? '/youExist' : 'https://pro.creativemarket.com/sign-up' );

        return $route;
    }
}
