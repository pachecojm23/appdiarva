<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
        
        public function showWelcome()
	{
		return View::make('index/welcome');
	}

        public function showServices() {
            return View::make('services/services');
        }
        
        public function showContact() {
            return View::make('contact/contact');
        }
        
        public function showAbout() {
            return View::make('about/about');
        }
        
        public function showHorarios() {
            return View::make('horarios/horarios');
        }
}
