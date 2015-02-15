<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\FooRepository;
use Illuminate\Http\Request;

class FooController extends Controller {

	/**
	 * Constructor injection.
	 */
//	private $repository;

//	public function __construct(FooRepository $repository)
//	{
//		$this->repository = $repository;
//	}

	/**
	 * Method injection.
	 *
	 * @param FooRepository $repository
	 * @return array
	 */
	public function foo(FooRepository $repository)
	{
		// Constructor injection call.
		// return $this->repository->get();

		// Method injection call.
		return $repository->get();
	}

}
