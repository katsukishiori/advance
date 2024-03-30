<?php

namespace App\Http\Middleware;

use Closure;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  int  $role
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle($request, Closure $next, $role)
    {
        // ユーザーが指定されたショップに関連付けられた指定されたロールを持っているかを確認する
        $user = $request->user();
        if ($user && $user->shops()->wherePivot('role_id', $role)->exists()) {
            // ロールが存在する場合は、リクエストを続行します
            return $next($request);
        }

        return redirect('/');
    }
}
