<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agenda; // Import Model Agenda

class AgendaController extends Controller
{
    public function index()
    {
        $agenda = Agenda::all();
        // Memanggil file blade di: resources/views/admin/agenda.blade.php
        return view('admin.agenda', compact('agenda'));
    }
}