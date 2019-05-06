<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{

public function login(){
return view('login');


}



    public function loginok(){


return redirect (route('login.ok'));
    }
     public function ok(){


return view('ok');
    }
}
