<?php

namespace App\DataTables;

use App\Models\Wipsys\Workorder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class WorkordersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'workorders.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Workorder $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Workorder $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('workorders-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(6)
                  ->addClass('text-center'),
            Column::make('number'),
            Column::make('customer_code'),
            Column::make('part_number'),
            Column::make('process_code'),
            Column::make('date_received'),
            Column::make('quantity'),
            Column::make('quantity_shipped'),
            Column::make('price'),
            Column::make('our_last_packing_list'),
            Column::make('customer_purchase_order'),
            Column::make('customer_packing_list'),
            

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Workorders_' . date('YmdHis');
    }
}
