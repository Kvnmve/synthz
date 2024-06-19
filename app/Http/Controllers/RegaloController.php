<?php

namespace App\Http\Controllers;

use App\Models\Regalo;
use Illuminate\Http\Request;

class RegaloController extends Controller
{
    public function showRegalo()
    {
        $regalos = Regalo::limit(4) -> get();
        return view('layout.landing', compact('regalos'));
    }
}
