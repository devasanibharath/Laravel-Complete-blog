<?php namespace Bharath\Http\Controllers;

use Bharath\Http\Requests;
use Bharath\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Bharath\Post;
use Bharath\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller {

	public function __construct(){
		$this->middleware('auth');
	}

	public function desktop(){
		$posts = \DB::table('posts')->orderBy('id', 'desc')->paginate(10);
		return view('desktop')
		->with('posts', $posts);
	}

	public function logout(){
		
		\Auth::logout();

		return \Redirect::route('home');
	}

	public function edit($id){
		$post = Post::find($id);
		$cat = Category::all();
		$catname = Category::where('id',$post->category)->first()->category;
		return view('edit')
		->with ('post', $post)
			->with('cat',$cat)
			->with('catname',$catname);
	}

	public function refresh($id){
		
		$p = Post::find($id);

		$inputs = \Input::all();

		$rules = array(
			'title' => 'required',
			'metadescription' => 'required',
			'content' => 'required',
			'tags' => 'required',
			'photo' => 'required',
			'category' => 'required'
		);

		$validation = Validator::make($inputs,$rules);
		if($validation->fails()){
			return var_dump($validation->errors());
		}else {

			$p->title = \Input::get('title');
			$p->metadescription = \Input::get('metadescription');
			$p->content = \Input::get('content');
			$p->tags = \Input::get('tags');
			$p->category = \Input::get('category');
//		$p->photo = \Input::get('photo');
			if ($file = \Input::file('photo')) {
				//getting timestamp
				$timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

				$name = $timestamp . '-' . $file->getClientOriginalName();
				$file->move(public_path() . '/uploads/', $name);

				$p->photo = '/uploads/' . $name;
			} else {
				return 'Pic Not uploaded Properly! Press Back Button';
			}
			$p->resluggify();
			$p->save();

			return \Redirect::route('adminsite');
		}
	}

	public function newp(){
		$cat = Category::all();
		return view('nuevo')
			->with('cat',$cat);

	}

	public function create(){

		$p = new Post;

		$inputs = \Input::all();

		$rules = array(
			'title' => 'required',
			'metadescription' => 'required',
			'content' => 'required',
			'tags' => 'required',
			'photo' => 'required',
			'category' => 'required'
		);

		$validation = Validator::make($inputs,$rules);
		if($validation->fails()){
			return var_dump($validation->errors());
		}else {

			$p->title = \Input::get('title');
			$p->metadescription = \Input::get('metadescription');
			$p->content = \Input::get('content');
			$p->tags = \Input::get('tags');
			$p->category = \Input::get('category');
//		$p->photo = \Input::get('photo');
			if ($file = \Input::file('photo')) {
				//getting timestamp
				$timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

				$name = $timestamp . '-' . $file->getClientOriginalName();
				$file->move(public_path() . '/uploads/', $name);

				$p->photo = '/uploads/' . $name;
			} else {
				return 'Pic Not uploaded Properly! Press Back Button';
			}

			$p->save();

			return \Redirect::route('adminsite')
				->with('alert', 'Publication created successfully!');
		}
	}

	public function delete($id){

		$post = Post::find($id)->delete();

		return \Redirect::route('adminsite');
	}

}
