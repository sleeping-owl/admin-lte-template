<div class="box">
	<form action="{{ $action }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		<input type="hidden" name="_redirectBack" value="{{ $backUrl }}" />
		@foreach ($items as $item)
			{!! $item->render() !!}
		@endforeach
		<div class="form-group">
			<input type="submit" value="{{ trans('admin::lang.table.save') }}" class="btn btn-primary flat"/>
			<a href="{{ $backUrl }}" class="btn btn-default flat">{{ trans('admin::lang.table.cancel') }}</a>
		</div>
	</form>
</div>