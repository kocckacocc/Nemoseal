<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Products extends Model implements Sortable
{
	use HasFactory;
	use SortableTrait;

	public $sortable = [
		'order_column_name' => 'sort_order',
		'sort_when_creating' => true,
	];

	//ALTER TABLE `products` ADD `price_1` VARCHAR(191) NOT NULL DEFAULT '' AFTER `price`, ADD `price_2` VARCHAR(191) NOT NULL DEFAULT '' AFTER `price_1`, ADD `price_3` VARCHAR(191) NOT NULL DEFAULT '' AFTER `price_2`, ADD `price_4` VARCHAR(191) NOT NULL DEFAULT '' AFTER `price_3`;

	protected $fillable = [
		'name', 'model', 'price', 'category_id', 'manufacturer_id', 'price_lists_id'
	];

	public function price_lists() {
		return $this->belongsTo(PriceLists::class);
	}

	public function category() {
		return $this->belongsTo(Category::class);
	}

	public function manufacturer() {
		return $this->belongsTo(Manufacturer::class);
	}

}
