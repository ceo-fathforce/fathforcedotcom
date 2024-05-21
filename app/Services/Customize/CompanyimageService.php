<?php

namespace App\Services\Customize;

use App\Models\Customize\Companyimage;
use App\Models\Customize\CompanyimageCategory;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyimageService
{
    
    public function create(Request $request): Companyimage
    {
        $companyimage = Companyimage::forceCreate($this->formatParams($request));

        $companyimage->addMedia($request);

        return $companyimage;
    }

    private function formatParams(Request $request, ?Companyimage $companyimage = null): array
    {
        return [
            'name' => $request->name,
        ];
    }

    public function update(Request $request, Companyimage $companyimage): void
    {
        $companyimage->forceFill($this->formatParams($request, $companyimage))->save();

        $companyimage->updateMedia($request);
    }

    public function deletable(Companyimage $companyimage,  $validate = false): bool
    {
        if ($companyimage->user_id != Auth::id()) {
            if ($validate) {
                return false;
            }

            throw ValidationException::withMessages(['message' => trans('user.errors.permission_denied')]);
        }

        return true;
    }
}
