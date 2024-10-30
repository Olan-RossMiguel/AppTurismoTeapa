<?php

namespace App\Http\Controllers;

use App\Models\tourists;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $personas = tourists::all();
        $data = array();
        return response()->view('reservation.index', $data,200);
    }
}
