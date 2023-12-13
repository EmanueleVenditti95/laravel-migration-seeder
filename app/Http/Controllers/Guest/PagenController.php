<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PagenController extends Controller
{
    public function index() {
        $title = 'Treni';
        $trains = Train::all();

        return view('index',compact('trains','title'));
    }
}
