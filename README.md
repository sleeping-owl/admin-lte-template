## AdminLTE template for sleeping-owl/admin

AdminLTE is a free bootstrap admin template from [Almsaeed Studio](https://almsaeedstudio.com).
###Important Notes:
######Currently only works on [sleeping-owl/admin with development tag](https://github.com/sleeping-owl/admin/tree/development)

## Installation

 1. Require this package in your composer.json and run composer update:

		"sleeping-owl/admin-lte-template": "dev-master"

 2. After composer update, add service providers to the `config/app.php`

	    'SleepingOwl\AdminLteTemplate\AdminLteTemplateServiceProvider',

 3. Publish assets:

		$ php artisan vendor:publish --provider=SleepingOwl/Admin/AdminLteTemplateServiceProvider --tag=assets-lte
		
 4. Change current template in admin config (`config/admin.php`):
 
 		'template'                => 'SleepingOwl\AdminLteTemplate\Template',

## Copyright and License

Admin was written by Sleeping Owl for the Laravel framework and is released under the MIT License. See the LICENSE file for details.
