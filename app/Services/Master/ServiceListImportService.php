<?php

namespace App\Services\Master;

use App\Concerns\ItemImport;
use App\Imports\Master\ServicelistImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ServicelistImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('servicelist');

        $this->validateFile($request);

        Excel::import(new ServicelistImport, $request->file('file'));

        $this->reportError('servicelist');
    }
}
