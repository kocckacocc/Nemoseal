<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;

use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;

class ExportProducts extends DownloadExcel implements WithMapping, WithHeadings
{
	public $name = 'Termék export';
}
