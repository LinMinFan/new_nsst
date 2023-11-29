<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use DB;
use Session;
use Sentinel;

class LoginController extends Controller
{
    
    /**
     * 會員登入Controller
     *
     */
    public function getLogin(request $request)
    {
    	
        
	    return view('auth.login');
    }

    public function postLogin(request $request)
    {
    	
        
	    return redirect()->back()->with('error','登入失敗');
    }
}
