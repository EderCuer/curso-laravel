@component('admin.layouts.elements.body')
	@slot('title') Páginas @endslot
	@slot('description') Administração de páginas @endslot
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th class="text-right">Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pages as $page)
			<tr>
				<td>{{ $page->id }}</td>
				<td>{{ $page->title }}</td>
				<td class="text-right">#</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endcomponent