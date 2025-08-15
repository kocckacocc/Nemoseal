<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Category extends Model implements Sortable
{
	use HasFactory;
	use SortableTrait;

	public $sortable = [
		'order_column_name' => 'sort_order',
		'sort_when_creating' => true,
	];

	public function products() {
		return $this->hasMany(Products::class);
	}
}
