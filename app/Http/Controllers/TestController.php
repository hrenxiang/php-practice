<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class TestController extends Controller {
    public function index(): JsonResponse
    {
        return response()->json(['message' => 'This is the index method']);
    }
}
