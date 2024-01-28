<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index() {
		$events = Event::all();

		return view('pages.index', ['events' => $events]);
	}

	public function contact() {
		return view('pages.contact');
	}

	public function products() {
		return view('pages.products', ['search' => request('search')]);
	}

	public function create_event() {
		return view('pages.events.create');
	}

	public function store(Request $request) {
		$event = new Event;

		$event->title = $request->title;
		$event->description = $request->description;
		$event->city = $request->city;
		$event->private = $request->private;

		$event->save();

		return redirect('/')->with('msg', 'Evento criado com sucesso!');
	}
}
