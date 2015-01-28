<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
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
	 *
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
	 * @param ArticleRequest $request
	 * @return Response
	 */
	public function store(ArticleRequest $request)
	{
		//**another way to do this is with built-in request
		//public function store(Request $request)
		//use Illuminate\Http\Request;
		//$this->validate($request, ['title' => 'required']);

		Article::create($request->all());

		return redirect('articles');
	}

	/**
	 * Edit an article
	 *
	 * @param  integer $id
	 * @return Response
	 */
	public function edit($id)
	{
		$article = Article::findOrFail($id);

		return view('articles.edit', compact('article'));
	}

	/**
	 * Update an article
	 *
	 * @param $id
	 * @param Request $request
	 */
	public function update($id, ArticleRequest $request)
	{
		$article = Article::findOrFail($id);

		$article->update($request->all());

		return redirect('articles');
	}

}
