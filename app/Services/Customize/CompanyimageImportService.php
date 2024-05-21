<?php

namespace App\Services\Customize;

use App\Concerns\ItemImport;
use App\Imports\Customize\CompanyimageImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CompanyimageImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('companyimage');

        $this->validateFile($request);

        Excel::import(new CompanyimageImport, $request->file('file'));

        $this->reportError('companyimage');
    }
}
