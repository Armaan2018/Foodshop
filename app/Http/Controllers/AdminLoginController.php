<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminLoginController extends Controller
{

	 public function __construct()
    {
        $this->middleware('guest')->except('showDashboard');
    }
    
    public function showAdminLogin()
    {
        return view('admin.auth.adminlogin');
    }


    public function showAdminRegister()
    {
        return view('admin.auth.adminregister');
    }


      public function showDashboard()
    {
    	return view('admin.dashboard');
    }


    
}
