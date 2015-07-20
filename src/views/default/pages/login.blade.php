@extends(AdminTemplate::view('_layout.base'))

@section('body', '<body class="login-page">')

@section('content')
	<div class="login-box">
		<div class="login-logo">
			<b>{{ config('admin.title') }}</b>
		</div>
		<div class="login-box-body">
			<p class="login-box-msg">{{ trans('admin::lang.auth.title') }}</p>
			<form action="{{ $loginPostUrl }}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<div class="form-group has-feedback <?=($errors->has('username')) ? 'has-error' : ''?>">
					{!! $errors->first('username', '<label for="username" class="control-label">:message</label>') !!}
					<input type="text" name="username" id="username" class="form-control" placeholder="{{ trans('admin::lang.auth.username') }}" autofocus />
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback <?=($errors->has('password')) ? 'has-error' : ''?>">
					{!! $errors->first('password', '<label for="password" class="control-label">:message</label>') !!}
					<input type="password" name="password" id="password" class="form-control" placeholder="{{ trans('admin::lang.auth.password') }}" />
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-7"></div>
					<div class="col-xs-5">
						<button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('admin::lang.auth.login') }}</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@stop
