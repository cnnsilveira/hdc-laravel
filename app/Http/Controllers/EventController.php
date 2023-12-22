<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
		$nome = isset( $_GET['nome'] ) ? $_GET['nome'] : 'Caio';

		$nomes = array(
			'Caio',
			'Julia',
			'Renato',
		);

		return view('pages.index', ['nome' => $nome, 'array' => $nomes]);
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
