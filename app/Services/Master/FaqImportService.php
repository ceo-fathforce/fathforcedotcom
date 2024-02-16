<?php

namespace App\Services\Master;

use App\Concerns\ItemImport;
use App\Imports\Master\FaqImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class FaqImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('faq');

        $this->validateFile($request);

        Excel::import(new FaqImport, $request->file('file'));

        $this->reportError('faq');
    }
}
