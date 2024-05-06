<?php

namespace App\Services\Customize;

use App\Concerns\ItemImport;
use App\Imports\Customize\LandingimageImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LandingimageImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('landingimage');

        $this->validateFile($request);

        Excel::import(new LandingimageImport, $request->file('file'));

        $this->reportError('landingimage');
    }
}
