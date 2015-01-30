<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class ArticlesController extends Controller {

	/**
	 * Show all articles.
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
	 * Show the page to create a new article.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('articles.create');
	}

	/**
	 * Save a new article.
	 *
	 * @param ArticleRequest $request
	 * @return Response
	 */
	public function store(ArticleRequest $request)
	{
		$article = new Article($request->all());

		Auth::user()->articles()->save($article);

		return redirect('articles');
	}

	/**
	 * Show a single article.
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
	 * Edit an article.
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
	 * Update an article.
	 *
	 * @param  $id
	 * @param  ArticleRequest $request
	 * @return Response
	 */
	public function update($id, ArticleRequest $request)
	{
		$article = Article::findOrFail($id);

		$article->update($request->all());

		return redirect('articles');
	}

	/**
	 * Delete an article.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$article = Article::findOrFail($id);

		$article->delete();

		return redirect('articles');
	}

}
