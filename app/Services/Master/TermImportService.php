<?php

namespace App\Services\Master;

use App\Concerns\ItemImport;
use App\Imports\Master\TermImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TermImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('term');

        $this->validateFile($request);

        Excel::import(new TermImport, $request->file('file'));

        $this->reportError('term');
    }
}
