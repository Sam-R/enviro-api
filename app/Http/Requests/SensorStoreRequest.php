<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SensorStoreRequest extends FormRequest
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
        return [
            'temperature' => 'required|numeric',
            'pressure' => 'sometimes|numeric',
            'altitude' => 'sometimes|numeric',
            'light' => 'sometimes|integer',
            'light_rgb' => 'sometimes|array',
            // 'magnetometer_x' => 'sometimes|integer',
            // 'magnetometer_y' => 'sometimes|integer',
            // 'magnetometer_z' => 'sometimes|integer',
            // 'accelerometer_x' => 'sometimes|integer',
            // 'accelerometer_y' => 'sometimes|integer',
            // 'accelerometer_z' => 'sometimes|integer',
        ];
    }
}
