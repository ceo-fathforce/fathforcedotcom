<?php

namespace App\Services\Customize;

use App\Concerns\ItemImport;
use App\Imports\Customize\CompanytextImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CompanytextImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('companytext');

        $this->validateFile($request);

        Excel::import(new CompanytextImport, $request->file('file'));

        $this->reportError('companytext');
    }
}
