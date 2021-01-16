<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                    => $this->id,
            'name'                  => $this->name,
            'address'               => $this->address,
            'supervisor'            => $this->supervisor,
            'supervisor_contact'    => $this->supervisor_contact,
            'email'                 => $this->email,
            'phone'                 => $this->phone,
            'npwp'                  => $this->npwp,
        ];
    }
}
