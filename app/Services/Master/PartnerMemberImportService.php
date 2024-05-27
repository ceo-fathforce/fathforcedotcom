<?php

namespace App\Services\Master;

use App\Concerns\ItemImport;
use App\Imports\Master\PartnerMemberImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PartnerMemberImportService
{
    use ItemImport;

    public function import(Request $request)
    {
        $this->deleteLogFile('partnermember');

        $this->validateFile($request);

        Excel::import(new PartnerMemberImport, $request->file('file'));

        $this->reportError('partnermember');
    }
}
