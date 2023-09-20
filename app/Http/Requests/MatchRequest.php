<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatchRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'match_date' => 'required|date',
            'home_goals' => 'integer|min:0',
            'away_goals' => 'integer|min:0',
        ];
    }

    public function messages()
    {
        return [
            'match_date.required' => 'Please provide the date of the match.',
            'home_goals.integer' => 'The home team goals must be a number.',
            'home_goals.min' => 'Home team goals cannot be negative.',
            'away_goals.integer' => 'The away team goals must be a number.',
            'away_goals.min' => 'Away team goals cannot be negative.',
           ];
    }
}
