<?php

class Add_Authors {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table("authors")->insert(array(
			"author_name"	=> "Brenda Thomas",
			"bio"			=> "A very talented writer from Augusta, Ga.",
			"created_at" 	=> date("Y-m-d H:m:s"),
			"updated_at" 	=> date("Y-m-d H:m:s")
		));
		DB::table("authors")->insert(array(
			"author_name"	=> "Chucky Browne",
			"bio"			=> "He Sucks. He's all about the purple prose.",
			"created_at" 	=> date("Y-m-d H:m:s"),
			"updated_at" 	=> date("Y-m-d H:m:s")
		));
		DB::table("authors")->insert(array(
			"author_name"	=> "Bob Ross",
			"bio"			=> "Writer and painter, especially of happy happy clouds and trees.",
			"created_at" 	=> date("Y-m-d H:m:s"),
			"updated_at" 	=> date("Y-m-d H:m:s")
		));
		DB::table("authors")->insert(array(
			"author_name"	=> "D'Argo Mojo",
			"bio"			=> "A lover and fighter, cuteness as a weapon.",
			"created_at" 	=> date("Y-m-d H:m:s"),
			"updated_at" 	=> date("Y-m-d H:m:s")
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table("authors")->where("author_name", "=", "Brenda")->delete;
		DB::table("authors")->where("author_name", "=", "Chucky")->delete;
	}

}
