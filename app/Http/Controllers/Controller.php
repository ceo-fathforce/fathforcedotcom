<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Validation\ValidationException;
use Carbon\Carbon;
use App\Models\Config\Config;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function getDataFrontEnd(Request $request)
    {
        $date_now = Carbon::now();
        $social_network = Config::where('name','social_network')->first();
        $general = Config::where('name','general')->first();
        $copyright = 'Copyrights © 2024 FathCMS. All Right Reseved';
        $footer = 'Build with <i class="fas fa-heart text-danger me-2 ms-2"></i>By<a href="https://fathforce.com/" class="text-reset"> Fathforce</a> @ Bandung, Indonesia';
        $data_visitor = [
            'url' => $request->path(),
            'properties' => NULL,
        ];
        return [
            'social_network' => 'fathforce',
            'general' => 'fathforce',
            'copyright' => $copyright,
            'footer' => $footer,
        ];
    }

    public function sendWa($data){
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'https://fathwa.com/send-message',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode($data),
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            )
        );
        
        $response = curl_exec($curl);
        curl_close($curl);
    }

    public function denyAuthUser(?User $user)
    {
        if (auth()->user()->is_default) {
            return;
        }

        if (is_null($user)) {
            return;
        }

        if ($user->id == auth()->id()) {
            throw ValidationException::withMessages(['message' => trans('user.errors.auth_user_permission_denied')]);
        }
    }

    public function denySuperAdmin(?User $user)
    {
        if (is_null($user)) {
            return;
        }

        if ($user->is_default) {
            throw ValidationException::withMessages(['message' => trans('user.errors.default_user_permission_denied')]);
        }
    }

    public function denyAdmin(?User $user)
    {
        if (is_null($user)) {
            return;
        }

        if ($user->is_default) {
            throw ValidationException::withMessages(['message' => trans('user.errors.default_user_permission_denied')]);
        }

        if ($user->hasRole('admin')) {
            throw ValidationException::withMessages(['message' => trans('user.errors.admin_user_permission_denied')]);
        }
    }


}
