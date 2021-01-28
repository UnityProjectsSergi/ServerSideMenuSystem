<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckConection extends Controller
{
    public function CheckConection()
    {
        return response()->json(['success'=>"sss","message"=>"Ok"]);
    }
}
