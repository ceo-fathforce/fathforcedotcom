<?php

namespace App\Services\Master;

use App\Concerns\ItemImport;
use App\Imports\Master\PortfolioCategoryImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PortfolioCategoryImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('portfoliocategory');

        $this->validateFile($request);

        Excel::import(new PortfolioCategoryImport, $request->file('file'));

        $this->reportError('portfoliocategory');
    }
}
