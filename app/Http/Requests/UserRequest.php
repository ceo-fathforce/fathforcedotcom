<?php

namespace App\Http\Requests;

use App\Models\Config\Role;
use App\Rules\StrongPassword;
use App\Rules\Username;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $uuid = $this->route('user');

        $rules = [
            'name' => 'required|min:2|max:100',
            'email' => ['required', 'email', 'max:50', Rule::unique('users')->ignore($uuid)],
            'username' => 'required',
            'password' => ['required', 'same:password_confirmation'],
            'job' => 'required|min:2|max:100',
            'me' => 'required|min:2|max:100',
            'twitter' => 'url',
            'facebook' => 'url',
            'instagram' => 'url',
            'youtube' => 'url',
            'roles' => 'array',
        ];

        if ($uuid && ! $this->force_change_password) {
            unset($rules['password']);
        }

        return $rules;
    }

    public function withValidator($validator)
    {
        if (! $validator->passes()) {
            return;
        }

        $validator->after(function ($validator) {
            $allowedRoles = Role::selectOption();

            if (array_diff($this->roles, $allowedRoles->pluck('uuid')->all())) {
                $validator->errors()->add('roles', trans('general.errors.invalid_input'));
            }

            $this->merge(['role_ids' => $allowedRoles->whereIn('uuid', $this->roles)->pluck('id')->all()]);
        });
    }

    /**
     * Translate fields with user friendly name.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => __('user.props.name'),
            'email' => __('user.props.email'),
            'username' => __('user.props.username'),
            'password' => __('user.props.password'),
            'password_confirmation' => __('user.props.password_confirmation'),
            'role' => __('config.role.role'),
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [];
    }
}
