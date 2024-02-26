<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Invoke lo utilizo porque solo administrara una sola ruta
    public function __invoke()
    {
        return view('home');
    }
}
