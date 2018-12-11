<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function login(Request $request)
    {
        return [
            'code'=> 200,
            'id'=> $request->id,
        ];
    }

    public function logout(Request $request)
    {
        $id = $request->id;
        $user = DB::table('users')->find($id);

        return [
            'code'=> 200,
            'data'=> [
                'user'=> $user
            ]
        ];
    }
}
