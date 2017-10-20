<h1>Make Maker</h1>

<form method="post" action="/hello">
	{{ csrf_field() }}
	<input name="name" type="text">
	<input value="enviar" type="submit">
</form>