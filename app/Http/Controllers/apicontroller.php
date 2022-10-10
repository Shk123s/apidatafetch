<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SELECT;
class apicontroller extends Controller
{
    function list(){
         return SELECT::all();
    }
}
