<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class LogoutController extends Controller
{
    public function logout(): JsonResponse
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'message' => 'Logged out'
        ], Response::HTTP_OK);
    }
}
