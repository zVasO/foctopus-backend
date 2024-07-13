<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Noise;
use Illuminate\Http\JsonResponse;

class NoiseController extends Controller
{
    public function getAll(): JsonResponse
    {
        return response()->json([
            'noises' => Noise::all()
        ]);
    }
}
