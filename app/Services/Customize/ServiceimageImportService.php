<?php

namespace App\Services\Customize;

use App\Concerns\ItemImport;
use App\Imports\Customize\ServiceimageImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ServiceimageImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('serviceimage');

        $this->validateFile($request);

        Excel::import(new ServiceimageImport, $request->file('file'));

        $this->reportError('serviceimage');
    }
}
