<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubLessonResource extends JsonResource
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
            'sublesson_id' => $this->sublesson_id,
            'lesson_id' => $this->lesson_id,
            'sublesson_topic' => $this->sublesson_topic,
            'sublesson_image' => $this->sublesson_image,
            'sublesson_description' => $this->sublesson_description
        ];
    }
}
