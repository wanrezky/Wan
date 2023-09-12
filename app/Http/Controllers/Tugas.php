<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tugas extends Controller
{
    public function index() {
        return view('tugas.index');
    }
}
