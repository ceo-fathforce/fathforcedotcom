<?php

namespace App\Services\Customize;

use App\Concerns\ItemImport;
use App\Imports\Customize\ServicetextImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ServicetextImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('servicetext');

        $this->validateFile($request);

        Excel::import(new ServicetextImport, $request->file('file'));

        $this->reportError('servicetext');
    }
}
