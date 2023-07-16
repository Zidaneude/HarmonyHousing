<?php

namespace App\Http\Controllers\Locataire;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LocataireController extends Controller
{
    public function create()
    {
        return view('dashboard.dashbord-locataire');
    }
}
