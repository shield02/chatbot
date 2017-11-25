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
            "messages" => [
                ["text" => "Today's date is ..."],
                ["text" => "Yesterday"]
            ]
        ]);
    }
}
