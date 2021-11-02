<?php

namespace App\Http\Livewire;

use App\Models\Wipsys\Workorder;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;

class wotable extends PowerGridComponent
{
    use ActionButton;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp()
    {
        $this->showCheckBox()
            ->showPerPage()
            ->showExportOption('download', ['excel', 'csv'])
            ->showSearchInput();
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */
    public function datasource(): ?Builder
    {
        return Workorder::query();
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): ?PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('number')
            ->addColumn('customer_code')
            ->addColumn('part_id')
            ->addColumn('part_number')
            ->addColumn('process_code')
            ->addColumn('price')
            ->addColumn('price_code')
            ->addColumn('date_received_formatted', function(Workorder $model) { 
                return Carbon::parse($model->date_received)->format('d/m/Y');
            })
            ->addColumn('date_required_formatted', function(Workorder $model) { 
                return Carbon::parse($model->date_required)->format('d/m/Y');
            })
            ->addColumn('customer_purchase_order')
            ->addColumn('customer_packing_list')
            ->addColumn('quantity')
            ->addColumn('unit_code')
            ->addColumn('quantity_shipped')
            ->addColumn('our_last_packing_list')
            ->addColumn('destination_code')
            ->addColumn('carrier_code')
            ->addColumn('freight_code')
            ->addColumn('date_shipped_formatted', function(Workorder $model) { 
                return Carbon::parse($model->date_shipped)->format('d/m/Y H:i:s');
            })
            ->addColumn('invoice_number')
            ->addColumn('invoice_date_formatted', function(Workorder $model) { 
                return Carbon::parse($model->invoice_date)->format('d/m/Y H:i:s');
            })
            ->addColumn('invoice_amount')
            ->addColumn('priority')
            ->addColumn('rework')
            ->addColumn('hot')
            ->addColumn('started')
            ->addColumn('completed')
            ->addColumn('shipped')
            ->addColumn('cod')
            ->addColumn('invoiced')
            ->addColumn('note')
            ->addColumn('image_count')
            ->addColumn('archive')
            ->addColumn('revision')
            ->addColumn('printed')
            ->addColumn('created_at_formatted', function(Workorder $model) { 
                return Carbon::parse($model->created_at)->format('d/m/Y H:i:s');
            })
            ->addColumn('updated_at_formatted', function(Workorder $model) { 
                return Carbon::parse($model->updated_at)->format('d/m/Y H:i:s');
            });

    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */
    public function columns(): array
    {
        return [
            Column::add()
                ->title(__('NUMBER'))
                ->field('number')
                ->makeInputRange(),

            Column::add()
                ->title(__('CUSTOMER CODE'))
                ->field('customer_code')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('PART ID'))
                ->field('part_id')
                ->makeInputRange(),

            Column::add()
                ->title(__('PART NUMBER'))
                ->field('part_number')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('PROCESS CODE'))
                ->field('process_code')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('PRICE'))
                ->field('price')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title(__('PRICE CODE'))
                ->field('price_code')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('DATE RECEIVED'))
                ->field('date_received_formatted')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker('date_received'),

            Column::add()
                ->title(__('DATE REQUIRED'))
                ->field('date_required_formatted')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker('date_required'),

            Column::add()
                ->title(__('CUSTOMER PURCHASE ORDER'))
                ->field('customer_purchase_order')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('CUSTOMER PACKING LIST'))
                ->field('customer_packing_list')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('QUANTITY'))
                ->field('quantity')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title(__('UNIT CODE'))
                ->field('unit_code')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('QUANTITY SHIPPED'))
                ->field('quantity_shipped')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title(__('OUR LAST PACKING LIST'))
                ->field('our_last_packing_list')
                ->makeInputRange(),

            Column::add()
                ->title(__('DESTINATION CODE'))
                ->field('destination_code')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('CARRIER CODE'))
                ->field('carrier_code')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('FREIGHT CODE'))
                ->field('freight_code')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('DATE SHIPPED'))
                ->field('date_shipped_formatted')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker('date_shipped'),

            Column::add()
                ->title(__('INVOICE NUMBER'))
                ->field('invoice_number')
                ->makeInputRange(),

            Column::add()
                ->title(__('INVOICE DATE'))
                ->field('invoice_date_formatted')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker('invoice_date'),

            Column::add()
                ->title(__('INVOICE AMOUNT'))
                ->field('invoice_amount')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title(__('PRIORITY'))
                ->field('priority')
                ->makeInputRange(),

            Column::add()
                ->title(__('REWORK'))
                ->field('rework')
                ->toggleable(),

            Column::add()
                ->title(__('HOT'))
                ->field('hot')
                ->toggleable(),

            Column::add()
                ->title(__('STARTED'))
                ->field('started')
                ->toggleable(),

            Column::add()
                ->title(__('COMPLETED'))
                ->field('completed')
                ->toggleable(),

            Column::add()
                ->title(__('SHIPPED'))
                ->field('shipped')
                ->toggleable(),

            Column::add()
                ->title(__('COD'))
                ->field('cod')
                ->toggleable(),

            Column::add()
                ->title(__('INVOICED'))
                ->field('invoiced')
                ->toggleable(),

            Column::add()
                ->title(__('NOTE'))
                ->field('note')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title(__('IMAGE COUNT'))
                ->field('image_count')
                ->makeInputRange(),

            Column::add()
                ->title(__('ARCHIVE'))
                ->field('archive')
                ->toggleable(),

            Column::add()
                ->title(__('REVISION'))
                ->field('revision')
                ->makeInputRange(),

            Column::add()
                ->title(__('PRINTED'))
                ->field('printed')
                ->toggleable(),

            Column::add()
                ->title(__('CREATED AT'))
                ->field('created_at_formatted')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker('created_at'),

            Column::add()
                ->title(__('UPDATED AT'))
                ->field('updated_at_formatted')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker('updated_at'),

            Column::add()
                ->title(__('CREATED AT'))
                ->field('created_at_formatted')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker('created_at'),

            Column::add()
                ->title(__('UPDATED AT'))
                ->field('updated_at_formatted')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker('updated_at'),

        ]
;
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable this section only when you have defined routes for these actions.
    |
    */

    /*
    public function actions(): array
    {
       return [
           Button::add('edit')
               ->caption(__('Edit'))
               ->class('bg-indigo-500 text-white')
               ->route('workorder.edit', ['workorder' => 'id']),

           Button::add('destroy')
               ->caption(__('Delete'))
               ->class('bg-red-500 text-white')
               ->route('workorder.destroy', ['workorder' => 'id'])
               ->method('delete')
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Edit Method
    |--------------------------------------------------------------------------
    | Enable this section to use editOnClick() or toggleable() methods
    |
    */

    /*
    public function update(array $data ): bool
    {
       try {
           $updated = Workorder::query()->find($data['id'])->update([
                $data['field'] => $data['value']
           ]);
       } catch (QueryException $exception) {
           $updated = false;
       }
       return $updated;
    }

    public function updateMessages(string $status, string $field = '_default_message'): string
    {
        $updateMessages = [
            'success'   => [
                '_default_message' => __('Data has been updated successfully!'),
                //'custom_field' => __('Custom Field updated successfully!'),
            ],
            'error' => [
                '_default_message' => __('Error updating the data.'),
                //'custom_field' => __('Error updating custom field.'),
            ]
        ];

        return ($updateMessages[$status][$field] ?? $updateMessages[$status]['_default_message']);
    }
    */

    public function template(): ?string
    {
        return null;
    }

}
