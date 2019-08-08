<?php

namespace App\Http\Controllers\Secure;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/midred';
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('secure/index');
    }

    protected function authenticated(Request $request, $user)
    {
        $rol = $user->rol()->get();
      auth()->user()->setSession($rol->toArray());

    }

}
