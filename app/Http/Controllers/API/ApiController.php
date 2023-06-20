<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    /**
     * レスポンスデータのセット
     *
     * @param array $datas
     * @param string $normalMsg
     * @param string $errMsg
     * @return \Illuminate\Http\JsonResponse
     */
    public function setResponse($datas, $normalMsg='', $errMsg='')
    {
        return response()->json([
            "dataArray"     => $datas,
            "normalMessage" => $normalMsg,
            "errorMessage"  => $errMsg,
        ]);
    }
}