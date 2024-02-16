<?php

namespace App\Services\Master;

use App\Concerns\ItemImport;
use App\Imports\Master\PartnerSchoolImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PartnerSchoolImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('partnerschool');

        $this->validateFile($request);

        Excel::import(new PartnerSchoolImport, $request->file('file'));

        $this->reportError('partnerschool');
    }
}
