<?php namespace Bharath\Http\Controllers;

use Bharath\Post;
use Bharath\Category;
use Bharath\Http\Requests;
use Bharath\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function newc(){

		return view('catcreate');

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$cat =  new category();

		$cat->category = \Input::get('categoryname');

		$cat->save();

		return \Redirect::route('catesite')
			->with('alert', 'Category created successfully!');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	public function refresh($id)
	{
		$p = Category::find($id);

		$p->category = \Input::get('categoryname');
		$p->save();

		return \Redirect::route('catesite');
	}


	public function catposts($category)
	{
		if (is_numeric($category))
		{
			$cat = Category::find($category)->id;
		}
		else
		{
			$column = 'category'; // This is the name of the column you wish to search

			$cat = Category::where($column , '=', $category)->first()->id;
		}

		$catname = Category::find($cat);

		$posts = Post::where('category',$cat)
			->orderBy('id', 'desc')->paginate(5);

		//var_dump($posts);

		return view('catposts')
		->with('posts', $posts)
			->with('catname',$catname);
	}




	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function desktop()
	{
		$cat = \DB::table('categories')->orderBy('id', 'desc')->paginate(20);
		return view('category')
			->with('cat', $cat);
	}
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cat = Category::find($id);

		return view('catedit')
			->with ('cat', $cat);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id){

		$post = Category::find($id)->delete();

		return \Redirect::route('catesite')
			->with('alert', 'Category deleted successfully!');
	}

}
