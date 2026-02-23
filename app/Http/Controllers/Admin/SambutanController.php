<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sambutan; // Import Modelnya
use Illuminate\Http\Request;

class SambutanController extends Controller
{
    public function index()
    {
        return view('admin.profil-sekolah.sambutan');
    }
}
