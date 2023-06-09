<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "id" => "unique:books,id",
            "title" => "required|string|max:100",
            "author" => "required|string|max:50",
            "description" => "nullable|string|max:500",
            //"picture" => "nullable|string|max:50",
            //"genre" => "required|array|min:3",
        ];
    }
}
