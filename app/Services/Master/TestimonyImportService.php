<?php

namespace App\Services\Master;

use App\Concerns\ItemImport;
use App\Imports\Master\TestimonyImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TestimonyImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('testimony');

        $this->validateFile($request);

        Excel::import(new TestimonyImport, $request->file('file'));

        $this->reportError('testimony');
    }
}
