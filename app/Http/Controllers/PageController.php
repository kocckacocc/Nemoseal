<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

use Config;

class PageController extends Controller
{
	public $production = false;
	public $baseUrl = '';
	public $title = 'Némo Seal';
	public $description = 'Website description.';
	public $collections = [
		'pages'    => [
			'path' => 'pages',
		],
		'products' => [
			'path' => 'products',
		],
	];

	public function __construct() {
		$this->data['root_dir'] = str_replace(['\\', 'admin/app/Http/Controllers'], ['/', ''], dirname(__FILE__));
	}

	public function selected($page, $section = false) {
		return '';
	}

	public function getUrl() {
		return '';
	}

}