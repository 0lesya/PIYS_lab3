<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatchArticleRequest extends FormRequest
{
    public function rules(): array
    {
        $id = (int) $this->route('id');
        return [
            'title' => ['required', 'min:8'],
            'content' => ['nullable'],
            'author' => ['required', 'string'],
        ];
    }
  
}
