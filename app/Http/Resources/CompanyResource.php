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
            'email'                 => $this->email,
            'company_phone'         => $this->company_phone,
            'supervisor'            => $this->supervisor,
            'supervisor_phone'      => $this->supervisor_phone,
            'npwp'                  => $this->npwp,
            'siup'                  => $this->siup,
            'status'                => $this->status,
        ];
    }
}
