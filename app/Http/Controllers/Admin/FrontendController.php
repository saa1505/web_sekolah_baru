<?php

namespace App\Http\Controllers;

use App\Models\Sambutan;

class FrontendController extends Controller
{
    public function sambutan()
    {
        $data = Sambutan::latest()->first();
        return view('frontend.sambutan', compact('data'));
    }
}
