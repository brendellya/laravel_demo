<?php
/**
 * Created by JetBrains PhpStorm.
 * User: brendellya
 * Date: 1/26/13
 * Time: 3:28 PM
 * To change this template use File | Settings | File Templates.
 */
class Authors_Controller extends Base_Controller {
	public $restful		= true;

	public function get_index(){
	/*
		$view		= View::make("authors.index", array("name" => "Brendellya"))->with("age" )
			->with("age", "30");
		$view->location		= "Greorgia";
		$this->layout->title		= "Authors Home Echo";
		$this->layout->content		= $view;
	}
	*/
		return View::make("authors.index")
			->with("title", "Authors & Books")
			->with("authors", Author::order_by("author_name")->get());
	}

	public function get_view($id){
		return View::make("authors.view")
			->with("title", "Authors View Page")
			->with("author", Author::find($id));
	}

	public function get_new(){
		return View::make("authors.new")
			->with("title", "Add New Author");
	}

	public function post_create(){
		$validation		= Author::validate(Input::all());

		if($validation->fails()){
			return Redirect::to_route("new_author")
				->with_errors($validation)
				->with_input();
		}else{
		Author::create(array(
			"author_name"	=>Input::get("name"),
			"bio"			=>Input::get("bio")
		));
			return Redirect::to_route("authors")
			->with("message", "The author has been created successfully.");
		}
	}
	public function get_edit($id){
		return View::make("authors.edit")
			->with("title", "Edit Author")
			->with("author", Author::find($id));

	}

	public function put_update(){
		$id		= Input::get("id");
		$validation	= Author::validate(Input::all());

		if($validation->fails()){
			return Redirect::to_route("edit_author", $id)
				->with_errors($validation);
		}else{
			Author::update($id, array(
				"author_name"		=> Input::get("name"),
				"bio"				=> Input::get("bio")
			));
			return Redirect::to_route("author", $id)
				->with("message", "Author has been updated successfully!");
		}
	}

	public function delete_destroy(){
		Author::find(Input::get("id"))->delete();
		return Redirect::to_route("authors")->with("message", "The author was deleted!");
	}

}//End Class
