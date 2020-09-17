<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function welcome()
    {
        return view('information.welcome');
        
    }
    public function menu()
    {
        return view('information.make');
        
    }
    public function contactanos()
    {
        return view('information.contactanos');
        
    }
    public function objetivo()
    {
        return view('information.objetivo');
        
    }
    public function necesidad()
    {
        return view('information.necesidad');
        
    }
    
    public function futuro()
    {
        return view('information.futuro');
        
    }

}
