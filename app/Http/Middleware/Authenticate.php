<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use PhpParser\Node\Stmt\ElseIf_;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    protected $user_route = 'user.login';
    protected $supplier_route = 'supplier.login';
    protected $admin_route = 'admin.login';
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if(Route::is('supplier.*')){
                return route($this->supplier_route);
            } elseif(Route::is('admin.*')) {
                return route($this->admin_route);
            } else {
                return route($this->user_route);
            }
        }
    }
}
