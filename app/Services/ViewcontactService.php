<?php

namespace App\Services;

use App\Models\Viewcontact;
use Illuminate\Http\Request;

class ViewcontactService
{
    public function create(Request $request): Viewcontact
    {
        $viewcontact = Viewcontact::forceCreate($this->formatParams($request));

        $viewcontact->addMedia($request);

        return $viewcontact;
    }

    private function formatParams(Request $request, ?Viewcontact $viewcontact = null): array
    {
        return [
            'first' => $request->first,
            'last' => $request->last,
            'email' => $request->email,
            'department' => $request->department,
            'message' => $request->message,
        ];
    }

    public function update(Request $request, Viewcontact $viewcontact): void
    {
        $viewcontact->forceFill($this->formatParams($request, $viewcontact))->save();

        $viewcontact->updateMedia($request);
    }

    public function deletable(Viewcontact $viewcontact): void
    {
    }
}
