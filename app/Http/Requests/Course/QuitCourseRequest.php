<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class QuitCourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $course = $this->route('course');

        if ($this->request->has('user_id')) {
            return $this->user()->can('update', $course);
        } else {
            return $this->user()->can('enroll', $course);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => [
                'sometimes',
                'required',
                'integer',
                'exists:users,id',
            ],
        ];
    }
}
