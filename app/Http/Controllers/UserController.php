<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $userName = $request->get('name');
        $data = [
            'ip' => $request->ip()
        ];
        if(isset($userName))
        {
            $userArr = [
                'greeting' => $userName
            ];
            $data = array_merge($data, $userArr);
        }
        return response()->json($data)->header('x-hello-world', 'msk');
    }
}
