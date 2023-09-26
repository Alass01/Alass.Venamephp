<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;


class CreatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titre'=> 'required'

        ];
    }

    public function failevalidation (validator $validator){

        throw new HttpResponseexception(response()->json([
            'success'=>false,
            'error'=>true,
            'message'=>'erreurs de validation',
            'errorsList'=>$validator ->errors(),
        ]));
    }

    public function messages(){

        return[
            'titre.required'=> 'un titre doit etre fourni '
        ];
    }
}
