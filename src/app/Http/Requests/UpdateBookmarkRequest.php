<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateBookmarkRequest
 * @package App\Http\Requests
 * 
 * @property-read string comment
 * @property-read int category
 */
class UpdateBookmarkRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'comment' => 'required|string|min:10|max:1000',
      'category' => 'required|integer|exists:bookmark_categories,id',
    ];
  }
}
