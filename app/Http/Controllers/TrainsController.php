<?php

namespace App\Http\Controllers;

use App\Trains;

use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index() {
        $trains = Trains::all();
        return view('Trains', compact('trains'));
    }

}
