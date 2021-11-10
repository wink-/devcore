<?php

namespace App\Http\Livewire\Grid;

use App\Models\Wipsys\Part;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;

class PartsTable extends PowerGridComponent
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
            ->showSearchInput()
            ->showToggleColumns();
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
        return Part::query();
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
            ->addColumn('id')
            ->addColumn('number')
            ->addColumn('revision_code')
            ->addColumn('description')
            ->addColumn('customer_code')
            ->addColumn('customer_name')
            ->addColumn('process_code')
            ->addColumn('method_code')
            ->addColumn('price')
            ->addColumn('price_code')
            ->addColumn('price_break')
            ->addColumn('quantity_price_break')
            ->addColumn('unit_code')
            ->addColumn('minimum_lot_charge')
            ->addColumn('minimum_line_charge')
            ->addColumn('quote_id')
            ->addColumn('certify', function (Part $model) {
                return ($model->certify ? 'yes' : 'no');
            })
            ->addColumn('specification')
            ->addColumn('bake')
            ->addColumn('baking_time_pre')
            ->addColumn('baking_temp_pre')
            ->addColumn('baking_time_post')
            ->addColumn('baking_temp_post')
            ->addColumn('procedure_code')
            ->addColumn('material')
            ->addColumn('material_name')
            ->addColumn('material_condition')
            ->addColumn('thickness_minimum')
            ->addColumn('thickness_maximum')
            ->addColumn('thickness_unit_code')
            ->addColumn('surface_area')
            ->addColumn('surface_area_unit_code')
            ->addColumn('weight')
            ->addColumn('weight_unit_code')
            ->addColumn('length')
            ->addColumn('width')
            ->addColumn('height')
            ->addColumn('dimension_unit_code')
            ->addColumn('material_thickness')
            ->addColumn('material_thickness_unit_code')
            ->addColumn('note')
            ->addColumn('special_requirement')
            ->addColumn('operator_note')
            ->addColumn('quality_check_1')
            ->addColumn('quality_check_2')
            ->addColumn('quality_check_3')
            ->addColumn('quality_check_4')
            ->addColumn('quality_check_5')
            ->addColumn('quality_check_6')
            ->addColumn('image_count')
            ->addColumn('archive')
            ->addColumn('revision')
            ->addColumn('created_at_formatted', function(Part $model) { 
                return Carbon::parse($model->created_at)->format('d/m/Y H:i:s');
            })
            ->addColumn('updated_at_formatted', function(Part $model) { 
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
                ->title(__('ID'))
                ->field('id')
                ->hidden()
                ->makeInputRange(),
                

            Column::add()
                ->title(__('NUMBER'))
                ->field('number')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('REVISION CODE'))
                ->field('revision_code')
                ->sortable()
                ->searchable()
                ->hidden()
                ->makeInputText(),

            Column::add()
                ->title(__('DESCRIPTION'))
                ->field('description')
                ->sortable()
                ->searchable()
                ->hidden()
                ->makeInputText(),

            Column::add()
                ->title(__('CUSTOMER CODE'))
                ->field('customer_code')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('CUSTOMER NAME'))
                ->field('customer_name')
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
                ->title(__('METHOD CODE'))
                ->field('method_code')
                ->sortable()
                ->searchable()
                ->hidden()
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
                ->title(__('PRICE BREAK'))
                ->field('price_break')
                ->sortable()
                ->hidden()
                ->searchable(),

            Column::add()
                ->title(__('QUANTITY PRICE BREAK'))
                ->field('quantity_price_break')
                ->sortable()
                ->hidden()
                ->searchable(),

            Column::add()
                ->title(__('UNIT CODE'))
                ->field('unit_code')
                ->sortable()
                ->searchable()
                ->hidden()
                ->makeInputText(),

            Column::add()
                ->title(__('MINIMUM LOT CHARGE'))
                ->field('minimum_lot_charge')
                ->sortable()
                ->hidden()
                ->searchable(),

            Column::add()
                ->title(__('MINIMUM LINE CHARGE'))
                ->field('minimum_line_charge')
                ->sortable()
                ->hidden()
                ->searchable(),

            Column::add()
                ->title(__('QUOTE ID'))
                ->field('quote_id')
                ->makeInputRange(),

            Column::add()
                ->title(__('CERTIFY'))
                ->field('certify'),
                //->toggleable(),

            Column::add()
                ->title(__('SPECIFICATION'))
                ->field('specification')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('BAKE'))
                ->field('bake')
                ->toggleable(),

            Column::add()
                ->title(__('BAKING TIME PRE'))
                ->field('baking_time_pre')
                ->sortable()
                ->searchable()
                ->hidden()
                ->makeInputText(),

            Column::add()
                ->title(__('BAKING TEMP PRE'))
                ->field('baking_temp_pre')
                ->sortable()
                ->searchable()
                ->hidden()
                ->makeInputText(),

            Column::add()
                ->title(__('BAKING TIME POST'))
                ->field('baking_time_post')
                ->sortable()
                ->searchable()
                ->hidden()
                ->makeInputText(),

            Column::add()
                ->title(__('BAKING TEMP POST'))
                ->field('baking_temp_post')
                ->sortable()
                ->searchable()
                ->hidden()
                ->makeInputText(),

            Column::add()
                ->title(__('PROCEDURE CODE'))
                ->field('procedure_code')
                ->sortable()
                ->searchable()
                ->hidden()
                ->makeInputText(),

            Column::add()
                ->title(__('MATERIAL'))
                ->field('material')
                ->sortable()
                ->searchable()
                ->hidden()
                ->makeInputText(),

            Column::add()
                ->title(__('MATERIAL NAME'))
                ->field('material_name')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title(__('MATERIAL CONDITION'))
                ->field('material_condition')
                ->sortable()
                ->searchable()
                ->hidden()
                ->makeInputText(),

            Column::add()
                ->title(__('THICKNESS MINIMUM'))
                ->field('thickness_minimum')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title(__('THICKNESS MAXIMUM'))
                ->field('thickness_maximum')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title(__('THICKNESS UNIT CODE'))
                ->field('thickness_unit_code')
                ->sortable()
                ->searchable()
                ->hidden()
                ->makeInputText(),

            Column::add()
                ->title(__('SURFACE AREA'))
                ->field('surface_area')
                ->sortable()
                ->hidden()
                ->searchable(),

            Column::add()
                ->title(__('SURFACE AREA UNIT CODE'))
                ->field('surface_area_unit_code')
                ->sortable()
                ->searchable()
                ->hidden()
                ->makeInputText(),

            Column::add()
                ->title(__('WEIGHT'))
                ->field('weight')
                ->sortable()
                ->hidden()
                ->searchable(),

            Column::add()
                ->title(__('WEIGHT UNIT CODE'))
                ->field('weight_unit_code')
                ->sortable()
                ->searchable()
                ->hidden()
                ->makeInputText(),

            Column::add()
                ->title(__('LENGTH'))
                ->field('length')
                ->sortable()
                ->hidden()
                ->searchable(),

            Column::add()
                ->title(__('WIDTH'))
                ->field('width')
                ->sortable()
                ->hidden()
                ->searchable(),

            Column::add()
                ->title(__('HEIGHT'))
                ->field('height')
                ->sortable()
                ->hidden()
                ->searchable(),

            Column::add()
                ->title(__('DIMENSION UNIT CODE'))
                ->field('dimension_unit_code')
                ->sortable()
                ->searchable()
                ->hidden()
                ->makeInputText(),

            Column::add()
                ->title(__('MATERIAL THICKNESS'))
                ->field('material_thickness')
                ->sortable()
                ->hidden()
                ->searchable(),

            Column::add()
                ->title(__('MATERIAL THICKNESS UNIT CODE'))
                ->field('material_thickness_unit_code')
                ->sortable()
                ->searchable()
                ->hidden()
                ->makeInputText(),

            Column::add()
                ->title(__('NOTE'))
                ->field('note')
                ->sortable()
                ->hidden()
                ->searchable(),

            Column::add()
                ->title(__('SPECIAL REQUIREMENT'))
                ->field('special_requirement')
                ->sortable()
                ->hidden()
                ->searchable(),

            Column::add()
                ->title(__('OPERATOR NOTE'))
                ->field('operator_note')
                ->sortable()
                ->hidden()
                ->searchable(),

            Column::add()
                ->title(__('QUALITY CHECK 1'))
                ->field('quality_check_1')
                ->hidden()
                ->makeInputRange(),

            Column::add()
                ->title(__('QUALITY CHECK 2'))
                ->field('quality_check_2')
                ->hidden()
                ->makeInputRange(),

            Column::add()
                ->title(__('QUALITY CHECK 3'))
                ->field('quality_check_3')
                ->hidden()
                ->makeInputRange(),

            Column::add()
                ->title(__('QUALITY CHECK 4'))
                ->field('quality_check_4')
                ->hidden()
                ->makeInputRange(),

            Column::add()
                ->title(__('QUALITY CHECK 5'))
                ->field('quality_check_5')
                ->hidden()
                ->makeInputRange(),

            Column::add()
                ->title(__('QUALITY CHECK 6'))
                ->field('quality_check_6')
                ->hidden()
                ->makeInputRange(),

            Column::add()
                ->title(__('IMAGE COUNT'))
                ->field('image_count')
                ->hidden()
                ->makeInputRange(),

            Column::add()
                ->title(__('ARCHIVE'))
                ->field('archive')
                ->hidden()
                ->toggleable(),

            Column::add()
                ->title(__('REVISION'))
                ->field('revision')
                ->hidden()
                ->makeInputRange(),

            Column::add()
                ->title(__('CREATED AT'))
                ->field('created_at_formatted')
                ->searchable()
                ->sortable()
                ->hidden()
                ->makeInputDatePicker('created_at'),

            Column::add()
                ->title(__('UPDATED AT'))
                ->field('updated_at_formatted')
                ->searchable()
                ->sortable()
                ->hidden()
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
               ->route('part.edit', ['part' => 'id']),

           Button::add('destroy')
               ->caption(__('Delete'))
               ->class('bg-red-500 text-white')
               ->route('part.destroy', ['part' => 'id'])
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
           $updated = Part::query()->find($data['id'])->update([
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
