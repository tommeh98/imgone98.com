<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
//use Illuminate\Http\Request;
use Auth;


class PostFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return true;
        ///*
        if(Auth::user()->id == 1) {
            return true;
        } else {
            return false;
        }   
        //*/  
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'content'=> 'required|min:10',
        ];
    }
}
