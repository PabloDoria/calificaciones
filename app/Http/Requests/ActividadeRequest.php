<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActividadeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    
        {
            return [
                'nombre' => 'required|string',
                'tipo_actividad' => 'required|string',
                'calificacion' => 'numeric', // Campo opcional, puede ser nulo o un valor numérico
                'materia_id' => 'required',
            ];
        
        
    }
}
