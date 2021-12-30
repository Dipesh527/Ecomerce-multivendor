<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->role=='admin')
        {
        return view('admin.main');

        } 
        elseif(Auth::user()->role=='user')
        {
            return view('frontend.index');
        }
        else 
        {
            return redirect('/');
        }
        
    }
}
