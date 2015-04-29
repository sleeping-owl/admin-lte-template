<ul class="sidebar-menu">
	@foreach (Admin::instance()->getMenu() as $item)
		{!! $item !!}
	@endforeach
</ul>