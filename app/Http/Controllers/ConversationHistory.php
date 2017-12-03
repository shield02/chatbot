<?php

namespace App\Http\Controllers;

use App\Conversation;
use Illuminate\Http\Request;

class ConversationHistory extends Controller
{
    //

    public function __constructor() {

    }

    public function userattrib (Request $request) {
        $data = $request->get();
        return $data;
    }
}
