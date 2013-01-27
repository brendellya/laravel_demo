@layout("layouts.default")

@section("content")
	<h1>Edit Author {{ $author->author_name }}</h1>

	{{ render("common.author_errors") }}

	{{ Form::open("authors/update", "PUT") }}
	{{ Form::token() }}
	<p>
		{{ Form::label("name", "Name:") }}
		{{ Form::text("name", $author->author_name) }}
	</p>
	<p>
		{{ Form::label("bio", "Bio:") }}
		{{ Form::textarea("bio", $author->bio) }}
	</p>
		{{ Form::hidden("id", $author->id) }}

	<p>{{ Form::submit("Edit Author") }}</p>
	{{ Form::close() }}
@endsection
