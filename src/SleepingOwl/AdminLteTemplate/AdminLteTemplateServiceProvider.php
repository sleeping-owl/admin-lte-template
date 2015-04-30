<?php namespace SleepingOwl\AdminLteTemplate;

use Illuminate\Support\ServiceProvider;

class AdminLteTemplateServiceProvider extends ServiceProvider
{

	public function register()
	{

	}

	public function boot()
	{
		$this->loadViewsFrom(__DIR__ . '/../../views', 'admin-lte');

		$this->publishes([
			__DIR__ . '/../../../public/' => public_path('packages/sleeping-owl/admin-lte-template/'),
		], 'assets-lte');
	}

}