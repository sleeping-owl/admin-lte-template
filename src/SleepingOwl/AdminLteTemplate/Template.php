<?php namespace SleepingOwl\AdminLteTemplate;

use SleepingOwl\Admin\AssetManager\AssetManager;
use SleepingOwl\Admin\Interfaces\TemplateInterface;

class Template implements TemplateInterface
{

	function __construct()
	{
		AssetManager::addStyle('admin::default/css/font-awesome.min.css');
		AssetManager::addStyle(asset('packages/sleeping-owl/admin-lte-template/bootstrap/css/bootstrap.min.css'));
		AssetManager::addStyle(asset('packages/sleeping-owl/admin-lte-template/css/AdminLTE.min.css'));
		AssetManager::addStyle(asset('packages/sleeping-owl/admin-lte-template/css/_all-skins.min.css'));
		AssetManager::addStyle(asset('packages/sleeping-owl/admin-lte-template/css/custom.css'));
		AssetManager::addStyle(asset('packages/sleeping-owl/admin-lte-template/css/dataTables.bootstrap.css'));
		AssetManager::addStyle(asset('packages/sleeping-owl/admin-lte-template/plugins/iCheck/all.css'));

		AssetManager::addScript(route('admin.lang'));
		AssetManager::addScript('admin::default/js/jquery-1.11.0.js');
		AssetManager::addScript('admin::default/js/bootstrap.min.js');
		AssetManager::addScript(asset('packages/sleeping-owl/admin-lte-template/js/app.js'));
		AssetManager::addScript(asset('packages/sleeping-owl/admin-lte-template/js/admin.js'));
		AssetManager::addScript(asset('packages/sleeping-owl/admin-lte-template/plugins/iCheck/icheck.min.js'));
	}

	public function view($view)
	{
		return 'admin-lte::default.' . $view;
	}

} 