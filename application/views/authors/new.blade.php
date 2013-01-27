@layout("layouts.default")

@section("content")
	<h1>Add New Author</h1>

		{{ render("common.author_errors") }}

	{{ Form::open("authors/create", "POST") }}
	{{ Form::token() }}
	<p>
		{{ Form::label("name", "Name:") }}
		{{ Form::text("name", Input::old("name")) }}
	</p>
	<p>
		{{ Form::label("bio", "Bio:") }}
		{{ Form::textarea("bio", Input::old("bio")) }}
	</p>

	<p>{{ Form::submit("Add Author") }}</p>
	{{ Form::close() }}
@endsection
