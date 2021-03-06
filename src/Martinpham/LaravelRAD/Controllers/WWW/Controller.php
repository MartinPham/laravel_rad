<?php
/**
 * Created by PhpStorm.
 * User: zzz
 * Date: 18/11/16
 * Time: 15:12
 */

namespace Martinpham\LaravelRAD\Controllers\WWW;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard as AuthGuard;

trait Controller
{
    public $auth;

    public function __construct(Request $request, ResponseFactory $responseFactory, AuthGuard $authGuard = null)
    {
        $this->request = $request;
        $this->respond = $responseFactory;
        $this->auth = $authGuard;
    }
}