<?php namespace app\Http\Composers;


use App\Post;

class NavigationComposer {
	public function compose($view){
		$view->with('items', Post::where('status', '=', 1)->where('type', '=', 2)->get());
	}
}