<?php

namespace App\Services\Master;

use App\Concerns\ItemImport;
use App\Imports\Master\PartnerCompanyImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PartnerCompanyImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('partnercompany');

        $this->validateFile($request);

        Excel::import(new PartnerCompanyImport, $request->file('file'));

        $this->reportError('partnercompany');
    }
}
