@if ($creatable)
	<a class="btn btn-primary flat" href="{{ $createUrl }}"><i class="fa fa-plus"></i> {{ trans('admin::lang.table.new-entry') }}</a>
@endif
<div class="box">
	<div class="dd nestable" data-url="{{ $url }}/reorder">
		<ol class="dd-list">
			@include(AdminTemplate::view('display.tree_children'), ['children' => $items])
		</ol>
	</div>
</div>