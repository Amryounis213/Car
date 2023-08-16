<?php

namespace App\DataTables;

use App\Models\Driver;
use App\Models\Car;
use App\Models\PaymentCategory;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PostsDataTables extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */

    protected $userId;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    public function dataTable($query): EloquentDataTable
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('name', function (Car $model) {
                return $model->name;
            })
            // Add more columns here
            ->addColumn('brand', function (Car $model) {
                return $model->Brand->name; // Assuming you have a 'Brand' relationship in the 'Car' model.
            })
            ->addColumn('model', function (Car $model) {
                return $model->Model->name; // Assuming you have a 'Model' relationship in the 'Car' model.
            })
            ->addColumn('car_type', function (Car $model) {
                return $model->CarTypes->name; // Assuming you have a 'CarTypes' relationship in the 'Car' model.
            })
            ->addColumn('car_status', function (Car $model) {
                return view('admin.posts.parts._carstatus', compact('model'));
            })
            ->addColumn('post_status', function (Car $model) {
                return view('admin.posts.parts._poststatus', compact('model'));
            })
            ->addColumn('action', function (Car $model) {
                return view('admin.posts.parts._action-menu', compact('model'));
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\UserDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Car $model): QueryBuilder
    {
        return $model->newQuery()->where('user_id', $this->userId);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('hotelsdatatables-table')
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
            Column::computed('name')->title('Name')->addClass('text-center'),
            Column::computed('brand')->title('Brand')->addClass('text-center'),
            Column::computed('model')->title('Model')->addClass('text-center'),
            Column::computed('car_type')->title('Car Type')->addClass('text-center'),
            Column::computed('car_status')->title('Product Status')->addClass('text-center'),
            Column::computed('post_status')->title('Post Status')->addClass('text-center'),
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
