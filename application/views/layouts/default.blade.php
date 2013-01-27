<?php
/**
 * Created by JetBrains PhpStorm.
 * User: brendellya
 * Date: 1/26/13
 * Time: 4:13 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{{ $title }}</title>
</head>
<body>
	@if(Session::has("message"))
		<p> {{ Session::get("message") }}</p>
	@endif

	@yield("content")
</body>
</html>
