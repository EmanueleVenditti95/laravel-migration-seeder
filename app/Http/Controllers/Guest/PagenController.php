<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PagenController extends Controller
{
    // public function index() {
    //     $title = 'Treni';
    //     $trains = Train::all();

    //     return view('index',compact('trains','title'));
    // }

    public function index(){
        $title = 'Treni di oggi';

        //$trains = Train::where('departure_time','like','2023-12-%')->get();
        //$trains = Train::where('departure_time','>', Carbon::now())->get();
        $trains = Train::where('departure_time','>', now())->get();
        //dd($trains);


        return view('index',compact('title','trains'));
    }
}
