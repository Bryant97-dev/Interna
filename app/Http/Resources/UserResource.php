<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\URL;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if (empty($this->profile_photo_path))
        {
            $this->profile_photo_path = $this->profile_photo_url;
        }
        else
        {
            $this->profile_photo_path = URL::to('/storage/'.$this->profile_photo_path);
        }
        return [
            'id'                    => $this->id,
            'study_program'         => $this->study_programs->abbreviation,
            'period'                => $this->periods->period,
            'name'                  => $this->name,
            'email'                 => $this->email,
            'nim'                   => $this->nim,
            'gender'                => $this->gender,
            'line_account'          => $this->line_account,
            'phone'                 => $this->phone,
            'batch'                 => $this->batch,
            'description'           => $this->description,
            'profile_photo_path'    => $this->profile_photo_path,
        ];
    }
}
