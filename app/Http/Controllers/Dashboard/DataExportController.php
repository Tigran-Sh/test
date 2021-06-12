<?php

namespace App\Http\Controllers\Dashboard;

use App\ExcelDefinitions\ExcelTypes;
use App\Http\Controllers\Controller;
use App\Imports\DataImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Facades\Excel;
use function PHPUnit\Framework\directoryExists;

class DataExportController extends Controller
{
    private $dir = 'app/ExcelDefinitions/Definitions';

    public function index()
    {
        $excelTypes = ExcelTypes::$types;
        return view('dashboard.data_upload.index', compact('excelTypes'));
    }

    public function uploadExcel(Request $request): \Illuminate\Http\RedirectResponse
    {
        $excelType = $request->all()['excel_type'];
        $excel = $request->all()['excel'];
        if (directoryExists($this->dir)) {
            if (class_exists($excelType)) {
                try {
                    Excel::import(new DataImport($excelType), $excel);
                } catch (\Throwable $exception) {
                    dd($exception);
                }
            }
        }
        return redirect()->back();
    }
}
