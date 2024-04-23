<?php

namespace App\Services\Master;

use App\Concerns\ItemImport;
use App\Imports\Master\CompanydataImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CompanydataImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('companydata');

        $this->validateFile($request);

        Excel::import(new CompanydataImport, $request->file('file'));

        $this->reportError('companydata');
    }
}
