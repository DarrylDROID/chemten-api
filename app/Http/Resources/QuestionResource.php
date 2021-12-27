<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
            'id' => $this->id,
            'exercise_id' => $this->exercise_id,
            'question_description' => $this->question_description,
            'qchoice1' => $this->qchoice1,
            'qchoice2' => $this->qchoice2,
            'qchoice3' => $this->qchoice3,
            'qchoice4' => $this->qchoice4,
            'correctanswer' => $this->correctanswer

        ];
    }
}
