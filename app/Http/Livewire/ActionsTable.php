<?php

namespace App\Http\Livewire;

use App\Models\Pacsys\Action;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Livewire\Component;

class ActionsTable extends DataTableComponent
{
    public function columns(): array
    {
        return [
            Column::make('RecordName')
                ->sortable()
                ->searchable(),
            Column::make('FormName', 'FormName')
                ->sortable()
                ->searchable(),
            Column::make('ValueName', 'ValueName')
                ->sortable(),
        ];
    }

    public function query(): Builder
    {
        return Action::query();
    }
}
