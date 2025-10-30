<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index() {
        $data = ['nombre' => 'Victor'];
            return view('contact', $data);
    }
}
