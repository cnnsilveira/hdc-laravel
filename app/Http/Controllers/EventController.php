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
}
