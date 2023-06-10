<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticleRequest extends FormRequest
{
    
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:8'],
            'content' => ['nullable'],
            'author' => ['required', 'string'],
        ];
    }
    
}
