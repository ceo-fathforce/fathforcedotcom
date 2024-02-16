<?php

namespace App\Services\Master;

use App\Concerns\ItemImport;
use App\Imports\Master\GalleryImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class GalleryImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('gallery');

        $this->validateFile($request);

        Excel::import(new GalleryImport, $request->file('file'));

        $this->reportError('gallery');
    }
}
