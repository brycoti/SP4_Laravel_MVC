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
        'id_home_team' => 'required|numeric|exists:teams,team_id',
        'id_away_team' => 'required|numeric|exists:teams,team_id|different:id_home_team',
        'match_date' => 'required|date|after_or_equal:today',
        'home_goals' => 'nullable|numeric|min:0',
        'away_goals' => 'nullable|numeric|min:0',
        ];
    }

    public function messages()
    {
        return [
            'id_home_team.required' => 'The home team is required.',
            'id_home_team.numeric' => 'The ID of the home team must be a number.',
            'id_home_team.exists' => 'The selected home team is not valid.',

            'id_away_team.required' => 'The away team is required.',
            'id_away_team.numeric' => 'The ID of the away team must be a number.',
            'id_away_team.exists' => 'The selected away team is not valid.',
            'id_away_team.different' => 'The away team and the home team must not be the same.',

            'match_date.required' => 'The match date is required.',
            'match_date.date' => 'The match date must be a valid date.',
            'match_date.after_or_equal' => 'The match date cannot be earlier than today.',

            'home_goals.numeric' => 'Goals for the home team must be a number.',
            'home_goals.min' => 'Goals for the home team cannot be negative.',

            'away_goals.numeric' => 'Goals for the away team must be a number.',
            'away_goals.min' => 'Goals for the away team cannot be negative.',
        ];
    }
}
