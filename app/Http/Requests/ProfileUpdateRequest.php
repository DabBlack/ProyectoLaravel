<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:50'],
            'apellidos' => ['string', 'max:125'],
            'telefono' => ['string', 'max:50'],
            'ciudad' => ['string', 'max:75'],
            'pais' => ['string', 'max:75'],
            'fecha_nac' => ['date'],
            'img_user' => 'image',
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}
