<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestApi extends Controller
{
    public function GetGameData()
    {
        return response()->json(['success'=>"sss","message"=>"Ok"]);
    }
}
