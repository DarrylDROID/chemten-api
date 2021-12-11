<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExerciseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'exercise_id' => $this->exercise_id,
            'exercise_topic' => $this->exercise_topic,
            'exercise_level' => $this->exercise_level,
            'exercise_image' => $this->exercise_image,
            'exercise_description' => $this->exercise_description
        ];
    }
}
