<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Conversation extends Controller
{
    //

    public function __constructor() {

    }

    public function date() {
        return response()->json([
            'message' => [
                ['text' => "Today's date is "],
            ]
        ]);
    }
}
