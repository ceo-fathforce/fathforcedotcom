<?php

namespace App\Services\Master;

use App\Concerns\ItemImport;
use App\Imports\Master\SuperiorityImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SuperiorityImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('superiority');

        $this->validateFile($request);

        Excel::import(new SuperiorityImport, $request->file('file'));

        $this->reportError('superiority');
    }
}
