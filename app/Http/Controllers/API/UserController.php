<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function getAll(): JsonResponse
    {
        return response()->json([
            'users' => User::all()
        ]);
    }
}
