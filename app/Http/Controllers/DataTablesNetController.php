<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\WorkordersDataTable;
use App\Models\Wipsys\Workorder;
use DataTables;

class DataTablesNetController extends Controller
{

    public function index()
    {
        return view('datatablesnet.index');
    }

    public function workorders()
    {
        return view('datatablesnet.workorders');
    }

    // public function workorders(WorkordersDataTable $dataTable)
    // {
    //     return $dataTable->render('datatablesnet.workorders');
    // }

    public function getWorkorders(Request $request)
    {
        if ($request->ajax()) {
            $data = Workorder::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }    
}