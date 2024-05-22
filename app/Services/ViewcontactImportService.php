<?php

namespace App\Services;

use App\Concerns\ItemImport;
use App\Imports\ViewcontactImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ViewcontactImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('viewcontact');

        $this->validateFile($request);

        Excel::import(new ViewcontactImport, $request->file('file'));

        $this->reportError('viewcontact');
    }
}
