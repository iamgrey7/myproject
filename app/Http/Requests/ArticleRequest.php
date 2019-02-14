<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
        $id = $this->article;
        return [
            'title' => 'required|max:255', 
            'content' => 'required', 
            'author' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Judul harus diisi" , 
            'title.unique' => "Judul ini sudah ada, pilih nama Judul yang lain ",
            'content.required' => "Konten harus diisi",
            'author.required' => "Penulis harus diisi"
        ];
    }
    
}
