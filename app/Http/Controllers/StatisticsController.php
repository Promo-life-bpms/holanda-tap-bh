<?php

namespace App\Http\Controllers;

use App\Models\Tap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    
    public function statistics($tag){
        $data = DB::table('tap')->join('form', 'tap.tag', '=', 'form.tag')->select(
            'tap.id',
            'tap.ip',
            'tap.device',
            'tap.location',
            'tap.operative_system',
            'form.route',
            'form.agency',
            'form.employee_number'
            )->where('tap.tag', $tag)->get()->toArray();

        return $data;
    }

    public function Allstatistics()
    {
        $information = Tap::join('form', 'tap.tag', '=', 'form.tag')->select(
            'tap.id',
            'tap.ip',
            'tap.device',
            'tap.location',
            'tap.operative_system',
            'form.route',
            'form.agency',
            'form.employee_number',
            'tap.tag' 
            )->get()->toArray();
        return $information;
    }
}
