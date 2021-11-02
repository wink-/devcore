<?php

namespace App\Http\Livewire\Datatables;

use Illuminate\Support\Carbon;
use App\Models\Wipsys\Workorder;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\LabelColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class WorkordersTable extends LivewireDatatable
{
    public $model = Workorder::class;
    public $hideable = 'select';
    public $exportable = true;
    public $complex = true;

    public function columns()
    {

        return [
            Column::name('number')
                ->label('Workorder')
                ->linkTo('wipsys/workorders')
                ->defaultSort('desc')
                ->searchable()
                ->filterable(),

            Column::name('id')
                ->label('ID')
                ->hide()
                ->hideable(),                

            Column::name('customer_code')
                ->label('Customer')
                ->searchable()
                ->hideable()
                ->filterable(),

            Column::name('part_id')
                ->label('Part ID')
                ->hideable()
                ->hide(),

            Column::name('part_number')
                ->label('Part Number')
                ->hideable()
                ->filterable()
                ->searchable(),

            Column::name('process_code')
                ->label('Process')
                ->hideable()
                ->filterable()
                ->searchable(),

            NumberColumn::name('quantity')
                ->label('QTY')
                ->hideable()
                ->filterable()
                ->round(),

            NumberColumn::name('quantity_shipped')
                ->label('QTY Shipped')
                ->hideable()
                ->hide()
                ->filterable()
                ->round(),

            Column::name('our_last_packing_list')
                ->label('Packing List')
                ->hideable()
                ->hide()
                ->filterable(),

            Column::name('price')
                ->label('Price')
                ->group('price')
                ->hideable()
                ->filterable()
                ->searchable(),

            Column::name('price_code')
                ->group('price')
                ->hideable(),

            DateColumn::name('date_received')
                ->label('Received')
                ->hideable()
                ->filterable()
                ->format('m-d-Y'),

            DateColumn::name('date_required')
                ->label('Required')
                ->hideable()
                ->hide()
                ->filterable()
                ->format('m-d-Y'),

            DateColumn::name('date_shipped')
                ->label('Date Shipped')
                ->hideable()
                ->hide()
                ->filterable()
                ->format('m-d-Y'),

            Column::name('customer_purchase_order')
                ->label('PO')
                ->hideable()
                ->hide()
                ->filterable(),

            Column::name('customer_packing_list')
                ->label('PL')
                ->hideable()
                ->filterable()
                ->searchable(),

            NumberColumn::name('shipped_amount')
                ->label('Shipped Amount')
                ->hideable()
                ->hide()
                ->filterable(),

            NumberColumn::name('inventory_amount')
                ->label('Inventory Amount')
                ->hideable()
                ->hide()
                ->filterable(),

            NumberColumn::name('invoice_amount')
                ->label('Invoice Amount')
                ->hideable()
                ->hide()
                ->filterable(),

            NumberColumn::name('invoice_number')
                ->label('Invoice')
                ->hideable()
                ->hide()
                ->filterable(),

            DateColumn::name('invoice_date')
                ->label('Invoice Date')
                ->hideable()
                ->hide()
                ->filterable()
                ->format('m-d-Y'),

            Column::name('priority')
                ->label('priority')
                ->hideable()
                ->hide()
                ->filterable(),

            BooleanColumn::name('rework')
                ->label('Rework')
                ->hideable()
                ->filterable(),



            // BooleanColumn::name('email_verified_at')
            //     ->label('Email Verified')
            //     ->format()
            //     ->filterable(),



            // Column::name('planet.name')
            //     ->label('Planet')
            //     ->group('group1')
            //     ->searchable()
            //     ->hideable()
            //     ->filterable($this->planets),

            // DateColumn::name('dob')
            //     ->label('DOB')
            //     ->group('group2')
            //     ->filterable()
            //     ->hide(),

            // (new LabelColumn())
            //     ->label('My custom heading')
            //     ->content('This fixed string appears in every row')
            //     ->hide()
        ];
    }
}