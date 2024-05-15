<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticesController extends Controller
{
    public function show(Request $request)
    {
        $practice = $request->get('id');

        if(empty($practice)){
            return view('practices');
        }

        $viewMethod = 'pratice' . $practice;
        if (method_exists($this, $viewMethod)){
            return $this -> $viewMethod();
        } else {
            abort(404);
        }
    }

    
    public function practice01()
    {
        return view('practice.pr-01');
    }

    public function practice02()
    {
        return view('practice.pr-02');
    }

}
