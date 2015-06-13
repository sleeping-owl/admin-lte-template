<form action="{{ $action }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="hidden" name="_redirectBack" value="{{ $backUrl }}" />

    @foreach($items as $panelTitle => $formItems)
        <div class="box">
            <div class="box-header">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ $panelTitle  }}</h3>
                </div>
            </div>
            <div class="box-body">
                @foreach ($formItems as $item)
                    {!! $item !!}
                @endforeach
            </div>
        </div>
    @endforeach
    <div class="form-group">
        <input type="submit" value="{{ trans('admin::lang.table.save') }}" class="btn btn-primary flat"/>
        <a href="{{ $backUrl }}" class="btn btn-default flat">{{ trans('admin::lang.table.cancel') }}</a>
    </div>
</form>
