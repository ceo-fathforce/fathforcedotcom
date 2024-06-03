<?php

namespace App\Services\Customize;

use App\Concerns\ItemImport;
use App\Imports\Customize\GeneralimageImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class GeneralimageImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('generalimage');

        $this->validateFile($request);

        Excel::import(new GeneralimageImport, $request->file('file'));

        $this->reportError('generalimage');
    }
}
