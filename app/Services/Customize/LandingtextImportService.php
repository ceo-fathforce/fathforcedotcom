<?php

namespace App\Services\Customize;

use App\Concerns\ItemImport;
use App\Imports\Customize\LandingtextImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LandingtextImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('landingtext');

        $this->validateFile($request);

        Excel::import(new LandingtextImport, $request->file('file'));

        $this->reportError('landingtext');
    }
}
