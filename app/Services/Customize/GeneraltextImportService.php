<?php

namespace App\Services\Customize;

use App\Concerns\ItemImport;
use App\Imports\Customize\GeneraltextImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class GeneraltextImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('generaltext');

        $this->validateFile($request);

        Excel::import(new GeneraltextImport, $request->file('file'));

        $this->reportError('generaltext');
    }
}
