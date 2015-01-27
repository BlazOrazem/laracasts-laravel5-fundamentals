<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ArticlesController extends Controller {

	/**
	 * Show all articles
	 *
	 * @return Response
	 */
	public function index()
	{
		//$articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();
		$articles = Article::latest('published_at')->published()->get();

		return view('articles.index', compact('articles'));
	}

	/**
	 * Show a single article
	 * @param  integer $id
	 * @return Response
	 */
	public function show($id)
	{
		$article = Article::findOrFail($id);

		return view('articles.show', compact('article'));
	}

	/**
	 * Show the page to create a new article
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('articles.create');
	}

	/**
	 * Save a new article
	 *
	 * @param CreateArticleRequest $request
	 * @return Response
	 */
	public function store(CreateArticleRequest $request)
	{
		//**another way to do this is with built-in request
		//public function store(Request $request)
		//use Illuminate\Http\Request;
		//$this->validate($request, ['title' => 'required']);

		Article::create($request->all());

		return redirect('articles');
	}

}
