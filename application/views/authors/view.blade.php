@layout("layouts.default")

@section("content")
	<h1>Author: {{ e($author->author_name) }}</h1>

	<p> {{ e($author->bio) }}</p>

	<small> {{ $author->created_at }}</small>

	<p> {{ HTML::link_to_route("authors", "Authors") }}</p>
	<p> {{ HTML::link_to_route("edit_author", "Edit", array($author->id)) }}</p>
	<p> {{ Form::open("author/delete", "DELETE") }}
		{{ Form::token() }}
		{{ Form::hidden("id", $author->id) }}
		{{ Form::submit("Delete") }}
		{{ Form::close() }}
	</p>
@endsection
