<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\App/Models/Workorder;

class WorkorderTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('Column Name'),
        ];
    }

    public function query(): Builder
    {
        return App/Models/Workorder::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.workorder_table';
    }
}
