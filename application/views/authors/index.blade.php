@layout("layouts.default")

@section("content")
	<h1>Authors Home Page</h1>

	<ul>
		@foreach($authors as $author)
			<li>{{ HTML::link_to_route('author', $author->author_name, array($author->id)); }}</li>
		@endforeach
	</ul>

	<p>{{ HTML::link_to_route("new_author", "Create New Author") }}</p>
@endsection
