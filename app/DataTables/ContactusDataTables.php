<?php

namespace App\DataTables;


use App\Models\Contact;
use App\Models\PaymentCategory;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ContactusDataTables extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable($query): EloquentDataTable
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addColumn('name', function (Contact $model) {
                return $model->name;
            })
            ->addColumn('email', function (Contact $model) {
                return $model->email;
            })
            ->addColumn('subject', function (Contact $model) {
                return $model->subject;
            })
            ->addColumn('action', function (Contact $model) {
                return view('admin.brands.parts._action-menu', compact('model'));
            });
    }


    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\UserDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Contact $model): QueryBuilder
    {
        $data =  $model->newQuery();
        return $data;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('kt_ecommerce_category_table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->stateSave(true)
            ->orderBy(0)
            ->responsive()
            ->autoWidth(false)
            ->parameters(['scrollX' => true])
            ->languageSearch(__('dashboard.search') . ':')
            ->languageProcessing(__('dashboard.load_in_progress'))
            ->languageZeroRecords(__('dashboard.not_found_data'))
            ->languageInfo(__('dashboard.show') . "_START_" . __('dashboard.to') . "_END_" . __('dashboard.from') . "_TOTAL_" . __('dashboard.files'))
            ->languageInfoEmpty(__('dashboard.show') . " 0 " . __('dashboard.from') . " 0 " . __('dashboard.to') .  " 0 " . __('dashboard.files'))
            ->languageInfoFiltered(" | تصفية من _MAX_ اجمالي ملفات")
            ->addTableClass('align-middle table-row-dashed fs-6 gy-5');
        // ->ExportButtons([
        //     'copy',
        //     'csv',
        //     'excel',
        //     'pdf',
        //     'print',
        // ]);

    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')->title(__('#'))->addClass('text-center')->orderable(false)->searchable(true),
            Column::computed('name')->title(__('dashboard.name'))->addClass('text-start'),
            Column::computed('email')->title(__('dashboard.email'))->addClass('text-start'),
            Column::computed('subject')->title('Subject')->addClass('text-start'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->addClass('text-start')
                ->responsivePriority(-1)
                ->title(__('dashboard.actions')),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'UserDataTables_' . date('YmdHis');
    }
}
