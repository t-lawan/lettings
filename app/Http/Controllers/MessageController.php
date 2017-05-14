<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function index()
    {

        $flyers = Flyer::where('');
        return view('flyers.index', compact('flyers'));

    }


}
