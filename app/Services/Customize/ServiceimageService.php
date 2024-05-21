<?php

namespace App\Services\Customize;

use App\Models\Customize\Serviceimage;
use App\Models\Customize\ServiceimageCategory;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceimageService
{
    
    public function create(Request $request): Serviceimage
    {
        $serviceimage = Serviceimage::forceCreate($this->formatParams($request));

        $serviceimage->addMedia($request);

        return $serviceimage;
    }

    private function formatParams(Request $request, ?Serviceimage $serviceimage = null): array
    {
        return [
            'name' => $request->name,
        ];
    }

    public function update(Request $request, Serviceimage $serviceimage): void
    {
        $serviceimage->forceFill($this->formatParams($request, $serviceimage))->save();

        $serviceimage->updateMedia($request);
    }

    public function deletable(Serviceimage $serviceimage,  $validate = false): bool
    {
        if ($serviceimage->user_id != Auth::id()) {
            if ($validate) {
                return false;
            }

            throw ValidationException::withMessages(['message' => trans('user.errors.permission_denied')]);
        }

        return true;
    }
}
