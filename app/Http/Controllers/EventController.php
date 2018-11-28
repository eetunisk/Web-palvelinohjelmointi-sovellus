<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Calendar;
use Validator;
use App\Event;

class EventController extends Controller
{
    // alustetaan kalenteri
    public function index() {
    	$events = Event::get();
    	$event_list = [];
    	foreach ($events as $key => $event) {
    		$event_list[] = Calendar::event(
                $event->event_name,
                true,
                new \DateTime($event->start_date),
                new \DateTime($event->end_date.' +1 day')
            );
    	}

    	$calendar_details = Calendar::addEvents($event_list); 
 
        return view('home', compact('calendar_details') );
    }

    public function addEvent(Request $request) {
    	$validator = Validator::make($request->all(), [
            'event_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        // heittää virheilmoituksen jos ei syötetä oikeita tietoja
        if ($validator->fails()) {
        	\Session::flash('warning','Syötä oikeat tiedot.');
            return Redirect::to('/')->withInput()->withErrors($validator);
        }
 
        // lisätään tapahtuma tietokantaan
        $event = new Event;
        $event->event_name = $request['event_name'];
        $event->start_date = $request['start_date'];
        $event->end_date = $request['end_date'];
        $event->save();
 
        \Session::flash('success','Tapahtuma lisätty kalenteriin.');
        return Redirect::to('/');
    }
}
