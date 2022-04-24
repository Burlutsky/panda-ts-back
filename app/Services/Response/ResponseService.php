<?php


namespace App\Services\Response;


use Illuminate\Http\JsonResponse;

class ResponseService
{
    public static function sendJsonResponse ($status, $data = [], $code = 200, $errors = []): JsonResponse
    {
        return response()->json([
            'status' => $status,
            'data' => $data,
            'errors' => $errors
        ], $code);
    }
}
