<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SorryController extends Controller
{
    public $message;

    public function index(Request $request)
    {
        $this->message = $request->all();
        return view('sorry', ['message' => $this->message]);
    }
}
