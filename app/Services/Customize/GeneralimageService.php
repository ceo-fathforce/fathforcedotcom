<?php

namespace App\Services\Customize;

use App\Models\Customize\Generalimage;
use App\Models\Customize\GeneralimageCategory;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralimageService
{
    
    public function create(Request $request): Generalimage
    {
        $generalimage = Generalimage::forceCreate($this->formatParams($request));

        $generalimage->addMedia($request);

        return $generalimage;
    }

    private function formatParams(Request $request, ?Generalimage $generalimage = null): array
    {
        return [
            'name' => $request->name,
        ];
    }

    public function update(Request $request, Generalimage $generalimage): void
    {
        $generalimage->forceFill($this->formatParams($request, $generalimage))->save();

        $generalimage->updateMedia($request);
    }

    public function deletable(Generalimage $generalimage,  $validate = false): bool
    {
        if ($generalimage->user_id != Auth::id()) {
            if ($validate) {
                return false;
            }

            throw ValidationException::withMessages(['message' => trans('user.errors.permission_denied')]);
        }

        return true;
    }
}
