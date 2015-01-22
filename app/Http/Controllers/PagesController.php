<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about()
	{
		$first = 'Blaz';
		$last = 'Orazem';
		$people = [
			'Taylor Orwell', 'Jeff Way', 'John Rambo'
		];
		return view('pages.about', compact('first', 'last', 'people'));
	}

	public function contact()
	{
		return view('pages.contact');
	}

}
