<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    public function render($request, Exception $exception)
    {
        // 想定内エラーの場合
        if ($exception instanceof \App\Exceptions\AppException) {
            // レスポンスデータの生成
            $data = array(
                "dataArray"     => [],
                "normalMessage" => "",
                "errorMessage"  => $exception->getMessage() // エラーメッセージ
            );
            // HTTPステータス200でレスポンスを返す
            // 画面側ではerrorMessageの有無で処理を分岐する
            return response()->json($data, 200);
        }
        // 想定外のエラーの場合
        $data = array(
            "dataArray"     => [],
            "normalMessage" => "",
            "errorMessage"  => $exception->getMessage(),          // エラーメッセージ
            "errorFile"     => $exception->getFile(),             // エラーになっているファイル
            "errorLine"     => $exception->getLine(),             // エラーになっている行数
            "errorDetail"   => $exception->getTraceAsString(),    // エラーメッセージ詳細
        );
        return response()->json($data, 500);
    }
}