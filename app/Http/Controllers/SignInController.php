<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function sign_in(){
        return view('sign_in', [
            "title"=>"Sign In"
        ]);
    }
}
