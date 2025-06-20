<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;

class UserController extends Controller
{
    public function index()
    {
        return response()->json([
            'users' => [
                ['id' => 1, 'name' => 'Iki'],
                ['id' => 2, 'name' => 'Budi'],
                ['id' => 6, 'name' => 'Aim'],
                ['id' => 3, 'name' => 'Siti'],
                ['id' => 4, 'name' => 'Joko'],
                ['id' => 5, 'name' => 'Dewi'],
            ]
        ]);
    }
}
