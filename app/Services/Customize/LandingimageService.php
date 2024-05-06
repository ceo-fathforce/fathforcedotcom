<?php

namespace App\Services\Customize;

use App\Models\Customize\Landingimage;
use App\Models\Customize\LandingimageCategory;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingimageService
{
    
    public function create(Request $request): Landingimage
    {
        $landingimage = Landingimage::forceCreate($this->formatParams($request));

        $landingimage->addMedia($request);

        return $landingimage;
    }

    private function formatParams(Request $request, ?Landingimage $landingimage = null): array
    {
        return [
            'name' => $request->name,
        ];
    }

    public function update(Request $request, Landingimage $landingimage): void
    {
        $landingimage->forceFill($this->formatParams($request, $landingimage))->save();

        $landingimage->updateMedia($request);
    }

    public function deletable(Landingimage $landingimage,  $validate = false): bool
    {
        if ($landingimage->user_id != Auth::id()) {
            if ($validate) {
                return false;
            }

            throw ValidationException::withMessages(['message' => trans('user.errors.permission_denied')]);
        }

        return true;
    }
}
