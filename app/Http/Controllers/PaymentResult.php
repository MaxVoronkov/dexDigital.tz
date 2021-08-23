<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PaymentResult extends Controller
{
    public $message;

    public function viewFail(Request $request)
    {
        $this->message = $request->all();
        return view('sorry', ['message' => $this->message]);
    }

    public function viewSuccess()
    {

        return view('thankYou');
    }
}
