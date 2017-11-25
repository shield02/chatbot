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

    public function governors(Request $gov) {

        switch ($gov) {
            case "Akwa Ibom": return response()->json([
                 "messages" => [ ["text" => "Akwa Ibom state governor is Udom Emmanuel."], ] ]); 
            break;
            case "Cross River": return response()->json([ 
                 "messages" => [ ["text" => "Cross River state governor is Ben Ayade"], ] ]);
            break;
            case "Rivers": return response()->json([ 
                "messages" => [ ["text" => "Rivers state governor is Wesom Wike"], ]  ]); 
            break;
            default: return response()->json([ "messages" => ["text" => "Which state do you hail from?"] ]);
        }

    }
}
