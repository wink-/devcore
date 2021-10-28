<?php

namespace App\Http\Livewire;

use App\Models\Wipsys\Workorder;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class WorkorderTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('Workorder', 'number')
                ->sortable()
                ->searchable(),
            Column::make('Customer Code', 'customer_code')
                ->sortable()
                ->searchable(),
            Column::make('Part Number', 'part_number')
                ->sortable()
                ->searchable(),
            Column::make('Process', 'process_code')
                ->sortable()
                ->searchable(),                
        ];
    }

    public function query(): Builder
    {
        return Workorder::query();
    }
}
