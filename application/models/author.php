<?php
/**
 * Created by JetBrains PhpStorm.
 * User: brendellya
 * Date: 1/26/13
 * Time: 5:00 PM
 * To change this template use File | Settings | File Templates.
 */
class Author extends Eloquent {
	public static $table	= "authors";
	public static $accessible = array("name", "bio");

	public static $rules	= array(
		"name"		=> "required|min:2",
		"bio"		=> "required|min:10"
	);

	public static function validate($data){
		return Validator::make($data, static::$rules);
	}
}
