<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Tap;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;

class TapController extends Controller
{
    public function index() {
        return 1;
    }

    public function tap(Request $request, $id) {

        $ip = $request->ip();

        $userAgent = $request->header('User-Agent');
        $location = Location::get($ip);

        $agent = new \Jenssegers\Agent\Agent();
        $agent->setUserAgent($userAgent);

        $browser = $agent->browser();
        $platform = $agent->platform();

        Tap::create([
            'ip' => $ip,
            'device' => $userAgent, 
            'location' => $location ? json_encode($location->toArray()) : null,
            'operative_system' => $platform,
            'tag' => $id,
        ]);

        $find_form = Form::where('tag', $id)->get()->first();
        
        if($find_form == null ){

            return view('form.index',compact('id'));
        }

        $whatsAppLink = 'https://wa.me/525536732982';
        return redirect($whatsAppLink);
    }

    public function storage(Request $request) {

        $create_form = new Form();
        $create_form->route = $request->route;
        $create_form->agency = $request->agency;
        $create_form->employee_number = $request->employee_number;
        $create_form->tag = $request->tag;
        $create_form->save();

        $whatsAppLink = 'https://wa.me/525536732982';
        return redirect($whatsAppLink);

    }

}
