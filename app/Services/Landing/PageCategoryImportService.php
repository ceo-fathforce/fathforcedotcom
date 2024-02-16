<?php

namespace App\Services\Landing;

use App\Concerns\ItemImport;
use App\Imports\Landing\PageCategoryImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PageCategoryImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('pagecategory');

        $this->validateFile($request);

        Excel::import(new PageCategoryImport, $request->file('file'));

        $this->reportError('pagecategory');
    }
}
