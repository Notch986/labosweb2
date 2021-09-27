<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function store (Request $request){
        
        Request() -> validate([
            'name'  =>  'required'

        ]);
        return  "Datos validados";
    }
}