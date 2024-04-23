<?php

namespace App\Services\Master;

use App\Concerns\ItemImport;
use App\Imports\Master\SocialmediaImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SocialmediaImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('socialmedia');

        $this->validateFile($request);

        Excel::import(new SocialmediaImport, $request->file('file'));

        $this->reportError('socialmedia');
    }
}
