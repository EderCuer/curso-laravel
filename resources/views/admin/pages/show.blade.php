@component('admin.layouts.elements.body')
	@slot('title') Páginas @endslot
	@slot('description') @endslot

	<a href="{{ route('pages.index') }}" class="btn btn-xs btn-default">Voltar</a>
	<a href="{{ route('pages.edit', 1) }}" class="btn btn-xs btn-default">Editar</a>
	<a href="{{ route('pages.destroy', 1) }}" class="btn btn-xs btn-default">Remover</a>
@endcomponent