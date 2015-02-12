<?php namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use App\Article;

class NavigationComposer {

	public function compose(View $view)
    {
		$view->with('latest', Article::latest()->first());
    }

}