<?php

namespace App\Http\Controllers;

use App\Models\Tap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    
    public function statistics($tag){
        $information = DB::table('tap')->select('id','ip', 'device','location', 'operative_system')->where('tag', $tag)->get()->toArray();
        return $information;
    }

    public function Allstatistics(){

        $informacion = Tap::select('id','ip', 'device','location', 'operative_system','tag')->get()->toArray();
        return $informacion;
    }
}
