<?php

namespace App\Services\Master;

use App\Concerns\ItemImport;
use App\Imports\Master\PortfolioImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PortfolioImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('portfolio');

        $this->validateFile($request);

        Excel::import(new PortfolioImport, $request->file('file'));

        $this->reportError('portfolio');
    }
}
