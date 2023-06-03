<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DateController extends Controller
{
    public function index()
    {
        return view('dashboard.cart.date', [
            'title' => 'Date',
        ]);
    }
}
