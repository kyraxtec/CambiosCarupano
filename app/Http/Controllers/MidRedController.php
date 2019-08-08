<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MidRedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->get('rol_id') == 1){

            return redirect('/admin/adminhome');
        }
        else {
            return view('/users/usershome');
        }
    }

  
}
