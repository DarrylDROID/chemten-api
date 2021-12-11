<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LessonResource extends JsonResource
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
            'lesson_id' => $this->lesson_id,
            'lesson_topic' => $this->lesson_topic,
            'lesson_level' => $this->lesson_level,
            'lesson_image' => $this->lesson_image,
            'lesson_description' => $this->lesson_description
        ];
    }
}
