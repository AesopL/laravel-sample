<?php

namespace App\Http\Controllers;

class SessionController extends Controller {
	// user login
	public function create() {
		return view('session.create');
	}
}
