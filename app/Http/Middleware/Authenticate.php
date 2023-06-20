<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Log\Logger;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    /**
     * JWTによる自動ログインのハンドラー
     *
     * @param [type] $request
     * @param Closure $next
     * @param [type] ...$guards
     * @return void
     */
    public function handle($request, Closure $next, ...$guards){
        if ($request->filled('jwt')) {
            $user = new \App\User();
            $token = $request->jwt;

            if ($user->isValidJwtToken($token)) {
                $jwt_values = $user->getJwtValues();
                $user_id = $jwt_values['user_id'] ?? -1;
                Auth::loginUsingId($user_id); // ここで自動ログイン
            }
        }
        // 親のログイン処理を実行
        parent::authenticate($request, $guards);
        return $next($request);
    }
}