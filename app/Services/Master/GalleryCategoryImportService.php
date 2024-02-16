<?php

namespace App\Services\Master;

use App\Concerns\ItemImport;
use App\Imports\Master\GalleryCategoryImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class GalleryCategoryImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('gallerycategory');

        $this->validateFile($request);

        Excel::import(new GalleryCategoryImport, $request->file('file'));

        $this->reportError('gallerycategory');
    }
}
