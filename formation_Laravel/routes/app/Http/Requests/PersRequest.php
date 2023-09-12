<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    // public function rules(): array
    // {
    //     return [
    //         //
    //     ];
    // }
    public function rules(): array
    {
        return [
            // bail garantit que les règles de validation suivantes ne seront pas exécutées si la première règle de validation échoue.
            "nom"=>'bail|required|between:3,8|alpha'
        ];
    }
}
