<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function profil()
    {
        $profile = Profile::first();
        return view('frontend.profil', compact('profile'));
    }
}
