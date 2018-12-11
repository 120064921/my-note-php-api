<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        return [
            'code'=> 200,
            'id'=> $request->id,
        ];
    }
}
