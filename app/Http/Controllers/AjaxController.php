<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * Checks that the requested email does not
     * already exists in the User table.
     * 
     * @param  Request  $request The data to validate
     * @return Response
     */
    public function validateUser(Request $request)
    {
        return $request->validate([
            'email' => 'unique:users, email',
        ]);
    }
}
