<?php

namespace App\Services\Landing;

use App\Concerns\ItemImport;
use App\Imports\Landing\PageImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PageImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('page');

        $this->validateFile($request);

        Excel::import(new PageImport, $request->file('file'));

        $this->reportError('page');
    }
}
