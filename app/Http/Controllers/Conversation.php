<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class Conversation extends Controller
{
    //

    public function __constructor() {

    }

    public function date() {
        return response()->json([
            "messages" => [
                ["text" => "Today's date is " . Carbon::now()],
            ]
        ]);
    }
}
